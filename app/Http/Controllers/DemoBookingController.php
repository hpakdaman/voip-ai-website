<?php

namespace App\Http\Controllers;

use App\Models\DemoBooking;
use App\Models\AvailabilitySlot;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class DemoBookingController extends Controller
{
    /**
     * Show the demo booking form
     */
    public function create()
    {
        // Get available slots for the next 30 days
        $availableSlots = AvailabilitySlot::available()
            ->upcoming()
            ->where('date', '<=', now()->addDays(30))
            ->orderBy('date')
            ->orderBy('start_time')
            ->get()
            ->filter(function ($slot) {
                return $slot->canBeBooked();
            })
            ->groupBy(function ($slot) {
                return $slot->date->format('Y-m-d');
            });

        return view('demo.booking-form', compact('availableSlots'));
    }

    /**
     * Get available time slots for a specific date (AJAX)
     */
    public function getAvailableSlots(Request $request)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today'
        ]);

        $slots = AvailabilitySlot::available()
            ->forDate($request->date)
            ->orderBy('start_time')
            ->get()
            ->filter(function ($slot) {
                return $slot->canBeBooked();
            })
            ->map(function ($slot) {
                return [
                    'id' => $slot->id,
                    'time' => $slot->formatted_time_range,
                    'datetime' => $slot->date_time->toISOString()
                ];
            });

        return response()->json($slots->values());
    }

    /**
     * Store a new demo booking
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'industry' => 'nullable|string|max:255',
            'requirements' => 'nullable|string|max:1000',
            'availability_slot_id' => 'required|exists:availability_slots,id',
            'timezone' => 'required|string'
        ]);

        // Get the availability slot and verify it's still available
        $slot = AvailabilitySlot::findOrFail($request->availability_slot_id);
        
        if (!$slot->canBeBooked()) {
            return back()->withErrors(['availability_slot_id' => 'This time slot is no longer available.']);
        }

        // Create the demo booking
        $booking = DemoBooking::create([
            'availability_slot_id' => $request->availability_slot_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'industry' => $request->industry,
            'requirements' => $request->requirements,
            'scheduled_at' => $slot->date_time,
            'timezone' => $request->timezone,
            'status' => 'pending'
        ]);

        // TODO: Send confirmation email
        // TODO: Create Google Calendar event
        // TODO: Send notification to admin

        return redirect()->route('demo.confirmation', $booking->id)
                        ->with('success', 'Your demo has been scheduled successfully!');
    }

    /**
     * Show booking confirmation
     */
    public function confirmation(DemoBooking $booking)
    {
        return view('demo.confirmation', compact('booking'));
    }

    /**
     * Show form to reschedule booking
     */
    public function reschedule(DemoBooking $booking)
    {
        if (!$booking->isEditable()) {
            return redirect()->route('demo.confirmation', $booking->id)
                           ->withErrors(['Cannot reschedule this booking.']);
        }

        $availableSlots = AvailabilitySlot::available()
            ->upcoming()
            ->where('date', '<=', now()->addDays(30))
            ->orderBy('date')
            ->orderBy('start_time')
            ->get()
            ->filter(function ($slot) {
                return $slot->canBeBooked();
            })
            ->groupBy(function ($slot) {
                return $slot->date->format('Y-m-d');
            });

        return view('demo.reschedule', compact('booking', 'availableSlots'));
    }

    /**
     * Update booking with new time slot
     */
    public function updateSchedule(Request $request, DemoBooking $booking)
    {
        if (!$booking->isEditable()) {
            return redirect()->route('demo.confirmation', $booking->id)
                           ->withErrors(['Cannot reschedule this booking.']);
        }

        $request->validate([
            'availability_slot_id' => 'required|exists:availability_slots,id',
            'timezone' => 'required|string'
        ]);

        $slot = AvailabilitySlot::findOrFail($request->availability_slot_id);
        
        if (!$slot->canBeBooked()) {
            return back()->withErrors(['availability_slot_id' => 'This time slot is no longer available.']);
        }

        $booking->update([
            'scheduled_at' => $slot->date_time,
            'timezone' => $request->timezone
        ]);

        // TODO: Update Google Calendar event
        // TODO: Send reschedule notification

        return redirect()->route('demo.confirmation', $booking->id)
                        ->with('success', 'Your demo has been rescheduled successfully!');
    }

    /**
     * Cancel a booking
     */
    public function cancel(DemoBooking $booking)
    {
        if (!$booking->isEditable()) {
            return redirect()->route('demo.confirmation', $booking->id)
                           ->withErrors(['Cannot cancel this booking.']);
        }

        $booking->update(['status' => 'cancelled']);

        // TODO: Cancel Google Calendar event
        // TODO: Send cancellation notification

        return redirect()->route('demo.booking')
                        ->with('success', 'Your demo booking has been cancelled.');
    }
}
