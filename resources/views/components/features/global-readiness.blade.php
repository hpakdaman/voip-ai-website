@php
try {
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
    $globalData = $comprehensiveFeatures['global_readiness'] ?? [];
} catch (Exception $e) {
    $globalData = [
        'title' => 'Global Business Readiness',
        'subtitle' => 'Scale Worldwide',
        'description' => 'Enterprise features designed for multinational operations and diverse markets',
        'features' => []
    ];
}
@endphp

<!-- Global Readiness Section - World Map Style -->
<section id="global-readiness" class="relative py-32" style="background-color: var(--voip-dark-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-globe text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $globalData['subtitle'] ?? 'Scale Worldwide' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $globalData['title'] ?? 'Global Business Readiness' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $globalData['description'] ?? 'Enterprise features designed for multinational operations and diverse markets' }}
            </p>
        </div>

        <!-- Global Stats Display -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 mb-20">
            @php
            $globalStats = [
                ['number' => '73', 'label' => 'Languages Supported', 'icon' => 'uil uil-comments'],
                ['number' => '180+', 'label' => 'Currencies & Payment Methods', 'icon' => 'uil uil-money-bill'],
                ['number' => '50+', 'label' => 'Countries with Data Centers', 'icon' => 'uil uil-server'],
                ['number' => '24/7', 'label' => 'Global Support Coverage', 'icon' => 'uil uil-clock']
            ];
            @endphp
            
            @foreach($globalStats as $index => $stat)
            <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.4 + ($index * 0.1) }}s">
                <div class="relative mb-6">
                    <div class="w-24 h-24 rounded-full mx-auto flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                        <i class="{{ $stat['icon'] }} text-3xl text-white"></i>
                    </div>
                </div>
                <div class="text-4xl font-bold text-white mb-2">{{ $stat['number'] }}</div>
                <div class="text-slate-300">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>

        <!-- Global Features Grid -->
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($globalData['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.8) }}s">
                <div class="relative p-8 rounded-2xl border border-white/10 h-full transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    
                    <!-- Global Availability Badge -->
                    <div class="absolute top-4 right-4 px-3 py-1 rounded-full text-xs font-bold text-white" style="background: linear-gradient(135deg, #059669, #10b981);">
                        WORLDWIDE
                    </div>
                    
                    <!-- Feature Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 rounded-3xl flex items-center justify-center relative" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-globe' }} text-3xl text-white"></i>
                        </div>
                    </div>
                    
                    <!-- Feature Content -->
                    <h4 class="text-2xl font-bold text-white mb-4">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                    <p class="text-slate-300 text-base leading-relaxed mb-6">{{ $feature['description'] ?? 'Feature description' }}</p>
                    
                    <!-- Global Implementation Details -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-4 rounded-xl border border-white/5" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.1) 100%);">
                        <h6 class="text-white text-sm font-semibold mb-2 flex items-center">
                            <i class="uil uil-map text-sm mr-2" style="color: var(--voip-link);"></i>
                            Global Implementation
                        </h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- Market Expansion Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-3 p-4 rounded-xl" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.05) 100%);">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center" style="background-color: var(--voip-link);">
                            <i class="uil uil-globe text-xs text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-semibold mb-1">Market Expansion</h6>
                            <p class="text-sm" style="color: var(--voip-link);">{{ $feature['benefit'] }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>