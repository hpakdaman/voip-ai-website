@extends('layouts.main')

@section('title', 'Sawtic | Demo Booking Details - ' . $demo->full_name)

@section('content')
<div class="min-h-screen" style="background: var(--voip-bg);">
    <div class="container mx-auto px-6 pt-24 pb-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Demo Booking Details</h1>
                <p class="text-slate-300">{{ $demo->full_name }} - {{ $demo->formatted_scheduled_at }}</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('admin.demos.index') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-arrow-left mr-2"></i>
                    Back to Demos
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

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Demo Information -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Client Information -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold mb-4 text-gray-800">
                        <i class="uil uil-user mr-2 text-green-600"></i>
                        Client Information
                    </h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Full Name</label>
                            <p class="text-gray-900 font-semibold">{{ $demo->full_name }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                            <p class="text-gray-900">
                                <a href="mailto:{{ $demo->email }}" class="hover:underline text-green-600">
                                    {{ $demo->email }}
                                </a>
                            </p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone</label>
                            <p class="text-gray-900">
                                <a href="tel:{{ $demo->phone }}" class="hover:underline text-green-600">
                                    {{ $demo->phone }}
                                </a>
                            </p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Company</label>
                            <p class="text-gray-900 font-semibold">{{ $demo->company }}</p>
                        </div>
                        @if($demo->industry)
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Industry</label>
                                <p class="text-gray-900">{{ ucfirst(str_replace('-', ' ', $demo->industry)) }}</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Demo Requirements -->
@if($demo->requirements)
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <h2 class="text-xl font-bold mb-4 text-gray-800">
                            <i class="uil uil-notes mr-2 text-green-600"></i>
                            Demo Requirements
                        </h2>
                        <div class="bg-gray-50 rounded-lg p-4 border">
                            <p class="text-gray-700 leading-relaxed">{{ $demo->requirements }}</p>
                        </div>
                    </div>
                @endif

                <!-- Admin Notes -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold mb-4 text-gray-800">
                        <i class="uil uil-edit mr-2 text-green-600"></i>
                        Admin Notes & Meeting Link
                    </h2>
                    
                    <form action="{{ route('admin.demos.update', $demo) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="mb-4">
                            <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Internal Notes</label>
                            <textarea id="notes" name="notes" rows="4" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300"
                                      placeholder="Add internal notes about this demo...">{{ old('notes', $demo->notes) }}</textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="meeting_link" class="block text-sm font-medium text-gray-700 mb-2">Meeting Link</label>
                            <input type="url" id="meeting_link" name="meeting_link" 
                                   value="{{ old('meeting_link', $demo->meeting_link) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300"
                                   placeholder="https://meet.google.com/abc-xyz or https://zoom.us/j/123456789">
                        </div>
                        
                        <div class="mb-6">
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select id="status" name="status" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                                <option value="pending" {{ $demo->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="confirmed" {{ $demo->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                <option value="completed" {{ $demo->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $demo->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                <option value="no_show" {{ $demo->status === 'no_show' ? 'selected' : '' }}>No Show</option>
                            </select>
                        </div>
                        
                        <button type="submit" 
                                class="px-6 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300"
                                style="background: var(--voip-primary);">
                            <i class="uil uil-save mr-2"></i>
                            Update Demo
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar Actions -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-bold mb-4 text-gray-800">Quick Actions</h3>
                    
                    <div class="space-y-3">
                        @if($demo->status === 'pending')
                            <form action="{{ route('admin.demos.confirm', $demo) }}" method="POST" class="w-full">
                                @csrf
                                @method('PATCH')
                                <button type="submit" 
                                        class="w-full px-4 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300"
                                        style="background: var(--voip-primary);">
                                    <i class="uil uil-check-circle mr-2"></i>
                                    Confirm Demo
                                </button>
                            </form>
                        @endif
                        
                        @if(in_array($demo->status, ['pending', 'confirmed']))
                            <form action="{{ route('admin.demos.complete', $demo) }}" method="POST" class="w-full">
                                @csrf
                                @method('PATCH')
                                <button type="submit" 
                                        class="w-full px-4 py-3 rounded-xl bg-green-600 text-white font-semibold hover:scale-105 transform transition-all duration-300 hover:bg-green-700">
                                    <i class="uil uil-check-circle mr-2"></i>
                                    Mark as Completed
                                </button>
                            </form>
                            
                            <form action="{{ route('admin.demos.no-show', $demo) }}" method="POST" class="w-full">
                                @csrf
                                @method('PATCH')
                                <button type="submit" 
                                        class="w-full px-4 py-3 rounded-xl bg-orange-600 text-white font-semibold hover:scale-105 transform transition-all duration-300 hover:bg-orange-700"
                                        onclick="return confirm('Mark this demo as no-show?')">
                                    <i class="uil uil-times-circle mr-2"></i>
                                    Mark as No Show
                                </button>
                            </form>
                        @endif
                        
                        <form action="{{ route('admin.demos.destroy', $demo) }}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full px-4 py-3 rounded-xl bg-red-600 text-white font-semibold hover:scale-105 transform transition-all duration-300 hover:bg-red-700"
                                    onclick="return confirm('Are you sure you want to delete this demo booking?')">
                                <i class="uil uil-trash mr-2"></i>
                                Delete Demo
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Demo Details -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-bold mb-4 text-gray-800">Demo Details</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-600">Status</label>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                @if($demo->status === 'pending') bg-yellow-100 text-yellow-800
                                @elseif($demo->status === 'confirmed') bg-green-100 text-green-800
                                @elseif($demo->status === 'completed') bg-blue-100 text-blue-800
                                @elseif($demo->status === 'cancelled') bg-red-100 text-red-800
                                @else bg-gray-100 text-gray-800
                                @endif">
                                {{ ucfirst($demo->status) }}
                            </span>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600">Scheduled Time</label>
                            <p class="text-gray-900 font-medium">{{ $demo->formatted_scheduled_at }}</p>
                            <p class="text-sm text-gray-500">{{ $demo->timezone }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600">Booking Date</label>
                            <p class="text-gray-900">{{ $demo->created_at->format('M j, Y g:i A') }}</p>
                        </div>
                        
                        @if($demo->meeting_link)
                            <div>
                                <label class="block text-sm font-medium text-gray-600">Meeting Link</label>
                                <a href="{{ $demo->meeting_link }}" target="_blank" 
                                   class="text-green-600 hover:underline break-all">
                                    {{ $demo->meeting_link }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Contact Actions -->
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <h3 class="text-lg font-bold mb-4 text-gray-800">Contact Client</h3>
                    
                    <div class="space-y-3">
                        <a href="mailto:{{ $demo->email }}?subject=Sawtic Demo Booking - {{ $demo->formatted_scheduled_at }}" 
                           class="w-full inline-flex items-center justify-center px-4 py-3 rounded-xl border-2 border-green-600 text-green-600 font-semibold hover:bg-green-600 hover:text-white transition-all duration-300">
                            <i class="uil uil-envelope mr-2"></i>
                            Send Email
                        </a>
                        
                        <a href="tel:{{ $demo->phone }}" 
                           class="w-full inline-flex items-center justify-center px-4 py-3 rounded-xl border-2 border-green-600 text-green-600 font-semibold hover:bg-green-600 hover:text-white transition-all duration-300">
                            <i class="uil uil-phone mr-2"></i>
                            Call Client
                        </a>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-red-500">
                    <h3 class="text-lg font-bold mb-4 text-red-600">Danger Zone</h3>
                    
                    <form action="{{ route('admin.demos.destroy', $demo) }}" method="POST" 
                          onsubmit="return confirm('Are you sure you want to permanently delete this booking? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="w-full inline-flex items-center justify-center px-4 py-3 rounded-xl bg-red-600 text-white font-semibold hover:bg-red-700 transition-all duration-300">
                            <i class="uil uil-trash-alt mr-2"></i>
                            Delete Booking Permanently
                        </button>
                    </form>
                    
                    <p class="text-xs text-gray-500 mt-2">
                        This will permanently delete the booking and cannot be recovered.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection