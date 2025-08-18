@php
try {
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
    $analyticsData = $comprehensiveFeatures['advanced_analytics'] ?? [];
} catch (Exception $e) {
    $analyticsData = [
        'title' => 'Advanced Analytics & Business Intelligence',
        'subtitle' => 'Data-Driven Decision Making',
        'description' => 'Transform raw conversation data into actionable business insights',
        'features' => []
    ];
}
@endphp

<!-- Advanced Analytics Section - Dashboard Style -->
<section id="advanced-analytics" class="relative py-32" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: linear-gradient(135deg, #0c1b27 0%, #162f3a 50%, #0c1b27 100%); opacity: 0.95;"></div>
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 1px 1px, rgba(30, 192, 141, 0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header with Stats Preview -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-chart-growth text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $analyticsData['subtitle'] ?? 'Data-Driven Decision Making' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $analyticsData['title'] ?? 'Advanced Analytics & Business Intelligence' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $analyticsData['description'] ?? 'Transform raw conversation data into actionable business insights' }}
            </p>
        </div>

        <!-- Analytics Dashboard Preview -->
        <div class="relative mb-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <div class="relative p-8 rounded-3xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.4) 100%); backdrop-filter: blur(20px);">
                <!-- Dashboard Header -->
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-2xl font-bold text-white">Live Analytics Dashboard</h3>
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-slate-300 text-sm">Real-time monitoring</span>
                    </div>
                </div>
                
                <!-- Key Metrics Grid -->
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mb-8">
                    <div class="p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                        <div class="flex items-center justify-between mb-4">
                            <i class="uil uil-phone text-2xl" style="color: var(--voip-link);"></i>
                            <span class="text-xs text-green-400 bg-green-400/20 px-2 py-1 rounded-full">+12%</span>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">2,847</div>
                        <div class="text-slate-400 text-sm">Calls Today</div>
                    </div>
                    <div class="p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                        <div class="flex items-center justify-between mb-4">
                            <i class="uil uil-heart text-2xl" style="color: var(--voip-link);"></i>
                            <span class="text-xs text-green-400 bg-green-400/20 px-2 py-1 rounded-full">+8%</span>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">94.2%</div>
                        <div class="text-slate-400 text-sm">Satisfaction</div>
                    </div>
                    <div class="p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                        <div class="flex items-center justify-between mb-4">
                            <i class="uil uil-clock text-2xl" style="color: var(--voip-link);"></i>
                            <span class="text-xs text-blue-400 bg-blue-400/20 px-2 py-1 rounded-full">-3s</span>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">1:23</div>
                        <div class="text-slate-400 text-sm">Avg Response</div>
                    </div>
                    <div class="p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                        <div class="flex items-center justify-between mb-4">
                            <i class="uil uil-money-bill text-2xl" style="color: var(--voip-link);"></i>
                            <span class="text-xs text-green-400 bg-green-400/20 px-2 py-1 rounded-full">+15%</span>
                        </div>
                        <div class="text-3xl font-bold text-white mb-2">$847K</div>
                        <div class="text-slate-400 text-sm">Revenue Impact</div>
                    </div>
                </div>
                
                <!-- Live Chart Simulation -->
                <div class="p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.05);">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="text-white font-semibold">Customer Sentiment Trends</h4>
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                        </div>
                    </div>
                    <div class="h-24 flex items-end justify-between space-x-2">
                        @for($i = 1; $i <= 12; $i++)
                        <div class="flex-1 rounded-t-lg animate-pulse" style="background: linear-gradient(to top, var(--voip-primary), var(--voip-link)); height: {{ rand(40, 100) }}%; animation-delay: {{ $i * 0.1 }}s;"></div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Analytics Features -->
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($analyticsData['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.6) }}s">
                <div class="relative p-8 rounded-2xl border border-white/10 h-full transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    
                    <!-- Feature Icon with Animation -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 rounded-3xl flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-chart-growth' }} text-3xl text-white relative z-10"></i>
                            <div class="absolute inset-0 bg-white/20 transform rotate-45 translate-x-full group-hover:-translate-x-full transition-transform duration-1000"></div>
                        </div>
                    </div>
                    
                    <!-- Feature Content -->
                    <h4 class="text-2xl font-bold text-white mb-4">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                    <p class="text-slate-300 text-base leading-relaxed mb-6">{{ $feature['description'] ?? 'Feature description' }}</p>
                    
                    <!-- Technical Details -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-4 rounded-xl border-l-4 border-white/10" style="background: rgba(30, 192, 141, 0.05); border-left-color: var(--voip-link);">
                        <h6 class="text-white text-sm font-semibold mb-2">Technical Capability</h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- ROI Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-3 p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center" style="background-color: var(--voip-link);">
                            <i class="uil uil-chart-growth text-xs text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-semibold mb-1">ROI Impact</h6>
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