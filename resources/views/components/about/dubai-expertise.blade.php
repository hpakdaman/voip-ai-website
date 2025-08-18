@php
try {
    $expertiseData = json_decode(file_get_contents(resource_path('data/about/dubai-expertise.json')), true);
    $sectionData = $expertiseData['section'] ?? [];
    $dubaiFeatures = $expertiseData['dubai_features'] ?? [];
    $achievements = $expertiseData['achievements'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'Built for UAE\'s Business Landscape',
        'subtitle' => 'UAE-Focused Expertise',
        'description' => 'Our AI call center solutions are specifically engineered for UAE\'s unique business environment.'
    ];
    $dubaiFeatures = [];
    $achievements = [];
}
@endphp

<!-- UAE Expertise Section - Professional Showcase with Left Image -->
<section class="relative py-32" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <!-- Premium Gradient Background -->
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at left center, rgba(30, 192, 141, 0.05) 0%, transparent 50%), linear-gradient(135deg, #0c1b27 0%, #162f3a 100%);"></div>
        <!-- Professional Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(45deg, rgba(30, 192, 141, 0.1) 25%, transparent 25%), linear-gradient(-45deg, rgba(30, 192, 141, 0.1) 25%, transparent 25%); background-size: 120px 120px;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            
            <!-- Left Image - UAE Business Landscape -->
            <div class="relative wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <!-- Main Image Container -->
                <div class="relative">
                    <!-- Professional UAE Business Image -->
                    <img src="{{ asset('assets/images/business/uae-business-growth.png') }}" 
                         alt="UAE Business Excellence" 
                         class="w-full h-auto object-contain">
                    
                    
                    <!-- Achievement Overlays -->
                    <div class="absolute top-8 left-8 p-6 rounded-2xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(15px);">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil uil-building text-2xl text-white"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white">{{ $achievements['uae_clients'] ?? '500+' }}</div>
                                <div class="text-slate-300 text-sm">UAE Enterprises</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Compliance Badge -->
                    <div class="absolute bottom-8 left-8 p-4 rounded-2xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(15px);">
                        <div class="flex items-center space-x-3">
                            <i class="uil uil-shield-check text-2xl" style="color: var(--voip-link);"></i>
                            <div>
                                <div class="text-white font-semibold">TRA Certified</div>
                                <div class="text-slate-300 text-xs">UAE Compliant</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Language Support Badge -->
                    <div class="absolute top-8 right-8 p-4 rounded-full border border-white/20" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 30px rgba(30, 192, 141, 0.3);">
                        <div class="text-center">
                            <div class="text-xl font-bold text-white">{{ $achievements['languages_supported'] ?? '18' }}</div>
                            <div class="text-white text-xs">Languages</div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Innovation Badge -->
                <div class="absolute -bottom-8 -right-8 p-6 rounded-3xl border border-white/20" style="background: linear-gradient(135deg, rgba(12, 27, 39, 0.95) 0%, rgba(22, 47, 58, 0.95) 100%); backdrop-filter: blur(20px); box-shadow: 0 25px 50px rgba(30, 192, 141, 0.2);">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-award text-xl text-white"></i>
                        </div>
                        <div>
                            <div class="text-white font-bold text-sm">{{ $achievements['years_in_uae'] ?? '5+' }} Years</div>
                            <div class="text-slate-300 text-xs">UAE Excellence</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Dubai-Focused Features -->
            <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                <!-- Section Header -->
                <div class="mb-12">
                    <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                        <i class="uil uil-map text-lg mr-3" style="color: var(--voip-link);"></i>
                        <span class="text-white font-medium">{{ $sectionData['subtitle'] ?? 'UAE-Focused Expertise' }}</span>
                    </div>
                    
                    <h2 class="text-5xl font-bold text-white mb-6 leading-tight">
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
                </div>
                
                <!-- Dubai-Specific Features Grid -->
                <div class="space-y-6">
                    @foreach($dubaiFeatures as $index => $feature)
                    <div class="group relative p-6 rounded-2xl border border-white/5 transition-all duration-500 hover:border-white/20 wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? (0.5 + ($index * 0.1)) }}s" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateX(10px)'; this.style.borderColor='rgba(30, 192, 141, 0.3)'" onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='rgba(255,255,255,0.05)'">
                        
                        <div class="flex items-start space-x-4">
                            <!-- Feature Icon -->
                            <div class="flex-shrink-0 w-14 h-14 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="{{ $feature['icon'] ?? 'uil uil-check' }} text-xl text-white"></i>
                            </div>
                            
                            <!-- Feature Content -->
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-white mb-3 group-hover:text-white transition-colors duration-300">
                                    {{ $feature['title'] ?? 'Feature Title' }}
                                </h4>
                                <p class="text-slate-300 text-base leading-relaxed">
                                    {{ $feature['description'] ?? 'Feature description tailored for Dubai business needs.' }}
                                </p>
                            </div>
                            
                            <!-- Priority Badge -->
                            <div class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold text-white" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                {{ $feature['priority'] ?? '1' }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- CTA Button -->
                <div class="mt-12">
                    <a href="{{ url('/features') }}" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" onmouseover="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.4)'" onmouseout="this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'">
                        <i class="uil uil-rocket text-lg mr-3"></i>
                        Explore Our UAE Solutions
                        <i class="uil uil-arrow-right text-lg ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>