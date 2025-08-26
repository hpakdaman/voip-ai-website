@extends('layouts.main')

@section('title', 'Sawtic | Manage Availability - Demo Booking Slots')

@section('content')
<div class="min-h-screen" style="background: var(--voip-bg);">
    <div class="container mx-auto px-6 pt-24 pb-8">
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
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">Manage Availability</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Manage Availability</h1>
                <p class="text-slate-300">Set your demo booking availability slots</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('admin.availability.create') }}" 
                   class="px-4 py-2 rounded-lg text-white font-medium hover:scale-105 transition-all duration-300"
                   style="background: var(--voip-primary);">
                    <i class="uil uil-plus mr-2"></i>
                    Add Availability
                </a>
                <a href="{{ route('admin.dashboard') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-arrow-left mr-2"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl border border-blue-200 text-white bg-blue-600">
                <div class="flex items-center">
                    <i class="uil uil-check-circle text-white text-xl mr-3"></i>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 p-4 rounded-xl border border-red-200 text-red-800" style="background: rgba(239, 68, 68, 0.1);">
                <div class="flex items-center">
                    <i class="uil uil-times-circle text-red-600 text-xl mr-3"></i>
                    <span>{{ session('error') }}</span>
                </div>
            </div>
        @endif

        <!-- Quick Actions -->
        <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Quick Actions</h2>
            
            <form action="{{ route('admin.availability.quick-generate') }}" method="POST" class="flex flex-wrap gap-4 items-end">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Template</label>
                    <select name="template" required class="px-3 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 focus:ring-2 focus:border-transparent focus:ring-green-500">
                        <option value="business_hours">Business Hours (9 AM - 6 PM, Mon-Fri)</option>
                        <option value="extended_hours">Extended Hours (8 AM - 8 PM, Mon-Fri)</option>
                        <option value="weekends_only">Weekends Only (10 AM - 4 PM, Sat-Sun)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Weeks Ahead</label>
                    <select name="weeks_ahead" required class="px-3 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 focus:ring-2 focus:border-transparent focus:ring-green-500">
                        <option value="2">2 weeks</option>
                        <option value="4">4 weeks</option>
                        <option value="8">8 weeks</option>
                        <option value="12">12 weeks</option>
                    </select>
                </div>
                <button type="submit" class="px-6 py-2 rounded-lg text-white font-medium hover:scale-105 transition-all duration-300" style="background: var(--voip-primary);">
                    <i class="uil uil-bolt mr-2"></i>
                    Quick Generate
                </button>
            </form>
        </div>

        <!-- Calendar Navigation -->
        <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    {{ $startDate->format('F Y') }}
                </h2>
                <div class="flex gap-2">
                    <a href="{{ route('admin.availability.index', ['month' => $prevMonth->format('Y-m')]) }}" 
                       class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-green-50 hover:border-green-300 transition-colors">
                        <i class="uil uil-angle-left"></i>
                        {{ $prevMonth->format('M') }}
                    </a>
                    <a href="{{ route('admin.availability.index', ['month' => now()->format('Y-m')]) }}" 
                       class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-green-50 hover:border-green-300 transition-colors">
                        Today
                    </a>
                    <a href="{{ route('admin.availability.index', ['month' => $nextMonth->format('Y-m')]) }}" 
                       class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-green-50 hover:border-green-300 transition-colors">
                        {{ $nextMonth->format('M') }}
                        <i class="uil uil-angle-right"></i>
                    </a>
                </div>
            </div>

            <!-- Bulk Actions -->
            <form id="bulk-action-form" action="{{ route('admin.availability.bulk-update') }}" method="POST" class="mb-6">
                @csrf
                <div class="flex gap-4 items-center">
                    <select name="action" required class="px-3 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 focus:ring-2 focus:border-transparent focus:ring-green-500 min-w-40">
                        <option value="">Select Action</option>
                        <option value="enable">Enable Selected</option>
                        <option value="disable">Disable Selected</option>
                        <option value="delete">Delete Selected</option>
                    </select>
                    <button type="submit" class="px-4 py-2 rounded-lg text-white font-medium" style="background: var(--voip-primary);" disabled id="bulk-submit">
                        Apply to Selected
                    </button>
                    <span class="text-sm text-gray-600" id="selected-count">0 selected</span>
                </div>
            </form>

            <!-- Calendar Grid -->
            @if($slots->isEmpty())
                <div class="text-center py-12">
                    <i class="uil uil-calendar-slash text-6xl text-gray-400 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">No Availability Slots</h3>
                    <p class="text-gray-600 mb-4">Create availability slots to allow demo bookings.</p>
                    <a href="{{ route('admin.availability.create') }}" 
                       class="inline-flex items-center px-6 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300"
                       style="background: var(--voip-primary);">
                        <i class="uil uil-plus mr-2"></i>
                        Create First Slot
                    </a>
                </div>
            @else
                <div class="space-y-6">
                    @foreach($slots as $date => $daySlots)
                        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-800">
                                    {{ \Carbon\Carbon::parse($date)->format('l, F j, Y') }}
                                </h3>
                                <span class="text-sm text-gray-600">{{ count($daySlots) }} slots</span>
                            </div>
                            
                            <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-2">
                                @foreach($daySlots as $slot)
                                    <div class="relative group border rounded p-2 text-center {{ $slot->is_available ? ($slot->demoBookings->isNotEmpty() ? 'border-blue-300 bg-blue-50' : 'border-green-300 bg-green-50') : 'border-red-400 bg-red-100' }}">
                                        <input type="checkbox" name="slot_ids[]" value="{{ $slot->id }}" 
                                               class="slot-checkbox absolute top-1 left-1 w-3 h-3 rounded border-gray-300 text-green-600 focus:ring-green-500">
                                        
                                        <div class="text-sm font-mono {{ $slot->is_available ? 'text-gray-800' : 'text-red-600 line-through' }}">
                                            {{ \Carbon\Carbon::parse($slot->start_time)->format('H:i') }}
                                        </div>
                                        
                                        @if($slot->demoBookings->isNotEmpty())
                                            <i class="uil uil-user text-xs text-blue-600 mt-1"></i>
                                        @endif
                                        
                                        <div class="absolute top-0 right-0 opacity-0 group-hover:opacity-100 transition-opacity flex gap-1 z-10">
                                            <button type="button" onclick="toggleSlot({{ $slot->id }}, {{ $slot->is_available ? 'false' : 'true' }})"
                                                    class="w-5 h-5 rounded bg-white shadow border flex items-center justify-center hover:bg-gray-50 transition-colors"
                                                    title="{{ $slot->is_available ? 'Disable slot' : 'Enable slot' }}">
                                                <i class="uil {{ $slot->is_available ? 'uil-eye-slash text-orange-600' : 'uil-eye text-green-600' }} text-xs"></i>
                                            </button>
                                            @if($slot->demoBookings->isEmpty())
                                                <button type="button" onclick="deleteSlot({{ $slot->id }})"
                                                        class="w-5 h-5 rounded bg-white shadow border flex items-center justify-center hover:bg-red-50 transition-colors"
                                                        title="Delete slot">
                                                    <i class="uil uil-times text-red-600 text-xs"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.slot-checkbox');
    const bulkSubmit = document.getElementById('bulk-submit');
    const selectedCount = document.getElementById('selected-count');
    const bulkForm = document.getElementById('bulk-action-form');
    
    function updateBulkActions() {
        const checked = document.querySelectorAll('.slot-checkbox:checked');
        const count = checked.length;
        
        selectedCount.textContent = `${count} selected`;
        bulkSubmit.disabled = count === 0;
        
        // Clear existing hidden inputs
        const existingInputs = bulkForm.querySelectorAll('input[name="slot_ids[]"]');
        existingInputs.forEach(input => {
            if (input.type === 'hidden') input.remove();
        });
        
        // Add hidden inputs for checked items
        checked.forEach(checkbox => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'slot_ids[]';
            hiddenInput.value = checkbox.value;
            bulkForm.appendChild(hiddenInput);
        });
    }
    
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateBulkActions);
    });
    
    // Bulk form submission
    bulkForm.addEventListener('submit', function(e) {
        const action = this.querySelector('select[name="action"]').value;
        const count = document.querySelectorAll('.slot-checkbox:checked').length;
        
        if (!action) {
            e.preventDefault();
            alert('Please select an action.');
            return;
        }
        
        if (action === 'delete') {
            if (!confirm(`Are you sure you want to delete ${count} availability slots?`)) {
                e.preventDefault();
            }
        }
    });
});

