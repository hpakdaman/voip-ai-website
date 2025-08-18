@php
$contactData = json_decode(file_get_contents(resource_path('data/contact-us.json')), true);
$formData = $contactData['contact_form'] ?? [];
@endphp

<!-- Contact Form Section -->
<section id="contact-form" class="relative py-24 overflow-hidden" style="background: linear-gradient(135deg, var(--voip-bg) 0%, var(--voip-dark-bg) 100%);">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <!-- Animated Grid -->
        <svg class="absolute inset-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="form-grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1" style="color: var(--voip-link);"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#form-grid)" />
        </svg>
        
        <!-- Floating Orbs -->
        <div class="absolute top-20 right-20 w-32 h-32 rounded-full opacity-20 animate-pulse" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%); animation-duration: 4s;"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 rounded-full opacity-25 animate-pulse" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-duration: 3s; animation-delay: 2s;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            
            <!-- Form Info Side -->
            <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                <!-- Section Header -->
                <div class="mb-12">
                    <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                        <i class="uil uil-message text-lg mr-3" style="color: var(--voip-link);"></i>
                        <span class="text-white font-medium">Custom Solution Request</span>
                    </div>
                    
                    <h2 class="text-5xl font-bold text-white mb-6">
                        {{ $formData['title'] ?? 'Get Your Custom VoIP AI Solution' }}
                    </h2>
                    
                    <p class="text-slate-300 text-xl leading-relaxed mb-8">
                        {{ $formData['subtitle'] ?? 'Tell us about your business needs' }}
                    </p>
                </div>
                
                <!-- Form Benefits -->
                <div class="space-y-6 mb-12">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-clock text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Quick Response</h4>
                            <p class="text-slate-300">Get a detailed proposal within 24 hours of submission</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-user-check text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Expert Consultation</h4>
                            <p class="text-slate-300">Direct access to our VoIP AI specialists and solution architects</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-shield-check text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">UAE Compliance</h4>
                            <p class="text-slate-300">Solutions designed specifically for UAE regulations and market needs</p>
                        </div>
                    </div>
                </div>
                
                <!-- Trust Indicators -->
                <div class="grid grid-cols-3 gap-6 p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(10px);">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">500+</div>
                        <div class="text-xs text-slate-400">UAE Businesses</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">99.9%</div>
                        <div class="text-xs text-slate-400">Uptime SLA</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">24/7</div>
                        <div class="text-xs text-slate-400">Support</div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
                <div class="relative p-8 rounded-3xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(20px); box-shadow: 0 25px 50px rgba(30, 192, 141, 0.1);">
                    
                    <form method="post" action="{{ route('contact.send') }}" name="voip-contact-form" id="voip-contact-form" class="space-y-6">
                        @csrf
                        
                        @if (session('success'))
                        <div id="contact-message" class="p-4 rounded-xl border border-green-200 text-green-800" style="background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%);">
                            <div class="flex items-center">
                                <i class="uil uil-check-circle text-green-600 text-xl mr-3"></i>
                                {{ session('success') }}
                            </div>
                        </div>
                        @endif

                        @if (session('error'))
                        <div id="contact-message" class="p-4 rounded-xl border border-red-200 text-red-800" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.1) 100%);">
                            <div class="flex items-center">
                                <i class="uil uil-times-circle text-red-600 text-xl mr-3"></i>
                                {{ session('error') }}
                            </div>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div id="contact-message" class="p-4 rounded-xl border border-red-200 text-red-800" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.1) 100%);">
                            <div class="flex items-start">
                                <i class="uil uil-times-circle text-red-600 text-xl mr-3 mt-0.5"></i>
                                <ul class="list-disc list-inside space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Form Fields Grid -->
                        <div class="grid lg:grid-cols-2 gap-6">
                            @foreach(($formData['fields'] ?? []) as $field)
                                @if($field['type'] === 'select' && $field['name'] === 'industry')
                                <!-- Industry Select (Full Width) -->
                                <div class="lg:col-span-2">
                                    <label for="{{ $field['name'] }}" class="block font-semibold text-white mb-2">{{ $field['label'] }}</label>
                                    <div class="relative">
                                        <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full py-4 px-4 rounded-xl border border-white/20 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-200 transition-all duration-300 bg-white/10 text-white backdrop-blur-sm" {{ $field['required'] ? 'required' : '' }}>
                                            <option value="" class="bg-gray-800 text-white">Select {{ $field['label'] }}</option>
                                            @foreach($field['options'] as $option)
                                            <option value="{{ $option }}" class="bg-gray-800 text-white">{{ $option }}</option>
                                            @endforeach
                                        </select>
                                        <i class="uil uil-angle-down absolute right-4 top-1/2 transform -translate-y-1/2 text-white/70"></i>
                                    </div>
                                </div>
                                @elseif($field['type'] === 'textarea')
                                <!-- Message Textarea (Full Width) -->
                                <div class="lg:col-span-2">
                                    <label for="{{ $field['name'] }}" class="block font-semibold text-white mb-2">{{ $field['label'] }}</label>
                                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" rows="4" class="w-full py-4 px-4 rounded-xl border border-white/20 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-200 transition-all duration-300 resize-none bg-white/10 text-white placeholder-white/70 backdrop-blur-sm" placeholder="{{ $field['placeholder'] }}" {{ $field['required'] ? 'required' : '' }}></textarea>
                                </div>
                                @elseif($field['type'] === 'select')
                                <!-- Other Select Fields -->
                                <div>
                                    <label for="{{ $field['name'] }}" class="block font-semibold text-white mb-2">{{ $field['label'] }}</label>
                                    <div class="relative">
                                        <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full py-4 px-4 rounded-xl border border-white/20 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-200 transition-all duration-300 bg-white/10 text-white backdrop-blur-sm" {{ $field['required'] ? 'required' : '' }}>
                                            <option value="" class="bg-gray-800 text-white">Select {{ $field['label'] }}</option>
                                            @foreach($field['options'] as $option)
                                            <option value="{{ $option }}" class="bg-gray-800 text-white">{{ $option }}</option>
                                            @endforeach
                                        </select>
                                        <i class="uil uil-angle-down absolute right-4 top-1/2 transform -translate-y-1/2 text-white/70"></i>
                                    </div>
                                </div>
                                @else
                                <!-- Text/Email/Tel Fields -->
                                <div>
                                    <label for="{{ $field['name'] }}" class="block font-semibold text-white mb-2">{{ $field['label'] }}</label>
                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="w-full py-4 px-4 rounded-xl border border-white/20 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-200 transition-all duration-300 bg-white/10 text-white placeholder-white/70 backdrop-blur-sm" placeholder="{{ $field['placeholder'] }}" {{ $field['required'] ? 'required' : '' }}>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        
                        <!-- Privacy Notice -->
                        <div class="p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                            <p class="text-sm text-white/90">
                                <i class="uil uil-shield-check mr-2" style="color: var(--voip-link);"></i>
                                {{ $formData['privacy_text'] ?? 'By submitting this form, you agree to our Privacy Policy and Terms of Service.' }}
                            </p>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" id="voip-submit" name="send" class="group relative w-full py-4 px-8 rounded-xl font-bold text-white text-lg transition-all duration-500 hover:-translate-y-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.3);" onmouseover="this.style.boxShadow='0 20px 50px rgba(30, 192, 141, 0.5)'" onmouseout="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.3)'">
                            <span class="flex items-center justify-center">
                                <i class="uil uil-rocket mr-3 text-xl group-hover:animate-pulse"></i>
                                {{ $formData['submit_text'] ?? 'Get My Custom Solution' }}
                            </span>
                            <!-- Loading State -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300" id="loading-state">
                                <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-white"></div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Enhancement Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('voip-contact-form');
    const submitBtn = document.getElementById('voip-submit');
    const loadingState = document.getElementById('loading-state');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function() {
            submitBtn.style.pointerEvents = 'none';
            submitBtn.querySelector('span').style.opacity = '0.5';
            if (loadingState) loadingState.style.opacity = '1';
        });
    }
    
    // Auto-scroll to form messages
    const messageElement = document.getElementById('contact-message');
    if (messageElement) {
        messageElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>