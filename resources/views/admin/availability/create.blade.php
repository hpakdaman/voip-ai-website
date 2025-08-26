@extends('layouts.main')

@section('title', 'Sawtic | Create Availability Slots - Demo Booking Management')

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
                        <a href="{{ route('admin.availability.index') }}" class="ml-1 text-sm font-medium text-slate-300 hover:text-white md:ml-2">Manage Availability</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="uil uil-angle-right text-slate-400"></i>
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">Create Slots</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Create Availability Slots</h1>
                <p class="text-slate-300">Set up new demo booking time slots</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('admin.availability.index') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-arrow-left mr-2"></i>
                    Back to Availability
                </a>
            </div>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 rounded-xl border border-red-200 text-red-800" style="background: rgba(239, 68, 68, 0.1);">
                <div class="flex items-center">
                    <i class="uil uil-times-circle text-red-600 text-xl mr-3"></i>
                    <div>
                        <h4 class="font-semibold">Please correct the following errors:</h4>
                        <ul class="mt-2 text-sm list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <!-- Creation Form -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">
                    <i class="uil uil-calendar-alt mr-3 text-green-600"></i>
                    New Availability Slots
                </h2>

                <form action="{{ route('admin.availability.store') }}" method="POST">
                    @csrf
                    
                    <!-- Date Range -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">Start Date *</label>
                            <input type="date" id="start_date" name="start_date" value="{{ old('start_date', now()->addDay()->format('Y-m-d')) }}" required
                                   min="{{ now()->format('Y-m-d') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                        </div>
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">End Date *</label>
                            <input type="date" id="end_date" name="end_date" value="{{ old('end_date', now()->addDays(30)->format('Y-m-d')) }}" required
                                   min="{{ now()->format('Y-m-d') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                        </div>
                    </div>

                    <!-- Time Range -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="start_time" class="block text-sm font-medium text-gray-700 mb-2">Start Time *</label>
                            <input type="time" id="start_time" name="start_time" value="{{ old('start_time', '09:00') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                        </div>
                        <div>
                            <label for="end_time" class="block text-sm font-medium text-gray-700 mb-2">End Time *</label>
                            <input type="time" id="end_time" name="end_time" value="{{ old('end_time', '18:00') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                        </div>
                    </div>

                    <!-- Slot Duration & Timezone -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="slot_duration" class="block text-sm font-medium text-gray-700 mb-2">Slot Duration (minutes) *</label>
                            <select id="slot_duration" name="slot_duration" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                                <option value="15" {{ old('slot_duration') == '15' ? 'selected' : '' }}>15 minutes</option>
                                <option value="30" {{ old('slot_duration', '30') == '30' ? 'selected' : '' }}>30 minutes</option>
                                <option value="45" {{ old('slot_duration') == '45' ? 'selected' : '' }}>45 minutes</option>
                                <option value="60" {{ old('slot_duration') == '60' ? 'selected' : '' }}>60 minutes</option>
                                <option value="90" {{ old('slot_duration') == '90' ? 'selected' : '' }}>90 minutes</option>
                                <option value="120" {{ old('slot_duration') == '120' ? 'selected' : '' }}>120 minutes</option>
                            </select>
                        </div>
                        <div>
                            <label for="timezone" class="block text-sm font-medium text-gray-700 mb-2">Timezone *</label>
                            <select id="timezone" name="timezone" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300">
                                <optgroup label="Middle East">
                                    <option value="Asia/Dubai" {{ old('timezone', 'Asia/Dubai') == 'Asia/Dubai' ? 'selected' : '' }}>UAE Standard Time (GMT+4)</option>
                                    <option value="Asia/Riyadh" {{ old('timezone') == 'Asia/Riyadh' ? 'selected' : '' }}>Saudi Arabia Time (GMT+3)</option>
                                    <option value="Asia/Kuwait" {{ old('timezone') == 'Asia/Kuwait' ? 'selected' : '' }}>Kuwait Time (GMT+3)</option>
                                    <option value="Asia/Qatar" {{ old('timezone') == 'Asia/Qatar' ? 'selected' : '' }}>Qatar Time (GMT+3)</option>
                                    <option value="Asia/Bahrain" {{ old('timezone') == 'Asia/Bahrain' ? 'selected' : '' }}>Bahrain Time (GMT+3)</option>
                                    <option value="Asia/Muscat" {{ old('timezone') == 'Asia/Muscat' ? 'selected' : '' }}>Oman Time (GMT+4)</option>
                                </optgroup>
                                <optgroup label="Australia">
                                    <option value="Australia/Sydney" {{ old('timezone') == 'Australia/Sydney' ? 'selected' : '' }}>Sydney Time (GMT+10/+11)</option>
                                    <option value="Australia/Melbourne" {{ old('timezone') == 'Australia/Melbourne' ? 'selected' : '' }}>Melbourne Time (GMT+10/+11)</option>
                                    <option value="Australia/Brisbane" {{ old('timezone') == 'Australia/Brisbane' ? 'selected' : '' }}>Brisbane Time (GMT+10)</option>
                                    <option value="Australia/Perth" {{ old('timezone') == 'Australia/Perth' ? 'selected' : '' }}>Perth Time (GMT+8)</option>
                                    <option value="Australia/Adelaide" {{ old('timezone') == 'Australia/Adelaide' ? 'selected' : '' }}>Adelaide Time (GMT+9.5/+10.5)</option>
                                    <option value="Australia/Darwin" {{ old('timezone') == 'Australia/Darwin' ? 'selected' : '' }}>Darwin Time (GMT+9.5)</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <!-- Days of Week -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Days of Week *</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-7 gap-3">
                            @php
                                $days = [
                                    1 => 'Monday',
                                    2 => 'Tuesday', 
                                    3 => 'Wednesday',
                                    4 => 'Thursday',
                                    5 => 'Friday',
                                    6 => 'Saturday',
                                    0 => 'Sunday'
                                ];
                                $oldDays = old('days_of_week', [1, 2, 3, 4, 5]);
                            @endphp
                            @foreach($days as $value => $label)
                                <label class="flex items-center p-3 rounded-lg border border-gray-300 hover:border-green-400 transition-colors cursor-pointer bg-gray-50 hover:bg-green-50 min-h-12">
                                    <input type="checkbox" name="days_of_week[]" value="{{ $value }}" 
                                           {{ in_array($value, $oldDays) ? 'checked' : '' }}
                                           class="w-4 h-4 rounded border-gray-300 text-green-600 focus:ring-2 focus:ring-green-500 focus:ring-offset-0 transition-all duration-300 flex-shrink-0">
                                    <span class="ml-2 text-xs text-gray-700 font-medium leading-tight">{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                        <p class="text-xs text-gray-600 mt-2">Select the days when you want to be available for demos</p>
                    </div>

                    <!-- Notes -->
                    <div class="mb-8">
                        <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Notes (Optional)</label>
                        <textarea id="notes" name="notes" rows="3"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300"
                                  placeholder="Add any notes about these availability slots...">{{ old('notes') }}</textarea>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex flex-wrap gap-4 justify-between items-center">
                        <div class="text-gray-600 text-sm">
                            <i class="uil uil-info-circle mr-1"></i>
                            This will create individual slots based on your settings
                        </div>
                        <div class="flex gap-4">
                            <a href="{{ route('admin.availability.index') }}" 
                               class="px-6 py-3 rounded-xl border-2 border-gray-300 text-gray-600 font-semibold hover:border-green-500 hover:text-green-600 transition-all duration-300">
                                Cancel
                            </a>
                            <button type="submit" 
                                    class="px-8 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300 shadow-lg"
                                    style="background: var(--voip-primary);">
                                <i class="uil uil-plus mr-2"></i>
                                Create Availability Slots
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Preview Section -->
        <div class="max-w-4xl mx-auto mt-8">
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-bold text-gray-800 mb-4">
                    <i class="uil uil-eye mr-2 text-green-600"></i>
                    Preview
                </h3>
                <div class="text-gray-600 text-sm">
                    <p id="preview-text">Configure your settings above to see a preview of the slots that will be created.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const previewText = document.getElementById('preview-text');
    
    function updatePreview() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;
        const startTime = document.getElementById('start_time').value;
        const endTime = document.getElementById('end_time').value;
        const duration = document.getElementById('slot_duration').value;
        const checkedDays = document.querySelectorAll('input[name="days_of_week[]"]:checked');
        
        if (startDate && endDate && startTime && endTime && duration && checkedDays.length > 0) {
            const dayNames = {
                0: 'Sunday', 1: 'Monday', 2: 'Tuesday', 3: 'Wednesday', 
                4: 'Thursday', 5: 'Friday', 6: 'Saturday'
            };
            
            const selectedDays = Array.from(checkedDays).map(cb => dayNames[cb.value]).join(', ');
            
            // Calculate approximate slots per day
            const start = new Date(`2000-01-01T${startTime}`);
            const end = new Date(`2000-01-01T${endTime}`);
            const durationMs = parseInt(duration) * 60 * 1000;
            const slotsPerDay = Math.floor((end - start) / durationMs);
            
            // Calculate total days
            const startDateObj = new Date(startDate);
            const endDateObj = new Date(endDate);
            const totalDays = Math.ceil((endDateObj - startDateObj) / (1000 * 60 * 60 * 24)) + 1;
            const workingDays = Math.ceil(totalDays * checkedDays.length / 7);
            const totalSlots = slotsPerDay * workingDays;
            
            previewText.innerHTML = `
                <strong>Estimated slots to be created:</strong><br>
                📅 <strong>${totalSlots}</strong> slots across <strong>${workingDays}</strong> working days<br>
                🕐 <strong>${slotsPerDay}</strong> slots per day (${startTime} - ${endTime}, ${duration}min each)<br>
                📆 <strong>Days:</strong> ${selectedDays}<br>
                📍 <strong>Period:</strong> ${startDate} to ${endDate}
            `;
        }
    }
    
    // Add event listeners to all form inputs
    form.addEventListener('input', updatePreview);
    form.addEventListener('change', updatePreview);
    
    // Initial preview update
    updatePreview();
});
</script>
@endsection