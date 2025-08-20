@php
try {
    $expertiseData = json_decode(file_get_contents(resource_path('data/about/dubai-expertise.json')), true);
    $sectionData = $expertiseData['section'] ?? [];
    $achievements = $expertiseData['achievements'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'Built for UAE\'s Business Landscape',
        'subtitle' => 'UAE-Focused Expertise',
        'description' => 'Our AI call center solutions are specifically engineered for UAE\'s unique business environment.',
        'key_message' => 'The only AI solution designed specifically for UAE\'s business excellence standards'
    ];
    $achievements = [
        'uae_clients' => '500+',
        'languages_supported' => '18',
        'years_in_uae' => '5+'
    ];
}
@endphp

<!-- Dubai Overview Section - PNG Image Left, Content Right -->
<section class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <!-- Premium Gradient Background -->
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at right center, rgba(30, 192, 141, 0.05) 0%, transparent 50%), linear-gradient(135deg, #0c1b27 0%, #162f3a 100%);"></div>
        <!-- Professional Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(45deg, rgba(30, 192, 141, 0.1) 25%, transparent 25%), linear-gradient(-45deg, rgba(30, 192, 141, 0.1) 25%, transparent 25%); background-size: 120px 120px;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Image - Clean PNG with transparent background -->
            <div class="order-2 lg:order-1 relative wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <!-- Circular Masked Image - Larger -->
                <div class="relative">
                    <div class="w-full max-w-[350px] lg:max-w-[450px] aspect-square mx-auto rounded-full overflow-hidden border-4 border-white/10 shadow-2xl" style="box-shadow: 0 25px 50px rgba(30, 192, 141, 0.3);">
                        <img src="{{ asset('assets/images/about/about01.png') }}" 
                             alt="UAE Business Innovation" 
                             class="w-full h-full object-contain">
                    </div>
                    
                    <!-- Floating Achievement Stats -->
                    <div class="absolute top-4 right-2 lg:top-8 lg:right-8 p-3 lg:p-4 rounded-xl lg:rounded-2xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(15px);">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-white">{{ $achievements['uae_clients'] ?? '500+' }}</div>
                            <div class="text-slate-300 text-xs">UAE Clients</div>
                        </div>
                    </div>
                    
                    <!-- Languages Badge -->
                    <div class="absolute bottom-4 left-2 lg:bottom-8 lg:left-8 p-3 lg:p-4 rounded-xl lg:rounded-2xl border border-white/20" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 30px rgba(30, 192, 141, 0.3);">
                        <div class="flex items-center space-x-3">
                            <i class="uil uil-globe text-xl text-white"></i>
                            <div>
                                <div class="text-white font-semibold">{{ $achievements['languages_supported'] ?? '18' }} Languages</div>
                                <div class="text-white text-xs">Multilingual Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Dubai Focus -->
            <div class="order-1 lg:order-2 wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                <!-- Section Header -->
                <div class="mb-8">
                    <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                        <i class="uil uil-map text-lg mr-3" style="color: var(--voip-link);"></i>
                        <span class="text-white font-medium">{{ $sectionData['subtitle'] ?? 'UAE-Focused Expertise' }}</span>
                    </div>
                    
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                        {{ $sectionData['title'] ?? 'Built for UAE\'s Business Landscape' }}
                    </h2>
                    
                    <p class="text-slate-300 text-lg leading-relaxed mb-8">
                        {{ $sectionData['description'] ?? 'Our AI call center solutions are specifically engineered for UAE\'s unique business environment, regulatory requirements, and multicultural customer base.' }}
                    </p>
                    
                    <!-- Key Message Highlight -->
                    <div class="p-6 rounded-2xl border border-white/10 mb-8" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.2) 100%);">
                        <div class="flex items-start space-x-4">
                            <div class="w-6 h-6 rounded-full flex items-center justify-center mt-1" style="background-color: var(--voip-link);">
                                <i class="uil uil-star text-xs text-white"></i>
                            </div>
                            <p class="text-white font-semibold text-base">
                                {{ $sectionData['key_message'] ?? 'The only AI solution designed specifically for UAE\'s business excellence standards' }}
                            </p>
                        </div>
                    </div>
                    
                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.05);">
                            <div class="text-2xl font-bold text-white">{{ $achievements['years_in_uae'] ?? '5+' }}</div>
                            <div class="text-slate-300 text-sm">Years in UAE</div>
                        </div>
                        <div class="text-center p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.05);">
                            <div class="text-2xl font-bold text-white">99.9%</div>
                            <div class="text-slate-300 text-sm">TRA Compliance</div>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div>
                    <a href="{{ url('/features') }}" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" onmouseover="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.4)'" onmouseout="this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'">
                        <i class="uil uil-rocket text-lg mr-3"></i>
                        Explore UAE Solutions
                        <i class="uil uil-arrow-right text-lg ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>