function toggleSlot(slotId, isAvailable) {
    console.log('Toggling slot:', slotId, 'to:', isAvailable);
    
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = `/admin/availability/${slotId}`;
    form.style.display = 'none';
    
    const csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '_token';
    csrfInput.value = '{{ csrf_token() }}';
    
    const methodInput = document.createElement('input');
    methodInput.type = 'hidden';
    methodInput.name = '_method';
    methodInput.value = 'PATCH';
    
    const availableInput = document.createElement('input');
    availableInput.type = 'hidden';
    availableInput.name = 'is_available';
    availableInput.value = isAvailable;
    
    const notesInput = document.createElement('input');
    notesInput.type = 'hidden';
    notesInput.name = 'notes';
    notesInput.value = '';
    
    form.appendChild(csrfInput);
    form.appendChild(methodInput);
    form.appendChild(availableInput);
    form.appendChild(notesInput);
    
    document.body.appendChild(form);
    form.submit();
}

function deleteSlot(slotId) {
    console.log('Deleting slot:', slotId);
    
    if (confirm('Are you sure you want to delete this availability slot?')) {
        console.log('User confirmed deletion, submitting form...');
        
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/availability/${slotId}`;
        form.style.display = 'none';
        
        console.log('Form action:', form.action);
        
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = '{{ csrf_token() }}';
        
        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';
        
        form.appendChild(csrfInput);
        form.appendChild(methodInput);
        
        document.body.appendChild(form);
        
        console.log('Form HTML:', form.outerHTML);
        form.submit();
        console.log('Form submitted');
    } else {
        console.log('User cancelled deletion');
    }
}
</script>
@endsection