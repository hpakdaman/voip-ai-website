@php
$contactData = json_decode(file_get_contents(resource_path('data/contact-us.json')), true);
$contactMethods = $contactData['contact_methods'] ?? [];
$officeLocations = $contactData['office_locations'] ?? [];
@endphp

<!-- Contact Methods Section -->
<section class="relative py-24" style="background: linear-gradient(135deg, var(--voip-bg) 0%, #0a1a24 100%);">
    <div class="container relative">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-6 py-3 rounded-full border mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); border-color: var(--voip-link); backdrop-filter: blur(10px);">
                <i class="uil uil-headphones text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="font-medium" style="color: var(--voip-link);">Multiple Ways to Connect</span>
            </div>
            
            <h2 class="text-5xl font-bold mb-6 text-white wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                Choose Your Preferred Contact Method
            </h2>
            
            <p class="text-slate-300 max-w-3xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                Our expert team is ready to help you implement VoIP AI solutions. Reach out through your preferred channel for personalized assistance.
            </p>
        </div>

        <!-- Contact Methods Grid - Simplified -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mb-16">
            @foreach($contactMethods as $index => $method)
            <div class="group text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.4 + ($index * 0.1) }}s">
                <div class="relative p-6 rounded-2xl border border-white/10 h-full transition-all duration-300 hover:border-white/30 hover:-translate-y-1" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.2) 100%); backdrop-filter: blur(10px);">
                    
                    <!-- Method Icon -->
                    <div class="w-16 h-16 rounded-2xl mx-auto mb-4 flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.2);">
                        <i class="{{ $method['icon'] ?? 'uil uil-phone' }} text-2xl text-white"></i>
                    </div>
                    
                    <!-- Method Content -->
                    <h4 class="text-xl font-bold mb-3 text-white">{{ $method['title'] ?? 'Contact Method' }}</h4>
                    <p class="text-slate-300 text-sm leading-relaxed mb-4">{{ $method['description'] ?? 'Description here' }}</p>
                    
                    <!-- Primary Contact -->
                    <div class="mb-4">
                        <h5 class="text-base font-semibold mb-1" style="color: var(--voip-link);">{{ $method['primary'] ?? 'Primary Contact' }}</h5>
                        @if(isset($method['available']))
                        <p class="text-slate-400 text-xs">{{ $method['available'] }}</p>
                        @endif
                    </div>
                    
                    <!-- Action Button -->
                    <a href="{{ $method['type'] === 'phone' ? 'tel:' . ($method['primary'] ?? '') : 
                                ($method['type'] === 'email' ? 'mailto:' . ($method['primary'] ?? '') : '#') }}" 
                       class="inline-flex items-center justify-center w-full px-4 py-2 rounded-lg font-medium text-white transition-all duration-300" 
                       style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 15px rgba(30, 192, 141, 0.2);"
                       onmouseover="this.style.boxShadow='0 6px 20px rgba(30, 192, 141, 0.3)'" 
                       onmouseout="this.style.boxShadow='0 4px 15px rgba(30, 192, 141, 0.2)'">
                        <i class="{{ $method['icon'] ?? 'uil uil-phone' }} mr-2"></i>
                        {{ $method['action_text'] ?? 'Contact Us' }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Office Locations -->
        @if(count($officeLocations) > 0)
        <div class="rounded-3xl border border-white/10 p-8 shadow-lg wow animate__animated animate__fadeInUp" data-wow-delay="0.8s" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(20px);">
            <h3 class="text-3xl font-bold text-center mb-8 text-white">Our UAE Offices</h3>
            
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($officeLocations as $index => $office)
                <div class="group relative p-6 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/30 hover:-translate-y-1" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);">
                    
                    <!-- Office Header -->
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center mr-4" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-building text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white">{{ $office['city'] ?? 'City' }}</h4>
                            <p class="text-sm text-slate-400">{{ $office['coordinates'] ?? '' }}</p>
                        </div>
                    </div>
                    
                    <!-- Office Details -->
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <i class="uil uil-map-marker text-lg mr-3 mt-1" style="color: var(--voip-link);"></i>
                            <p class="text-slate-300">{{ $office['address'] ?? 'Address' }}</p>
                        </div>
                        
                        <div class="flex items-start">
                            <i class="uil uil-phone text-lg mr-3 mt-1" style="color: var(--voip-link);"></i>
                            <a href="tel:{{ $office['phone'] ?? '' }}" class="text-slate-300 hover:text-white transition-colors duration-300">{{ $office['phone'] ?? 'Phone' }}</a>
                        </div>
                        
                        <div class="flex items-start">
                            <i class="uil uil-clock text-lg mr-3 mt-1" style="color: var(--voip-link);"></i>
                            <p class="text-slate-300">{{ $office['hours'] ?? 'Hours' }}</p>
                        </div>
                    </div>
                    
                    <!-- Visit Button -->
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 rounded-lg font-medium transition-all duration-300" style="background: rgba(30, 192, 141, 0.1); color: var(--voip-link);" onmouseover="this.style.background='rgba(30, 192, 141, 0.2)'" onmouseout="this.style.background='rgba(30, 192, 141, 0.1)'">
                            <i class="uil uil-calendar-alt mr-2"></i>
                            Schedule Visit
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>