<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AvailabilitySlot;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AvailabilitySlotController extends Controller
{
    /**
     * Display availability slots calendar
     */
    public function index(Request $request)
    {
        $currentMonth = $request->get('month', now()->format('Y-m'));
        $startDate = Carbon::parse($currentMonth . '-01');
        $endDate = $startDate->copy()->endOfMonth();
        
        // Get slots for the current month
        $slots = AvailabilitySlot::whereBetween('date', [$startDate, $endDate])
                                ->orderBy('date')
                                ->orderBy('start_time')
                                ->get()
                                ->groupBy('date');
        
        // Get month navigation
        $prevMonth = $startDate->copy()->subMonth();
        $nextMonth = $startDate->copy()->addMonth();
        
        return view('admin.availability.index', compact('slots', 'currentMonth', 'prevMonth', 'nextMonth', 'startDate'));
    }
    
    /**
     * Show form to create availability slots
     */
    public function create()
    {
        return view('admin.availability.create');
    }
    
    /**
     * Store new availability slots
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'slot_duration' => 'required|integer|min:15|max:120',
            'days_of_week' => 'required|array|min:1',
            'days_of_week.*' => 'integer|between:0,6',
            'timezone' => 'required|string'
        ]);

        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);
        $startTime = Carbon::parse($request->start_time);
        $endTime = Carbon::parse($request->end_time);
        $duration = (int) $request->slot_duration;
        $daysOfWeek = $request->days_of_week;
        
        $slotsCreated = 0;
        
        // Generate slots for each day in the range
        $current = $startDate->copy();
        while ($current <= $endDate) {
            // Check if current day is in selected days of week
            if (in_array($current->dayOfWeek, $daysOfWeek)) {
                // Generate time slots for this day
                $currentSlotTime = $startTime->copy();
                
                while ($currentSlotTime->copy()->addMinutes($duration) <= $endTime) {
                    $slotStart = $currentSlotTime->copy();
                    $slotEnd = $currentSlotTime->copy()->addMinutes($duration);
                    
                    // Check if slot already exists
                    $exists = AvailabilitySlot::where('date', $current->format('Y-m-d'))
                                            ->where('start_time', $slotStart->format('H:i:s'))
                                            ->where('end_time', $slotEnd->format('H:i:s'))
                                            ->exists();
                    
                    if (!$exists) {
                        AvailabilitySlot::create([
                            'date' => $current->format('Y-m-d'),
                            'start_time' => $slotStart->format('H:i:s'),
                            'end_time' => $slotEnd->format('H:i:s'),
                            'timezone' => $request->timezone,
                            'is_available' => true,
                            'is_recurring' => false,
                            'user_id' => auth()->id(),
                            'notes' => $request->notes
                        ]);
                        $slotsCreated++;
                    }
                    
                    // Move to next slot time
                    $currentSlotTime->addMinutes($duration);
                }
            }
            $current->addDay();
        }
        
        return redirect()->route('admin.availability.index')
                        ->with('success', "Created {$slotsCreated} availability slots successfully.");
    }
    
    /**
     * Bulk update availability slots
     */
    public function bulkUpdate(Request $request)
    {
        $request->validate([
            'action' => 'required|in:enable,disable,delete',
            'slot_ids' => 'required|array',
            'slot_ids.*' => 'exists:availability_slots,id'
        ]);
        
        $slots = AvailabilitySlot::whereIn('id', $request->slot_ids);
        
        switch ($request->action) {
            case 'enable':
                $slots->update(['is_available' => true]);
                $message = 'Selected slots enabled successfully.';
                break;
            case 'disable':
                $slots->update(['is_available' => false]);
                $message = 'Selected slots disabled successfully.';
                break;
            case 'delete':
                // Only delete if no bookings exist
                $slotsWithBookings = $slots->whereHas('demoBookings')->count();
                if ($slotsWithBookings > 0) {
                    return back()->with('error', 'Cannot delete slots that have existing bookings.');
                }
                $slots->delete();
                $message = 'Selected slots deleted successfully.';
                break;
        }
        
        return back()->with('success', $message);
    }
    
    /**
     * Update individual slot
     */
    public function update(Request $request, AvailabilitySlot $availability)
    {
        $request->validate([
            'is_available' => 'required|in:true,false,1,0',
            'notes' => 'nullable|string|max:500'
        ]);
        
        $newStatus = filter_var($request->is_available, FILTER_VALIDATE_BOOLEAN);
        
        $availability->update([
            'is_available' => $newStatus,
            'notes' => $request->notes
        ]);
        
        return back()->with('success', 'Availability slot updated successfully.');
    }
    
    /**
     * Delete individual slot
     */
    public function destroy(AvailabilitySlot $availability)
    {
        // Check if slot has bookings
        if ($availability->demoBookings()->exists()) {
            return back()->with('error', 'Cannot delete slot with existing bookings.');
        }
        
        $deleted = $availability->delete();
        
        if ($deleted) {
            return back()->with('success', 'Availability slot deleted successfully.');
        } else {
            return back()->with('error', 'Failed to delete availability slot.');
        }
    }
    
    /**
     * Generate quick availability templates
     */
    public function quickGenerate(Request $request)
    {
        $request->validate([
            'template' => 'required|in:business_hours,extended_hours,weekends_only',
            'weeks_ahead' => 'required|integer|min:1|max:12'
        ]);
        
        $weeksAhead = $request->weeks_ahead;
        $startDate = now()->addDay(); // Start from tomorrow
        $endDate = $startDate->copy()->addWeeks($weeksAhead);
        
        $slotsCreated = 0;
        
        switch ($request->template) {
            case 'business_hours':
                // Monday to Friday, 9 AM to 6 PM, 30-minute slots
                $slotsCreated = $this->generateTemplate($startDate, $endDate, [1,2,3,4,5], '09:00', '18:00', 30);
                break;
            case 'extended_hours':
                // Monday to Friday, 8 AM to 8 PM, 30-minute slots
                $slotsCreated = $this->generateTemplate($startDate, $endDate, [1,2,3,4,5], '08:00', '20:00', 30);
                break;
            case 'weekends_only':
                // Saturday and Sunday, 10 AM to 4 PM, 60-minute slots
                $slotsCreated = $this->generateTemplate($startDate, $endDate, [6,0], '10:00', '16:00', 60);
                break;
        }
        
        return back()->with('success', "Generated {$slotsCreated} slots using {$request->template} template.");
    }
    
    private function generateTemplate($startDate, $endDate, $daysOfWeek, $startTime, $endTime, $duration)
    {
        $slotsCreated = 0;
        $current = $startDate->copy();
        
        while ($current <= $endDate) {
            if (in_array($current->dayOfWeek, $daysOfWeek)) {
                $timeSlot = Carbon::parse($startTime);
                $endTimeCarbon = Carbon::parse($endTime);
                
                while ($timeSlot->copy()->addMinutes($duration) <= $endTimeCarbon) {
                    $slotEnd = $timeSlot->copy()->addMinutes($duration);
                    
                    $exists = AvailabilitySlot::where('date', $current->format('Y-m-d'))
                                            ->where('start_time', $timeSlot->format('H:i:s'))
                                            ->where('end_time', $slotEnd->format('H:i:s'))
                                            ->exists();
                    
                    if (!$exists) {
                        AvailabilitySlot::create([
                            'date' => $current->format('Y-m-d'),
                            'start_time' => $timeSlot->format('H:i:s'),
                            'end_time' => $slotEnd->format('H:i:s'),
                            'timezone' => 'Asia/Dubai',
                            'is_available' => true,
                            'is_recurring' => false,
                            'user_id' => auth()->id(),
                            'notes' => 'Auto-generated slot'
                        ]);
                        $slotsCreated++;
                    }
                    
                    $timeSlot->addMinutes($duration);
                }
            }
            $current->addDay();
        }
        
        return $slotsCreated;
    }
}