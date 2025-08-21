@extends('layouts.main')

@section('title', 'Sawtic | Book AI Call Center Demo - Live Consultation in UAE')

@section('content')
<div class="relative" style="background: var(--voip-dark-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 rounded-full opacity-10" style="background: var(--voip-link);"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full opacity-10" style="background: var(--voip-primary);"></div>
    </div>

    <div class="relative container mx-auto px-6 pt-24 pb-16">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Book Your <span style="color: var(--voip-link);">Live AI Demo</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto mb-8">
                See how Sawtic's AI call center solutions can transform your UAE business. 
                Schedule a personalized 30-minute demonstration with our AI experts.
            </p>
            
            <!-- Benefits Pills -->
            <div class="flex flex-wrap gap-3 justify-center mb-8">
                <span class="px-4 py-2 rounded-full text-sm font-medium text-white" style="background: rgba(30, 192, 141, 0.2); border: 1px solid var(--voip-link);">
                    ✓ Personalized to Your Industry
                </span>
                <span class="px-4 py-2 rounded-full text-sm font-medium text-white" style="background: rgba(30, 192, 141, 0.2); border: 1px solid var(--voip-link);">
                    ✓ Live AI Voice Demonstration
                </span>
                <span class="px-4 py-2 rounded-full text-sm font-medium text-white" style="background: rgba(30, 192, 141, 0.2); border: 1px solid var(--voip-link);">
                    ✓ UAE Market Insights
                </span>
                <span class="px-4 py-2 rounded-full text-sm font-medium text-white" style="background: rgba(30, 192, 141, 0.2); border: 1px solid var(--voip-link);">
                    ✓ ROI Calculator & Pricing
                </span>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-2xl">
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

                <form action="{{ route('demo.store') }}" method="POST" id="demo-booking-form">
                    @csrf
                    
                    <!-- Step 1: Personal Information -->
                    <div class="form-step active" id="step-1">
                        <h3 class="text-2xl font-bold mb-6" style="color: var(--voip-primary);">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full text-white text-sm mr-3" style="background: var(--voip-primary);">1</span>
                            Your Information
                        </h3>
                        
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300"
                                       style="focus:ring-color: var(--voip-link);"
                                       placeholder="Ahmed">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300"
                                       placeholder="Al-Mansouri">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Business Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300"
                                       placeholder="ahmed@company.ae">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300"
                                       placeholder="+971 50 123 4567">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300"
                                       placeholder="Dubai Enterprises LLC">
                            </div>
                            <div>
                                <label for="industry" class="block text-sm font-medium text-gray-700 mb-2">Industry</label>
                                <select id="industry" name="industry"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300">
                                    <option value="">Select your industry</option>
                                    <option value="real-estate" {{ old('industry') == 'real-estate' ? 'selected' : '' }}>Real Estate</option>
                                    <option value="healthcare" {{ old('industry') == 'healthcare' ? 'selected' : '' }}>Healthcare & Medical</option>
                                    <option value="hospitality" {{ old('industry') == 'hospitality' ? 'selected' : '' }}>Hospitality & Tourism</option>
                                    <option value="retail" {{ old('industry') == 'retail' ? 'selected' : '' }}>Retail & E-commerce</option>
                                    <option value="finance" {{ old('industry') == 'finance' ? 'selected' : '' }}>Finance & Banking</option>
                                    <option value="education" {{ old('industry') == 'education' ? 'selected' : '' }}>Education</option>
                                    <option value="legal" {{ old('industry') == 'legal' ? 'selected' : '' }}>Legal Services</option>
                                    <option value="construction" {{ old('industry') == 'construction' ? 'selected' : '' }}>Construction</option>
                                    <option value="automotive" {{ old('industry') == 'automotive' ? 'selected' : '' }}>Automotive</option>
                                    <option value="other" {{ old('industry') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="requirements" class="block text-sm font-medium text-gray-700 mb-2">Demo Requirements</label>
                            <textarea id="requirements" name="requirements" rows="4"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300"
                                      placeholder="Tell us about your specific needs, call volume, current challenges, or what you'd like to see in the demo...">{{ old('requirements') }}</textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" onclick="nextStep(2)" 
                                    class="px-8 py-4 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300 shadow-lg"
                                    style="background: var(--voip-primary);">
                                Next: Select Time
                                <i class="uil uil-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Time Selection -->
                    <div class="form-step" id="step-2">
                        <h3 class="text-2xl font-bold mb-6" style="color: var(--voip-primary);">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full text-white text-sm mr-3" style="background: var(--voip-primary);">2</span>
                            Select Your Preferred Time
                        </h3>

                        <!-- Timezone Selection -->
                        <div class="mb-6">
                            <label for="timezone" class="block text-sm font-medium text-gray-700 mb-2">Your Timezone</label>
                            <select id="timezone" name="timezone" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:border-transparent transition-all duration-300">
                                <option value="Asia/Dubai">UAE Standard Time (GMT+4)</option>
                                <option value="Asia/Riyadh">Saudi Arabia Time (GMT+3)</option>
                                <option value="Asia/Kuwait">Kuwait Time (GMT+3)</option>
                                <option value="Asia/Qatar">Qatar Time (GMT+3)</option>
                                <option value="Asia/Bahrain">Bahrain Time (GMT+3)</option>
                                <option value="Asia/Muscat">Oman Time (GMT+4)</option>
                            </select>
                        </div>

                        <!-- Calendar Interface -->
                        <div class="mb-6">
                            <h4 class="font-semibold text-gray-800 mb-4">Available Dates & Times</h4>
                            
                            @if($availableSlots->isEmpty())
                                <div class="text-center py-12 rounded-2xl border-2 border-dashed border-gray-300" style="background: rgba(248, 250, 252, 0.8);">
                                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4" style="background: rgba(156, 163, 175, 0.2);">
                                        <i class="uil uil-calendar-slash text-3xl text-gray-400"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-700 mb-2">No Available Slots</h3>
                                    <p class="text-gray-600 mb-4">All demo slots are currently booked. Contact us directly for immediate assistance.</p>
                                    <a href="tel:+971486472245" 
                                       class="inline-flex items-center px-6 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300"
                                       style="background: var(--voip-primary);">
                                        <i class="uil uil-phone mr-2"></i>
                                        Call +971 4 864 7245
                                    </a>
                                </div>
                            @else
                                <div class="space-y-4">
                                    @foreach($availableSlots as $date => $slots)
                                        <div class="border border-gray-200 rounded-xl p-4">
                                            <h5 class="font-semibold text-gray-800 mb-3">
                                                {{ \Carbon\Carbon::parse($date)->format('l, F j, Y') }}
                                            </h5>
                                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                                                @foreach($slots as $slot)
                                                    <label class="cursor-pointer">
                                                        <input type="radio" name="availability_slot_id" value="{{ $slot->id }}" 
                                                               class="sr-only availability-slot" 
                                                               data-datetime="{{ $slot->date_time->toISOString() }}">
                                                        <div class="p-3 border-2 border-gray-200 rounded-lg text-center hover:border-[var(--voip-link)] hover:bg-[rgba(30,192,141,0.1)] transition-all duration-300 slot-option">
                                                            <div class="text-sm font-medium text-gray-800">{{ $slot->formatted_time_range }}</div>
                                                        </div>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <!-- Selection Summary -->
                                <div id="selection-summary" class="hidden mt-6 p-4 rounded-xl border-2 border-green-200 bg-green-50">
                                    <div class="flex items-center">
                                        <i class="uil uil-check-circle text-2xl text-green-600 mr-3"></i>
                                        <div>
                                            <h4 class="font-semibold text-green-800">Selected Time Slot</h4>
                                            <p id="selected-time" class="text-green-700 text-sm"></p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="previousStep(1)" 
                                    class="px-8 py-4 rounded-xl border-2 font-semibold hover:scale-105 transform transition-all duration-300"
                                    style="border-color: var(--voip-primary); color: var(--voip-primary);">
                                <i class="uil uil-arrow-left mr-2"></i>
                                Back
                            </button>
                            <button type="submit" id="submit-booking"
                                    class="px-8 py-4 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300 shadow-lg opacity-50 cursor-not-allowed"
                                    style="background: var(--voip-primary);" disabled>
                                <i class="uil uil-check-circle mr-2"></i>
                                Book My Demo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-16 text-center">
            <div class="flex flex-wrap gap-8 items-center justify-center text-slate-400">
                <div class="flex items-center">
                    <i class="uil uil-shield-check text-2xl mr-2" style="color: var(--voip-link);"></i>
                    <span>GDPR Compliant</span>
                </div>
                <div class="flex items-center">
                    <i class="uil uil-lock text-2xl mr-2" style="color: var(--voip-link);"></i>
                    <span>Data Encrypted</span>
                </div>
                <div class="flex items-center">
                    <i class="uil uil-star text-2xl mr-2" style="color: var(--voip-link);"></i>
                    <span>500+ UAE Clients</span>
                </div>
                <div class="flex items-center">
                    <i class="uil uil-clock text-2xl mr-2" style="color: var(--voip-link);"></i>
                    <span>30-Min Sessions</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.form-step {
    display: none;
}
.form-step.active {
    display: block;
}
.availability-slot:checked + .slot-option {
    border-color: var(--voip-link) !important;
    background: rgba(30, 192, 141, 0.15) !important;
    box-shadow: 0 4px 12px rgba(30, 192, 141, 0.3) !important;
    transform: scale(1.05) !important;
}

.availability-slot:checked + .slot-option .selection-indicator {
    background: var(--voip-link) !important;
    border-color: var(--voip-link) !important;
    opacity: 1 !important;
}

.availability-slot:checked + .slot-option .selection-indicator::after {
    content: '✓';
    color: white;
    font-size: 10px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

/* Fix input text colors */
input[type="text"], 
input[type="email"], 
input[type="tel"], 
input[type="password"], 
select, 
textarea {
    color: #374151 !important;
    background-color: white !important;
}

input::placeholder {
    color: #9CA3AF !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Time slot selection
    const slotInputs = document.querySelectorAll('.availability-slot');
    const submitButton = document.getElementById('submit-booking');
    
    slotInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.checked) {
                submitButton.disabled = false;
                submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
                submitButton.classList.add('hover:scale-105');
                
                // Show selection summary
                const datetime = new Date(this.dataset.datetime);
                const options = { 
                    weekday: 'long', 
                    year: 'numeric', 
                    month: 'long', 
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    timeZoneName: 'short'
                };
                const formattedTime = datetime.toLocaleDateString('en-US', options);
                
                document.getElementById('selected-time').textContent = formattedTime;
                document.getElementById('selection-summary').classList.remove('hidden');
                
                // Smooth scroll to summary
                document.getElementById('selection-summary').scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'nearest' 
                });
            }
        });
    });
    
    // Form validation
    const form = document.getElementById('demo-booking-form');
    form.addEventListener('submit', function(e) {
        const selectedSlot = document.querySelector('.availability-slot:checked');
        if (!selectedSlot) {
            e.preventDefault();
            alert('Please select a time slot for your demo.');
            return false;
        }
    });
});

function nextStep(step) {
    // Validate current step
    const currentStep = document.querySelector('.form-step.active');
    const inputs = currentStep.querySelectorAll('input[required], select[required]');
    let valid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('border-red-500');
            valid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });
    
    if (!valid) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Switch to next step
    document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
    document.getElementById('step-' + step).classList.add('active');
}

function previousStep(step) {
    document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
    document.getElementById('step-' + step).classList.add('active');
}
</script>
@endsection