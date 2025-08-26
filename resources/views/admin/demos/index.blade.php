@extends('layouts.main')

@section('title', 'Sawtic | Demo Bookings Management')

@section('content')
<div class="min-h-screen" style="background: var(--voip-bg);">
    <div class="container mx-auto px-4 sm:px-6 pt-24 pb-8">
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
                        <a href="{{ route('admin.dashboard') }}" class="ml-1 text-sm font-medium text-slate-300 hover:text-white md:ml-2">Admin Dashboard</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="uil uil-angle-right text-slate-400"></i>
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">Demo Bookings</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Demo Bookings</h1>
                <p class="text-slate-300">Manage all demo booking requests</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('admin.availability.index') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-clock mr-2"></i>
                    Manage Availability
                </a>
                <a href="{{ route('admin.dashboard') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-arrow-left mr-2"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl border border-green-200 text-green-800" style="background: rgba(34, 197, 94, 0.1);">
                <div class="flex items-center">
                    <i class="uil uil-check-circle text-green-600 text-xl mr-3"></i>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- Filters -->
        <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
            <h2 class="text-xl font-bold mb-4 text-gray-800">
                <i class="uil uil-filter mr-2 text-green-600"></i>
                Filter Bookings
            </h2>
            
            <form method="GET" action="{{ route('admin.demos.index') }}" class="space-y-4 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="status" class="w-full px-3 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 text-sm">
                        <option value="">All Statuses</option>
                        <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ request('status') === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        <option value="no_show" {{ request('status') === 'no_show' ? 'selected' : '' }}>No Show</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">From Date</label>
                    <input type="date" name="date_from" value="{{ request('date_from') }}"
                           class="w-full px-3 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 text-sm">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">To Date</label>
                    <input type="date" name="date_to" value="{{ request('date_to') }}"
                           class="w-full px-3 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 text-sm">
                </div>
                
                <div class="lg:col-span-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                    <div class="flex gap-2 min-w-0">
                        <input type="text" name="search" value="{{ request('search') }}" 
                               placeholder="Name, email, company..."
                               class="flex-1 min-w-0 px-3 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 text-sm">
                        <button type="submit" 
                                class="px-4 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300 flex-shrink-0"
                                style="background: var(--voip-primary);">
                            <i class="uil uil-search text-sm"></i>
                        </button>
                        @if(request()->hasAny(['status', 'date_from', 'date_to', 'search']))
                        <a href="{{ route('admin.demos.index') }}" 
                           class="px-4 py-3 rounded-xl border border-gray-300 text-gray-700 font-semibold hover:bg-gray-50 transition-all duration-300 flex-shrink-0">
                            <i class="uil uil-times text-sm"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

        <!-- Bookings Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-gray-800">All Demo Bookings</h2>
                    <span class="text-gray-600">{{ $bookings->total() }} total bookings</span>
                </div>
            </div>

            @if($bookings->isEmpty())
                <div class="text-center py-12">
                    <i class="uil uil-calendar-slash text-6xl text-gray-400 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">No Demo Bookings</h3>
                    <p class="text-gray-600 mb-4">No bookings match your current filters.</p>
                    <a href="{{ route('admin.demos.index') }}" 
                       class="inline-flex items-center px-6 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300"
                       style="background: var(--voip-primary);">
                        <i class="uil uil-refresh mr-2"></i>
                        Clear Filters
                    </a>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Client</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Company</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Scheduled</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($bookings as $booking)
                                <tr class="hover:bg-green-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">{{ $booking->full_name }}</div>
                                            <div class="text-sm text-gray-600">{{ $booking->email }}</div>
                                            <div class="text-sm text-gray-600">{{ $booking->phone }}</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $booking->company }}</div>
                                        @if($booking->industry)
                                            <div class="text-sm text-gray-600">{{ ucfirst(str_replace('-', ' ', $booking->industry)) }}</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 font-medium">{{ $booking->scheduled_at->format('M j, Y') }}</div>
                                        <div class="text-sm text-gray-600">{{ $booking->scheduled_at->format('g:i A') }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                            @if($booking->status === 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($booking->status === 'confirmed') bg-green-100 text-green-800
                                            @elseif($booking->status === 'completed') bg-blue-100 text-blue-800
                                            @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                                            @elseif($booking->status === 'no_show') bg-orange-100 text-orange-800
                                            @else bg-gray-100 text-gray-800
                                            @endif">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <div class="flex gap-2">
                                            <a href="{{ route('admin.demos.show', $booking) }}" 
                                               class="text-green-600 hover:text-green-500 font-medium transition-colors">
                                                View
                                            </a>
                                            @if($booking->status === 'pending')
                                                <form action="{{ route('admin.demos.confirm', $booking) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="text-green-600 hover:text-green-500 font-medium transition-colors">
                                                        Confirm
                                                    </button>
                                                </form>
                                            @endif
                                            
                                            <!-- Delete Button -->
                                            <form action="{{ route('admin.demos.destroy', $booking) }}" method="POST" class="inline" 
                                                  onsubmit="return confirm('Are you sure you want to delete this booking?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-500 font-medium transition-colors">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($bookings->hasPages())
                    <div class="px-6 py-4 border-t border-gray-200">
                        {{ $bookings->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection