@extends('layouts.admin')

@section('title', 'Dashboard - Admin')

@section('content')
<div class="min-h-screen" style="background: var(--voip-bg);">
    <div class="container mx-auto px-6 pt-24 pb-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Admin Dashboard</h1>
                <p class="text-slate-300">Manage demo bookings and availability</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('admin.demos.index') }}" 
                   class="px-4 py-2 rounded-lg text-white font-medium hover:scale-105 transition-all duration-300"
                   style="background: var(--voip-primary);">
                    <i class="uil uil-calendar-alt mr-2"></i>
                    Manage Demos
                </a>
                <a href="{{ route('admin.availability.index') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-clock mr-2"></i>
                    Availability
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-7 gap-4 mb-8">
            @php
                $totalBookings = \App\Models\DemoBooking::count();
                $pendingBookings = \App\Models\DemoBooking::where('status', 'pending')->count();
                $confirmedBookings = \App\Models\DemoBooking::where('status', 'confirmed')->count();
                $todayBookings = \App\Models\DemoBooking::whereDate('scheduled_at', today())->count();
                
                $totalContacts = \App\Models\ContactSubmission::count();
                $unreadContacts = \App\Models\ContactSubmission::where('is_read', false)->count();
                $todayContacts = \App\Models\ContactSubmission::whereDate('created_at', today())->count();
            @endphp

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Bookings</p>
                        <p class="text-2xl font-bold" style="color: var(--voip-primary);">{{ $totalBookings }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(29, 120, 97, 0.2);">
                        <i class="uil uil-calendar-alt text-xl" style="color: var(--voip-primary);"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Pending</p>
                        <p class="text-2xl font-bold text-yellow-600">{{ $pendingBookings }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-yellow-100">
                        <i class="uil uil-clock text-xl text-yellow-600"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Confirmed</p>
                        <p class="text-2xl font-bold text-green-600">{{ $confirmedBookings }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-green-100">
                        <i class="uil uil-check-circle text-xl text-green-600"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Today</p>
                        <p class="text-2xl font-bold" style="color: var(--voip-link);">{{ $todayBookings }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: rgba(30, 192, 141, 0.2);">
                        <i class="uil uil-today-alt text-xl" style="color: var(--voip-link);"></i>
                    </div>
                </div>
            </div>

            <!-- Contact Submission Stats -->
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Total Contacts</p>
                        <p class="text-2xl font-bold text-purple-600">{{ $totalContacts }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-purple-100">
                        <i class="uil uil-envelope text-xl text-purple-600"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Unread</p>
                        <p class="text-2xl font-bold text-red-600">{{ $unreadContacts }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-red-100">
                        <i class="uil uil-envelope-exclamation text-xl text-red-600"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm">Today</p>
                        <p class="text-2xl font-bold text-indigo-600">{{ $todayContacts }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center bg-indigo-100">
                        <i class="uil uil-calendar-alt text-xl text-indigo-600"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Bookings -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-800">Recent Demo Bookings</h2>
                    <a href="{{ route('admin.demos.index') }}" 
                       class="text-sm font-medium hover:underline" style="color: var(--voip-link);">
                        View All
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Scheduled</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse(\App\Models\DemoBooking::latest()->take(5)->get() as $booking)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $booking->full_name }}</div>
                                        <div class="text-sm text-gray-500">{{ $booking->email }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $booking->company }}</div>
                                    @if($booking->industry)
                                        <div class="text-sm text-gray-500">{{ ucfirst(str_replace('-', ' ', $booking->industry)) }}</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $booking->scheduled_at->format('M j, Y g:i A') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($booking->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($booking->status === 'confirmed') bg-green-100 text-green-800
                                        @elseif($booking->status === 'completed') bg-blue-100 text-blue-800
                                        @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                                        @else bg-gray-100 text-gray-800
                                        @endif">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.demos.show', $booking) }}" 
                                           class="text-indigo-600 hover:text-indigo-900 font-medium">View</a>
                                        @if($booking->status === 'pending')
                                            <form action="{{ route('admin.demos.confirm', $booking) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-green-600 hover:text-green-900 font-medium">Confirm</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">No demo bookings yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection