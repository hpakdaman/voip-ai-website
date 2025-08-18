@php
try {
    $expertiseData = json_decode(file_get_contents(resource_path('data/about/dubai-expertise.json')), true);
    $dubaiFeatures = $expertiseData['dubai_features'] ?? [];
} catch (Exception $e) {
    $dubaiFeatures = [
        [
            'title' => 'TRA Compliance',
            'description' => 'Full compliance with UAE telecommunications regulations.',
            'icon' => 'uil uil-shield-check',
            'priority' => 1,
            'delay' => '0.1s'
        ],
        [
            'title' => 'Arabic Language Support',
            'description' => 'Native Arabic AI with cultural understanding.',
            'icon' => 'uil uil-globe',
            'priority' => 2,
            'delay' => '0.2s'
        ],
        [
            'title' => 'Local Business Hours',
            'description' => 'Optimized for UAE business operations and time zones.',
            'icon' => 'uil uil-clock',
            'priority' => 3,
            'delay' => '0.3s'
        ]
    ];
}

// Sort by priority
usort($dubaiFeatures, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- Dubai Features Section - Feature Boxes Grid -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0">
        <!-- Subtle Pattern Background -->
        <div class="absolute inset-0 opacity-3" style="background-image: linear-gradient(30deg, rgba(30, 192, 141, 0.05) 25%, transparent 25%), linear-gradient(-30deg, rgba(30, 192, 141, 0.05) 25%, transparent 25%); background-size: 80px 80px;"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-award text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">UAE Advantages</span>
            </div>
            
            <h3 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Why Choose Our UAE-Based Solutions
            </h3>
            
            <p class="text-slate-300 text-lg max-w-2xl mx-auto">
                Specifically engineered features that give your business the UAE advantage in AI communication
            </p>
        </div>
        
        <!-- Dubai Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($dubaiFeatures as $index => $feature)
            <div class="group relative p-8 rounded-2xl border border-white/5 transition-all duration-500 hover:border-white/20 wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? (0.3 + ($index * 0.1)) }}s" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='rgba(30, 192, 141, 0.3)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.05)'; this.style.boxShadow='none'">
                
                <!-- Feature Icon -->
                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                    <i class="{{ $feature['icon'] ?? 'uil uil-check' }} text-2xl text-white"></i>
                </div>
                
                <!-- Feature Content -->
                <div>
                    <h4 class="text-xl font-bold text-white mb-4 group-hover:text-white transition-colors duration-300">
                        {{ $feature['title'] ?? 'Feature Title' }}
                    </h4>
                    <p class="text-slate-300 text-base leading-relaxed mb-6">
                        {{ $feature['description'] ?? 'Feature description tailored for UAE business needs.' }}
                    </p>
                    
                    <!-- Priority Indicator -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 rounded-full" style="background-color: var(--voip-link);"></div>
                            <span class="text-slate-400 text-sm">Priority {{ $feature['priority'] ?? '1' }}</span>
                        </div>
                        
                        <!-- Arrow Icon -->
                        <div class="w-8 h-8 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110" style="background: rgba(30, 192, 141, 0.1);">
                            <i class="uil uil-arrow-up-right text-sm" style="color: var(--voip-link);"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Hover Gradient Effect -->
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.02) 0%, rgba(29, 120, 97, 0.05) 100%);"></div>
            </div>
            @endforeach
        </div>
        
        <!-- Bottom CTA -->
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
            <div class="p-8 rounded-3xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(10px);">
                <h4 class="text-2xl font-bold text-white mb-4">
                    Ready to Experience UAE's AI Advantage?
                </h4>
                <p class="text-slate-300 text-lg mb-6 max-w-xl mx-auto">
                    Join 500+ UAE businesses already benefiting from our locally-optimized AI solutions
                </p>
                <a href="{{ url('/contact-us') }}" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" onmouseover="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.4)'" onmouseout="this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'">
                    <i class="uil uil-phone text-lg mr-3"></i>
                    Schedule UAE Consultation
                    <i class="uil uil-arrow-right text-lg ml-3"></i>
                </a>
            </div>
        </div>
    </div>
</section>