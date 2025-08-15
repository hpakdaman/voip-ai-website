@php
try {
    $data = json_decode(file_get_contents(resource_path('data/ai-call-center-features.json')), true);
    $sectionData = $data['section'] ?? [];
    $features = $data['features'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'Transform Your Business Communication',
        'subtitle' => 'AI Call Center Benefits',
        'description' => 'Discover how automated AI call centers revolutionize customer service'
    ];
    $features = [];
}

// Sort by priority
usort($features, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- AI Call Center Features Section -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 50%, #162f3a 100%); opacity: 0.9;"></div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" 
                style="color: var(--voip-link);" data-wow-delay="0.1s">
                {{ $sectionData['subtitle'] ?? 'AI Call Center Benefits' }}
            </h6>
            <h3 class="mb-6 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold text-white wow animate__animated animate__fadeInUp" 
                data-wow-delay="0.2s">
                {{ $sectionData['title'] ?? 'Transform Your Business Communication' }}
            </h3>
            <p class="text-slate-300 max-w-3xl mx-auto text-lg mb-8 wow animate__animated animate__fadeInUp" 
               data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'Discover how automated AI call centers revolutionize customer service, reduce costs, and boost efficiency for modern businesses' }}
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mb-10">
            @foreach($features as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" 
                 data-wow-delay="{{ $feature['delay'] ?? ($index * 0.1 + 0.1) }}s">
                <div class="relative rounded-2xl border border-dashed border-white/20 p-6 h-full transition-all duration-500"
                     style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.3) 100%);"
                     onmouseover="this.style.borderColor='var(--voip-link)'; this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.15)'; this.style.transform='translateY(-5px)'"
                     onmouseout="this.style.borderColor='rgba(255,255,255,0.2)'; this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                    
                    <!-- Feature Icon -->
                    <div class="mb-4">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center transition-all duration-300"
                             style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-rocket' }} text-2xl text-white"></i>
                        </div>
                    </div>

                    <!-- Feature Content -->
                    <div class="space-y-3">
                        <h4 class="text-xl font-semibold text-white group-hover:text-white transition-colors duration-300">
                            {{ $feature['title'] ?? 'Feature Title' }}
                        </h4>
                        <p class="text-slate-300 text-sm leading-relaxed">
                            {{ $feature['description'] ?? 'Feature description' }}
                        </p>
                        @if(isset($feature['benefit']))
                        <div class="pt-2 border-t border-white/10">
                            <p class="text-xs font-medium text-white/80 uppercase tracking-wide mb-1">Benefit</p>
                            <p class="text-sm" style="color: var(--voip-link);">
                                {{ $feature['benefit'] }}
                            </p>
                        </div>
                        @endif
                    </div>

                    <!-- Hover Glow Effect -->
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"
                         style="background: radial-gradient(circle at center, rgba(30, 192, 141, 0.1) 0%, transparent 70%);"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.9s">
            <!-- Main CTA Button and Description -->
            <div class="mb-6">
                <!-- Mobile: Stacked -->
                <div class="flex flex-col items-center gap-4 sm:hidden">
                    <a href="{{ $sectionData['cta_link'] ?? '/features' }}" 
                       class="inline-flex items-center py-3 px-8 text-white font-medium rounded-xl transition-all duration-300 group"
                       style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);"
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="uil uil-arrow-right text-lg mr-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        {{ $sectionData['cta_text'] ?? 'Explore All Features' }}
                    </a>
                    
                    <div class="flex items-center gap-3 text-slate-400">
                        <span class="text-sm">Learn about our complete feature set</span>
                    </div>
                </div>
                
                <!-- Desktop: Side by side -->
                <div class="hidden sm:flex items-center justify-center gap-6">
                    <a href="{{ $sectionData['cta_link'] ?? '/features' }}" 
                       class="inline-flex items-center py-3 px-8 text-white font-medium rounded-xl transition-all duration-300 group"
                       style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);"
                       onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'"
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="uil uil-arrow-right text-lg mr-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        {{ $sectionData['cta_text'] ?? 'Explore All Features' }}
                    </a>
                    
                    <div class="flex items-center gap-3 text-slate-400">
                        <span class="w-px h-6" style="background-color: rgba(255,255,255,0.2);"></span>
                        <span class="text-sm">Learn about our complete feature set</span>
                    </div>
                </div>
            </div>
            
            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 max-w-3xl mx-auto">
                <div class="flex items-center justify-center md:justify-center gap-2">
                    <i class="uil uil-check-circle text-green-400 text-lg"></i>
                    <span class="text-sm text-slate-400">No Setup Fees</span>
                </div>
                <div class="flex items-center justify-center md:justify-center gap-2">
                    <i class="uil uil-check-circle text-green-400 text-lg"></i>
                    <span class="text-sm text-slate-400">30-Day Free Trial</span>
                </div>
                <div class="flex items-center justify-center md:justify-center gap-2">
                    <i class="uil uil-check-circle text-green-400 text-lg"></i>
                    <span class="text-sm text-slate-400">24/7 Support</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Decorative Elements -->
    <div class="absolute top-10 left-10 w-20 h-20 rounded-full opacity-10"
         style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%);"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 rounded-full opacity-5"
         style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%);"></div>
    <div class="absolute top-1/2 left-1/4 w-2 h-2 rounded-full opacity-30"
         style="background-color: var(--voip-link);"></div>
    <div class="absolute top-1/3 right-1/3 w-1 h-1 rounded-full opacity-40"
         style="background-color: var(--voip-link);"></div>
</section>