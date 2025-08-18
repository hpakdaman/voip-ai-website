@php
try {
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
    $automationData = $comprehensiveFeatures['intelligent_automation'] ?? [];
} catch (Exception $e) {
    $automationData = [
        'title' => 'Intelligent Process Automation',
        'subtitle' => 'Smart AI Workflows',
        'description' => 'Advanced automation that learns, adapts, and optimizes your business processes',
        'features' => []
    ];
}
@endphp

<!-- Intelligent Automation Section - Magazine Layout Style -->
<section id="intelligent-automation" class="relative py-32" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 100%);">
    <div class="container relative z-10">
        <!-- Section Introduction -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
            <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <div class="inline-flex items-center px-4 py-2 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1);">
                    <i class="uil uil-robot text-sm mr-2" style="color: var(--voip-link);"></i>
                    <span class="text-sm font-medium text-white">{{ $automationData['subtitle'] ?? 'Smart AI Workflows' }}</span>
                </div>
                <h2 class="text-5xl font-bold text-white mb-6 leading-tight">
                    {{ $automationData['title'] ?? 'Intelligent Process Automation' }}
                </h2>
                <p class="text-slate-300 text-lg leading-relaxed mb-8">
                    {{ $automationData['description'] ?? 'Advanced automation that learns, adapts, and optimizes your business processes' }}
                </p>
                
                <!-- Key Stats -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">85%</div>
                        <div class="text-sm text-slate-400">Transfer Reduction</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">94%</div>
                        <div class="text-sm text-slate-400">First Call Resolution</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-2">96%</div>
                        <div class="text-sm text-slate-400">Prediction Accuracy</div>
                    </div>
                </div>
            </div>
            
            <!-- Feature Showcase Visual -->
            <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                <div class="relative p-8 rounded-3xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(10px);">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 rounded-full" style="background-color: var(--voip-link);"></div>
                            <span class="text-white text-sm">AI analyzes incoming call</span>
                        </div>
                        <div class="flex items-center space-x-3 ml-6">
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <span class="text-white text-sm">Routes to optimal agent/department</span>
                        </div>
                        <div class="flex items-center space-x-3 ml-12">
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                            <span class="text-white text-sm">Provides personalized script</span>
                        </div>
                        <div class="flex items-center space-x-3 ml-18">
                            <div class="w-3 h-3 rounded-full bg-blue-400"></div>
                            <span class="text-white text-sm">Monitors quality in real-time</span>
                        </div>
                    </div>
                    
                    <!-- Animated Progress Bar -->
                    <div class="mt-6 h-2 bg-white/10 rounded-full overflow-hidden">
                        <div class="h-full rounded-full animate-pulse" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: 78%;"></div>
                    </div>
                    <div class="text-xs text-slate-400 mt-2">Processing efficiency: 78% above industry average</div>
                </div>
            </div>
        </div>

        <!-- Detailed Features Grid -->
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($automationData['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.4) }}s">
                <div class="relative p-8 rounded-2xl border border-white/10 h-full transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    
                    <!-- Feature Header -->
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="flex-shrink-0 w-16 h-16 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-rocket' }} text-2xl text-white"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="text-2xl font-bold text-white mb-2">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                            <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['description'] ?? 'Feature description' }}</p>
                        </div>
                    </div>
                    
                    <!-- Detailed Description -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-4 rounded-xl border border-white/5" style="background: rgba(30, 192, 141, 0.05);">
                        <h6 class="text-white text-sm font-semibold mb-2 uppercase tracking-wide">How It Works</h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- Business Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center mt-0.5" style="background-color: var(--voip-link);">
                            <i class="uil uil-check text-xs text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-semibold mb-1">Business Impact</h6>
                            <p class="text-sm" style="color: var(--voip-link);">{{ $feature['benefit'] }}</p>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Feature Priority Badge -->
                    <div class="absolute top-4 right-4 w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold text-white" style="background-color: var(--voip-primary);">{{ $feature['priority'] ?? '1' }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>