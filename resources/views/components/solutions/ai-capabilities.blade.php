@php
$capabilitiesData = json_decode(file_get_contents(resource_path('data/solutions/real-estate/capabilities.json')), true);
$sectionData = $capabilitiesData['section'] ?? [];
$capabilities = $capabilitiesData['capabilities'] ?? [];
$integrations = $capabilitiesData['integrations'] ?? [];
@endphp

<!-- AI Capabilities for Real Estate -->
<section class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <!-- Professional Background -->
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at right, rgba(30, 192, 141, 0.08) 0%, transparent 70%), linear-gradient(-45deg, rgba(29, 120, 97, 0.05) 0%, transparent 50%);"></div>
        <!-- Tech Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 25px 25px, rgba(30, 192, 141, 0.2) 1px, transparent 0), radial-gradient(circle at 75px 75px, rgba(30, 192, 141, 0.1) 1px, transparent 0); background-size: 100px 100px;"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-robot text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['badge'] ?? 'AI Real Estate Assistant' }}</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $sectionData['title'] ?? 'Your AI Agent Knows' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'Real Estate Inside Out' }}</span>
            </h2>
            
            <p class="text-slate-300 text-xl leading-relaxed">
                {{ $sectionData['description'] ?? 'Advanced AI trained specifically for UAE real estate market, property laws, and client management.' }}
            </p>
        </div>
        
        <!-- Main Capabilities Grid -->
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            @foreach($capabilities as $capability)
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ $capability['delay'] ?? '0.2s' }}">
                <!-- Capability Card -->
                <div class="h-full p-8 rounded-2xl border border-white/10 transition-all duration-300 hover:scale-105 hover:border-white/20" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <!-- Icon & Badge -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil {{ $capability['icon'] ?? 'uil-brain' }} text-2xl text-white"></i>
                        </div>
                        @if($capability['is_premium'] ?? false)
                        <span class="px-3 py-1 text-xs font-semibold rounded-full text-white" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                            Premium
                        </span>
                        @endif
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-white mb-4">{{ $capability['title'] ?? 'Capability Title' }}</h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">{{ $capability['description'] ?? 'Capability description' }}</p>
                    
                    <!-- Features List -->
                    <ul class="space-y-2 mb-6">
                        @foreach($capability['features'] ?? [] as $feature)
                        <li class="flex items-center text-sm text-slate-400">
                            <i class="uil uil-check text-xs mr-2" style="color: var(--voip-link);"></i>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    
                    <!-- Performance Metric -->
                    <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.05);">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 text-xs">Performance</span>
                            <span class="text-lg font-bold text-white">{{ $capability['metric'] ?? '95%' }}</span>
                        </div>
                        <div class="text-xs mt-1" style="color: var(--voip-link);">{{ $capability['metric_label'] ?? 'Accuracy Rate' }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Integrations Section -->
        <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold text-white mb-4">Seamless Integration with Your Tools</h3>
                <p class="text-slate-300">Works with popular real estate platforms used across UAE</p>
            </div>
            
            <!-- Integration Logos Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-12">
                @foreach($integrations as $integration)
                <div class="p-6 rounded-xl border border-white/10 transition-all duration-300 hover:scale-105 hover:border-white/20 group" style="background: rgba(30, 192, 141, 0.05);">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform" style="background: rgba(255, 255, 255, 0.1);">
                            <i class="uil {{ $integration['icon'] ?? 'uil-apps' }} text-xl text-white"></i>
                        </div>
                        <h4 class="text-white font-medium text-sm">{{ $integration['name'] ?? 'Platform' }}</h4>
                        <p class="text-slate-400 text-xs mt-1">{{ $integration['type'] ?? 'Integration' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Live Demo CTA with Image -->
        <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Demo Image -->
                <div class="relative order-2 lg:order-1">
                    <img src="{{ asset('assets/images/real/about.jpg') }}" 
                         alt="Real Estate Professional Using AI Assistant" 
                         class="w-full h-[400px] object-cover rounded-2xl shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent rounded-2xl"></div>
                    
                    <!-- Floating Stats -->
                    <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(15px);">
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-white">40%</div>
                                <div class="text-slate-400 text-xs">More Leads</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-white">24/7</div>
                                <div class="text-slate-400 text-xs">Coverage</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Demo Content -->
                <div class="order-1 lg:order-2">
                    <div class="max-w-lg">
                        <h3 class="text-3xl font-bold text-white mb-4">See Your AI Agent in Action</h3>
                        <p class="text-slate-300 mb-6 text-lg">Watch a live demonstration of how our AI handles real estate calls with professional expertise and natural conversation flow.</p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center text-slate-300">
                                <i class="uil uil-check text-lg mr-3" style="color: var(--voip-link);"></i>
                                Handles property inquiries and bookings
                            </div>
                            <div class="flex items-center text-slate-300">
                                <i class="uil uil-check text-lg mr-3" style="color: var(--voip-link);"></i>
                                Qualifies leads with smart questions
                            </div>
                            <div class="flex items-center text-slate-300">
                                <i class="uil uil-check text-lg mr-3" style="color: var(--voip-link);"></i>
                                Integrates with your CRM automatically
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#voice-samples" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" data-cta-track="capabilities-voice-samples">
                                <i class="uil uil-play text-lg mr-3"></i>
                                Listen to More Demos
                            </a>
                            <a href="/contact-us" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="capabilities-book-demo">
                                <i class="uil uil-calendar-alt text-lg mr-3"></i>
                                Book Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Capability Cards Hover Effects */
.capability-card {
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.capability-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 50px rgba(30, 192, 141, 0.2);
}

/* Integration Icons Animation */
.integration-icon {
    transition: all 0.3s ease;
}

.integration-card:hover .integration-icon {
    transform: scale(1.2) rotate(5deg);
    color: var(--voip-link);
}

/* Performance Metrics Animation */
@keyframes counter-animation {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.metric-number {
    animation: counter-animation 0.6s ease-out forwards;
}
</style>