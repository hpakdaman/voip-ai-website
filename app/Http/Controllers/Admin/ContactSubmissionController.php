<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactSubmission::query()->latest();

        // Filter by read status
        if ($request->has('status')) {
            if ($request->status === 'unread') {
                $query->unread();
            } elseif ($request->status === 'read') {
                $query->read();
            }
        }

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('subject', 'LIKE', "%{$search}%")
                  ->orWhere('company', 'LIKE', "%{$search}%");
            });
        }

        $submissions = $query->paginate(15);
        $unreadCount = ContactSubmission::unread()->count();

        return view('admin.contacts.index', compact('submissions', 'unreadCount'));
    }

    public function show($id)
    {
        $submission = ContactSubmission::findOrFail($id);
        
        // Mark as read when viewed
        if (!$submission->is_read) {
            $submission->markAsRead();
        }

        return view('admin.contacts.show', compact('submission'));
    }

    public function markAsRead(Request $request)
    {
        if ($request->has('ids')) {
            ContactSubmission::whereIn('id', $request->ids)->update(['is_read' => true]);
            return response()->json(['success' => true, 'message' => 'Marked as read']);
        }

        return response()->json(['success' => false, 'message' => 'No items selected']);
    }

    public function destroy($id)
    {
        $submission = ContactSubmission::findOrFail($id);
        $submission->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact submission deleted successfully.');
    }

    public function bulkDelete(Request $request)
    {
        if ($request->has('ids')) {
            ContactSubmission::whereIn('id', $request->ids)->delete();
            return response()->json(['success' => true, 'message' => 'Selected submissions deleted']);
        }

        return response()->json(['success' => false, 'message' => 'No items selected']);
    }
}
