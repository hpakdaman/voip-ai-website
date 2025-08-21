<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemoBooking;
use Illuminate\Http\Request;

class AdminDemoController extends Controller
{
    /**
     * Display a listing of demo bookings
     */
    public function index(Request $request)
    {
        $query = DemoBooking::with('user')->orderBy('scheduled_at', 'desc');
        
        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('scheduled_at', '>=', $request->date_from);
        }
        
        if ($request->filled('date_to')) {
            $query->whereDate('scheduled_at', '<=', $request->date_to);
        }
        
        // Search by name, email, or company
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%");
            });
        }
        
        $bookings = $query->paginate(20);
        
        return view('admin.demos.index', compact('bookings'));
    }

    /**
     * Display the specified demo booking
     */
    public function show(DemoBooking $demo)
    {
        return view('admin.demos.show', compact('demo'));
    }

    /**
     * Show the form for editing the specified demo booking
     */
    public function edit(DemoBooking $demo)
    {
        return view('admin.demos.edit', compact('demo'));
    }

    /**
     * Update the specified demo booking
     */
    public function update(Request $request, DemoBooking $demo)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled,no_show',
            'notes' => 'nullable|string',
            'meeting_link' => 'nullable|url'
        ]);

        $demo->update($request->only(['status', 'notes', 'meeting_link']));

        return redirect()->route('admin.demos.show', $demo)
                        ->with('success', 'Demo booking updated successfully.');
    }

    /**
     * Confirm a demo booking
     */
    public function confirm(DemoBooking $demo)
    {
        $demo->update([
            'status' => 'confirmed',
            'user_id' => auth()->id()
        ]);

        // TODO: Send confirmation email
        // TODO: Create calendar event

        return back()->with('success', 'Demo booking confirmed.');
    }

    /**
     * Mark demo as completed
     */
    public function complete(DemoBooking $demo)
    {
        $demo->update([
            'status' => 'completed',
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'Demo marked as completed.');
    }

    /**
     * Mark demo as no-show
     */
    public function noShow(DemoBooking $demo)
    {
        $demo->update([
            'status' => 'no_show',
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'Demo marked as no-show.');
    }

    /**
     * Delete a demo booking
     */
    public function destroy(DemoBooking $demo)
    {
        $demo->delete();

        return redirect()->route('admin.demos.index')
                        ->with('success', 'Demo booking deleted.');
    }
}
