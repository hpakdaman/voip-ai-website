@extends('layouts.main')

@section('title', 'Sawtic | Admin Dashboard - Manage Demo Bookings & Contact Requests')

@section('content')
<div class="min-h-screen" style="background: var(--voip-bg);">
    <div class="container mx-auto px-4 sm:px-6 pt-20 sm:pt-24 pb-8">
        <!-- Breadcrumbs -->
        <nav class="flex mb-6 mt-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-white">
                        <i class="uil uil-estate mr-1"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="uil uil-angle-right text-slate-400"></i>
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">Admin Dashboard</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Admin Dashboard</h1>
                <p class="text-slate-300">Manage demo bookings and contact requests</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('admin.demos.index') }}" 
                   class="px-4 py-2 rounded-lg text-white font-medium hover:scale-105 transition-all duration-300"
                   style="background: var(--voip-primary);">
                    <i class="uil uil-calendar-alt mr-2"></i>
                    Manage Demos
                </a>
                <a href="{{ route('admin.contacts.index') }}" 
                   class="px-4 py-2 rounded-lg text-white font-medium hover:scale-105 transition-all duration-300"
                   style="background: var(--voip-link);">
                    <i class="uil uil-envelope mr-2"></i>
                    Contact Requests
                </a>
                <a href="{{ route('admin.availability.index') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-clock mr-2"></i>
                    Availability
                </a>
            </div>
        </div>

        <!-- Demo Booking Stats -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-white mb-4">Demo Booking Statistics</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @php
                    $totalBookings = \App\Models\DemoBooking::count();
                    $pendingBookings = \App\Models\DemoBooking::where('status', 'pending')->count();
                    $confirmedBookings = \App\Models\DemoBooking::where('status', 'confirmed')->count();
                    $todayBookings = \App\Models\DemoBooking::whereDate('scheduled_at', today())->count();
                @endphp

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Total Bookings</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight" style="color: var(--voip-primary);">{{ $totalBookings }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3" style="background: rgba(29, 120, 97, 0.2);">
                            <i class="uil uil-calendar-alt text-lg sm:text-xl" style="color: var(--voip-primary);"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Pending Bookings</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight text-yellow-600">{{ $pendingBookings }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3 bg-yellow-100">
                            <i class="uil uil-clock text-lg sm:text-xl text-yellow-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Confirmed Bookings</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight text-green-600">{{ $confirmedBookings }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3 bg-green-100">
                            <i class="uil uil-check-circle text-lg sm:text-xl text-green-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Today's Bookings</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight" style="color: var(--voip-link);">{{ $todayBookings }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3" style="background: rgba(30, 192, 141, 0.2);">
                            <i class="uil uil-calendar-alt text-lg sm:text-xl" style="color: var(--voip-link);"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Request Stats -->
        <div class="mb-8">
            <h3 class="text-lg font-semibold text-white mb-4">Contact Request Statistics</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $totalContacts = \App\Models\ContactSubmission::count();
                    $unreadContacts = \App\Models\ContactSubmission::where('is_read', false)->count();
                    $todayContacts = \App\Models\ContactSubmission::whereDate('created_at', today())->count();
                @endphp

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Total Contact Requests</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight text-purple-600">{{ $totalContacts }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3 bg-purple-100">
                            <i class="uil uil-envelope text-lg sm:text-xl text-purple-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Unread Requests</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight text-red-600">{{ $unreadContacts }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3 bg-red-100">
                            <i class="uil uil-envelope-open text-lg sm:text-xl text-red-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 sm:p-6 shadow-lg">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <p class="text-gray-600 text-xs sm:text-sm leading-tight">Today's Requests</p>
                            <p class="text-xl sm:text-2xl font-bold mt-1 leading-tight text-indigo-600">{{ $todayContacts }}</p>
                        </div>
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full flex items-center justify-center flex-shrink-0 ml-3 bg-indigo-100">
                            <i class="uil uil-envelope-check text-lg sm:text-xl text-indigo-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Bookings -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-4 sm:p-6 border-b border-gray-200">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                    <h2 class="text-lg sm:text-xl font-bold text-gray-800">Recent Demo Bookings</h2>
                    <a href="{{ route('admin.demos.index') }}" 
                       class="text-sm font-medium hover:underline" style="color: var(--voip-link);">
                        View All
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[600px]">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">Company</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Scheduled</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse(\App\Models\DemoBooking::latest()->take(5)->get() as $booking)
                            <tr class="hover:bg-gray-50">
                                <td class="px-3 sm:px-6 py-4">
                                    <div>
                                        <div class="text-xs sm:text-sm font-medium text-gray-900">{{ $booking->full_name }}</div>
                                        <div class="text-xs sm:text-sm text-gray-500 truncate max-w-[150px] sm:max-w-none">{{ $booking->email }}</div>
                                        <div class="sm:hidden text-xs text-gray-500 mt-1">{{ $booking->company }}</div>
                                    </div>
                                </td>
                                <td class="px-3 sm:px-6 py-4 hidden sm:table-cell">
                                    <div class="text-sm text-gray-900">{{ $booking->company }}</div>
                                    @if($booking->industry)
                                        <div class="text-sm text-gray-500">{{ ucfirst(str_replace('-', ' ', $booking->industry)) }}</div>
                                    @endif
                                </td>
                                <td class="px-3 sm:px-6 py-4 text-xs sm:text-sm text-gray-900">
                                    <div class="sm:hidden">{{ $booking->scheduled_at->format('M j') }}</div>
                                    <div class="hidden sm:block">{{ $booking->scheduled_at->format('M j, Y g:i A') }}</div>
                                </td>
                                <td class="px-3 sm:px-6 py-4">
                                    <span class="inline-flex items-center px-2 sm:px-2.5 py-0.5 rounded-full text-xs font-medium
                                        @if($booking->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($booking->status === 'confirmed') bg-green-100 text-green-800
                                        @elseif($booking->status === 'completed') bg-blue-100 text-blue-800
                                        @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                                        @else bg-gray-100 text-gray-800
                                        @endif">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td class="px-3 sm:px-6 py-4 text-xs sm:text-sm">
                                    <div class="flex flex-col sm:flex-row gap-1 sm:gap-2">
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
                                <td colspan="5" class="px-3 sm:px-6 py-8 text-center text-gray-500 text-sm">No demo bookings yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection