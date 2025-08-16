@extends('layouts.main')
@section('title', 'VoIP AI Features - Complete Feature Overview | Dubai VoIP Solutions')
@section('content')

@php
try {
    $pageData = json_decode(file_get_contents(resource_path('data/features-page.json')), true);
    $coreFeatures = json_decode(file_get_contents(resource_path('data/ai-call-center-features.json')), true);
    $uaeFeatures = json_decode(file_get_contents(resource_path('data/uae-specific-features.json')), true);
    $integrationFeatures = json_decode(file_get_contents(resource_path('data/integration-features.json')), true);
    $securityFeatures = json_decode(file_get_contents(resource_path('data/security-features.json')), true);
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
} catch (Exception $e) {
    $pageData = ['hero' => ['title' => 'VoIP AI Features', 'description' => 'Comprehensive feature overview']];
    $coreFeatures = ['features' => []];
    $uaeFeatures = ['features' => []];
    $integrationFeatures = ['categories' => []];
    $securityFeatures = ['features' => []];
    $comprehensiveFeatures = [];
}
@endphp

<!-- Hero Section - Immersive Cinema Style -->
<section class="relative min-h-screen flex items-center overflow-hidden" style="background-color: var(--voip-dark-bg);">
    <!-- Dynamic Gradient Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center top, rgba(30, 192, 141, 0.08) 0%, transparent 50%), linear-gradient(135deg, #0c1b27 0%, #162f3a 30%, #0c1b27 70%, #1a2f3a 100%);"></div>
        <!-- Animated Floating Orbs -->
        <div class="floating-orb absolute top-1/4 left-1/4 w-96 h-96 rounded-full opacity-10 animate-pulse" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%); animation-duration: 4s;"></div>
        <div class="floating-orb absolute bottom-1/4 right-1/4 w-64 h-64 rounded-full opacity-5 animate-pulse" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-duration: 6s; animation-delay: 2s;"></div>
    </div>
    
    <div class="container relative z-10 py-20">
        <div class="grid grid-cols-1 text-center">
            <!-- Feature Count Badge -->
            <div class="wow animate__animated animate__fadeInDown" data-wow-delay="0.1s">
                <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                    <span class="text-sm font-medium text-white mr-2">200+</span>
                    <span class="text-sm" style="color: var(--voip-link);">Advanced AI Features</span>
                </div>
            </div>
            
            <h1 class="mb-8 md:text-7xl text-5xl font-bold text-white leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                The Most <span style="background: linear-gradient(135deg, var(--voip-link) 0%, #ffffff 50%, var(--voip-primary) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Advanced</span><br/>
                AI Call Center Platform
            </h1>
            
            <p class="text-slate-200 max-w-4xl mx-auto text-xl mb-12 leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                Experience the future of business communications with enterprise-grade AI features designed specifically for the UAE market. From intelligent automation to predictive analytics, discover how our platform transforms customer service into a competitive advantage.
            </p>
            
            <!-- Interactive Feature Navigator -->
            <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-4 max-w-6xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <a href="#intelligent-automation" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-robot text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Intelligent Automation</h6>
                </a>
                <a href="#advanced-analytics" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-chart-growth text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Advanced Analytics</h6>
                </a>
                <a href="#customer-experience" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-heart text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Customer Experience</h6>
                </a>
                <a href="#enterprise-security" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-shield-check text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Enterprise Security</h6>
                </a>
                <a href="#integration-ecosystem" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-apps text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Integrations</h6>
                </a>
                <a href="#global-readiness" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-globe text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Global Ready</h6>
                </a>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                <div class="inline-flex flex-col items-center">
                    <span class="text-slate-400 text-sm mb-4">Scroll to explore features</span>
                    <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intelligent Automation Section - Magazine Layout Style -->
<section id="intelligent-automation" class="relative py-32" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 100%);">
    <div class="container relative z-10">
        <!-- Section Introduction -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
            <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <div class="inline-flex items-center px-4 py-2 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1);">
                    <i class="uil uil-robot text-sm mr-2" style="color: var(--voip-link);"></i>
                    <span class="text-sm font-medium text-white">{{ $comprehensiveFeatures['intelligent_automation']['subtitle'] ?? 'Smart AI Workflows' }}</span>
                </div>
                <h2 class="text-5xl font-bold text-white mb-6 leading-tight">
                    {{ $comprehensiveFeatures['intelligent_automation']['title'] ?? 'Intelligent Process Automation' }}
                </h2>
                <p class="text-slate-300 text-lg leading-relaxed mb-8">
                    {{ $comprehensiveFeatures['intelligent_automation']['description'] ?? 'Advanced automation that learns, adapts, and optimizes your business processes' }}
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
            @foreach($comprehensiveFeatures['intelligent_automation']['features'] ?? [] as $index => $feature)
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
                <span class="text-white font-medium">{{ $comprehensiveFeatures['advanced_analytics']['subtitle'] ?? 'Data-Driven Decision Making' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $comprehensiveFeatures['advanced_analytics']['title'] ?? 'Advanced Analytics & Business Intelligence' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $comprehensiveFeatures['advanced_analytics']['description'] ?? 'Transform raw conversation data into actionable business insights' }}
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
            @foreach($comprehensiveFeatures['advanced_analytics']['features'] ?? [] as $index => $feature)
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

<!-- Customer Experience Section - Journey Timeline Style -->
<section id="customer-experience" class="relative py-32 overflow-hidden" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 100%);">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(30deg, var(--voip-link) 12%, transparent 12.5%, transparent 87%, var(--voip-link) 87.5%, var(--voip-link)), linear-gradient(150deg, var(--voip-link) 12%, transparent 12.5%, transparent 87%, var(--voip-link) 87.5%, var(--voip-link)); background-size: 80px 140px;"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-heart text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $comprehensiveFeatures['customer_experience']['subtitle'] ?? 'Delight Every Customer' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $comprehensiveFeatures['customer_experience']['title'] ?? 'Superior Customer Experience Engine' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $comprehensiveFeatures['customer_experience']['description'] ?? 'Advanced features designed to exceed customer expectations and build lasting relationships' }}
            </p>
        </div>

        <!-- Customer Journey Timeline -->
        <div class="relative mb-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <!-- Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 rounded-full" style="background: linear-gradient(to bottom, var(--voip-primary), var(--voip-link), var(--voip-primary));"></div>
            
            <div class="space-y-16">
                @foreach(['Initial Contact', 'Active Engagement', 'Issue Resolution', 'Follow-up Care'] as $index => $stage)
                <div class="relative flex items-center {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }}">
                    <!-- Timeline Node -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 rounded-full border-4 border-white flex items-center justify-center z-10" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <span class="text-white font-bold text-lg">{{ $index + 1 }}</span>
                    </div>
                    
                    <!-- Content Card -->
                    <div class="w-5/12 {{ $index % 2 == 0 ? 'pr-16' : 'pl-16' }}">
                        <div class="p-8 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/30" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(10px);" onmouseover="this.style.transform='scale(1.02)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.2)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
                            <h4 class="text-2xl font-bold text-white mb-4">{{ $stage }}</h4>
                            <p class="text-slate-300 text-base leading-relaxed mb-4">
                                @if($index == 0)
                                    Customer reaches out through any channel - phone, chat, email, or social media. Our AI instantly recognizes them and loads their complete history.
                                @elseif($index == 1)
                                    AI personalizes the conversation based on customer preferences, past interactions, and current context. Every response feels tailored and relevant.
                                @elseif($index == 2)
                                    89% of issues resolved instantly without human intervention. Complex cases seamlessly escalate to specialists with full context preserved.
                                @else
                                    Proactive follow-up ensures satisfaction. AI schedules check-ins, renewal reminders, and identifies opportunities for additional value.
                                @endif
                            </p>
                            <div class="flex items-center space-x-2">
                                <div class="flex-1 h-2 bg-white/10 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full transition-all duration-1000" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: {{ ($index + 1) * 25 }}%;"></div>
                                </div>
                                <span class="text-white text-sm font-medium">{{ ($index + 1) * 25 }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Experience Features Grid -->
        <div class="grid lg:grid-cols-2 gap-12">
            @foreach($comprehensiveFeatures['customer_experience']['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.8) }}s">
                <div class="relative p-8 rounded-3xl border border-white/10 h-full transition-all duration-700" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-10px) rotateX(5deg)'; this.style.boxShadow='0 30px 60px rgba(30, 192, 141, 0.2)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0) rotateX(0deg)'; this.style.boxShadow='none'">
                    
                    <!-- 3D Icon Effect -->
                    <div class="relative mb-8">
                        <div class="w-24 h-24 rounded-3xl flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-heart' }} text-4xl text-white relative z-10"></i>
                            <!-- Shimmer effect -->
                            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12"></div>
                        </div>
                        <!-- Floating particles -->
                        <div class="absolute -top-2 -right-2 w-4 h-4 rounded-full animate-bounce" style="background-color: var(--voip-link); animation-delay: 0.5s;"></div>
                        <div class="absolute -bottom-1 -left-1 w-3 h-3 rounded-full animate-bounce" style="background-color: var(--voip-primary); animation-delay: 1s;"></div>
                    </div>
                    
                    <!-- Feature Content -->
                    <h4 class="text-3xl font-bold text-white mb-4 group-hover:text-white transition-colors duration-300">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                    <p class="text-slate-300 text-lg leading-relaxed mb-6">{{ $feature['description'] ?? 'Feature description' }}</p>
                    
                    <!-- Enhanced Details -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-6 rounded-2xl border border-white/5" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(5px);">
                        <h6 class="text-white text-sm font-bold mb-3 uppercase tracking-wide flex items-center">
                            <i class="uil uil-cog text-sm mr-2" style="color: var(--voip-link);"></i>
                            How It Works
                        </h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- Customer Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-4 p-4 rounded-xl" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(22, 47, 58, 0.05) 100%);">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center" style="background-color: var(--voip-link);">
                            <i class="uil uil-smile text-sm text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-bold mb-2">Customer Impact</h6>
                            <p class="text-base" style="color: var(--voip-link);">{{ $feature['benefit'] }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Enterprise Security Section - Comparison Table Style -->
<section id="enterprise-security" class="relative py-32" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(30, 192, 141, 0.03) 0%, transparent 50%), linear-gradient(135deg, #0c1b27 0%, #162f3a 100%);"></div>
        <!-- Security Pattern Overlay -->
        <div class="absolute inset-0 opacity-5" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(30, 192, 141, 0.1) 10px, rgba(30, 192, 141, 0.1) 20px);"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-shield-check text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $comprehensiveFeatures['enterprise_security']['subtitle'] ?? 'Protect Your Business' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $comprehensiveFeatures['enterprise_security']['title'] ?? 'Enterprise-Grade Security & Compliance' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $comprehensiveFeatures['enterprise_security']['description'] ?? 'Military-grade security features designed for enterprise environments' }}
            </p>
        </div>

        <!-- Security Comparison Table -->
        <div class="relative mb-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <div class="overflow-hidden rounded-3xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.4) 100%); backdrop-filter: blur(20px);">
                <!-- Table Header -->
                <div class="grid grid-cols-4 gap-0 p-8 border-b border-white/10">
                    <div class="text-center">
                        <h4 class="text-2xl font-bold text-white mb-2">Security Feature</h4>
                        <p class="text-slate-400 text-sm">Protection Level</p>
                    </div>
                    <div class="text-center">
                        <h4 class="text-xl font-bold text-white mb-2">Basic Plans</h4>
                        <div class="inline-flex items-center px-3 py-1 rounded-full bg-yellow-500/20 border border-yellow-500/30">
                            <span class="text-yellow-400 text-sm font-medium">Standard</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="text-xl font-bold text-white mb-2">Pro Plans</h4>
                        <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-500/20 border border-blue-500/30">
                            <span class="text-blue-400 text-sm font-medium">Advanced</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="text-xl font-bold text-white mb-2">Our Platform</h4>
                        <div class="inline-flex items-center px-3 py-1 rounded-full border border-white/30" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <span class="text-white text-sm font-bold">Military-Grade</span>
                        </div>
                    </div>
                </div>
                
                <!-- Comparison Rows -->
                @php
                $securityComparisons = [
                    ['feature' => 'Data Encryption', 'basic' => 'SSL/TLS', 'pro' => 'AES-128', 'ours' => 'AES-256 + Quantum-Resistant'],
                    ['feature' => 'Access Control', 'basic' => 'Basic Auth', 'pro' => '2FA Optional', 'ours' => 'Zero-Trust + MFA'],
                    ['feature' => 'Threat Detection', 'basic' => 'Manual Monitoring', 'pro' => 'Basic Alerts', 'ours' => 'AI-Powered 24/7'],
                    ['feature' => 'Compliance', 'basic' => 'Basic Reports', 'pro' => 'GDPR Ready', 'ours' => 'Auto GDPR/PCI/HIPAA/UAE']
                ];
                @endphp
                
                @foreach($securityComparisons as $index => $row)
                <div class="grid grid-cols-4 gap-0 p-6 border-b border-white/5 hover:bg-white/5 transition-colors duration-300">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center mr-4" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-shield text-lg text-white"></i>
                        </div>
                        <span class="text-white font-semibold">{{ $row['feature'] }}</span>
                    </div>
                    <div class="text-center flex items-center justify-center">
                        <span class="text-slate-400">{{ $row['basic'] }}</span>
                    </div>
                    <div class="text-center flex items-center justify-center">
                        <span class="text-slate-300">{{ $row['pro'] }}</span>
                    </div>
                    <div class="text-center flex items-center justify-center">
                        <div class="flex items-center space-x-2">
                            <i class="uil uil-check-circle text-lg" style="color: var(--voip-link);"></i>
                            <span class="text-white font-semibold">{{ $row['ours'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Detailed Security Features -->
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($comprehensiveFeatures['enterprise_security']['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.6) }}s">
                <div class="relative p-8 rounded-2xl border border-white/10 h-full transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    
                    <!-- Security Level Badge -->
                    <div class="absolute top-4 right-4 px-3 py-1 rounded-full text-xs font-bold text-white" style="background: linear-gradient(135deg, #dc2626, #ef4444);">
                        HIGH SECURITY
                    </div>
                    
                    <!-- Feature Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 rounded-3xl flex items-center justify-center relative" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 0 30px rgba(30, 192, 141, 0.3);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-shield' }} text-3xl text-white"></i>
                            <!-- Security pulse animation -->
                            <div class="absolute inset-0 rounded-3xl animate-ping" style="background: rgba(30, 192, 141, 0.3);"></div>
                        </div>
                    </div>
                    
                    <!-- Feature Content -->
                    <h4 class="text-2xl font-bold text-white mb-4">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                    <p class="text-slate-300 text-base leading-relaxed mb-6">{{ $feature['description'] ?? 'Feature description' }}</p>
                    
                    <!-- Security Implementation Details -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-4 rounded-xl border border-red-500/20" style="background: linear-gradient(135deg, rgba(220, 38, 38, 0.1) 0%, rgba(30, 192, 141, 0.05) 100%);">
                        <h6 class="text-white text-sm font-semibold mb-2 flex items-center">
                            <i class="uil uil-lock text-sm mr-2" style="color: var(--voip-link);"></i>
                            Security Implementation
                        </h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- Business Protection Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-3 p-4 rounded-xl" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.1) 100%);">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center" style="background-color: var(--voip-link);">
                            <i class="uil uil-shield-check text-xs text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-semibold mb-1">Protection Level</h6>
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

<!-- Integration Ecosystem Section - Interactive Hub Style -->
<section id="integration-ecosystem" class="relative py-32 overflow-hidden" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 100%);">
    <div class="absolute inset-0">
        <!-- Animated Connection Lines -->
        <svg class="absolute inset-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
                    <path d="M 50 0 L 0 0 0 50" fill="none" stroke="currentColor" stroke-width="1" style="color: var(--voip-link);"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-apps text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $comprehensiveFeatures['integration_ecosystem']['subtitle'] ?? 'Connect Everything' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $comprehensiveFeatures['integration_ecosystem']['title'] ?? 'Universal Integration Ecosystem' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $comprehensiveFeatures['integration_ecosystem']['description'] ?? 'Seamlessly integrate with your entire business technology stack' }}
            </p>
        </div>

        <!-- Central Integration Hub Visual -->
        <div class="relative mb-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <div class="flex items-center justify-center">
                <!-- Central Hub -->
                <div class="relative z-10">
                    <div class="w-48 h-48 rounded-full border-4 border-white/20 flex items-center justify-center" style="background: radial-gradient(circle, var(--voip-link) 0%, var(--voip-primary) 100%); box-shadow: 0 0 100px rgba(30, 192, 141, 0.3);">
                        <div class="text-center">
                            <i class="uil uil-server-network text-6xl text-white mb-4"></i>
                            <h4 class="text-white font-bold text-xl">VoIP AI Platform</h4>
                            <p class="text-white/80 text-sm">Central Hub</p>
                        </div>
                    </div>
                    
                    <!-- Orbit Rings -->
                    <div class="absolute inset-0 animate-spin" style="animation-duration: 30s;">
                        <div class="w-80 h-80 rounded-full border border-dashed border-white/10 absolute -inset-16"></div>
                    </div>
                    <div class="absolute inset-0 animate-spin" style="animation-duration: 45s; animation-direction: reverse;">
                        <div class="w-96 h-96 rounded-full border border-dashed border-white/5 absolute -inset-24"></div>
                    </div>
                </div>
                
                <!-- Integration Points -->
                @php
                $integrationPoints = [
                    ['name' => 'CRM Systems', 'icon' => 'uil uil-database', 'position' => 'top-0 left-1/2 -translate-x-1/2 -translate-y-16'],
                    ['name' => 'Communication', 'icon' => 'uil uil-comments', 'position' => 'top-1/4 right-0 translate-x-16 -translate-y-8'],
                    ['name' => 'Business Tools', 'icon' => 'uil uil-briefcase', 'position' => 'bottom-1/4 right-0 translate-x-16 translate-y-8'],
                    ['name' => 'Analytics', 'icon' => 'uil uil-chart-growth', 'position' => 'bottom-0 left-1/2 -translate-x-1/2 translate-y-16'],
                    ['name' => 'Security', 'icon' => 'uil uil-shield', 'position' => 'bottom-1/4 left-0 -translate-x-16 translate-y-8'],
                    ['name' => 'APIs', 'icon' => 'uil uil-code-branch', 'position' => 'top-1/4 left-0 -translate-x-16 -translate-y-8']
                ];
                @endphp
                
                @foreach($integrationPoints as $index => $point)
                <div class="absolute {{ $point['position'] }} wow animate__animated animate__fadeIn" data-wow-delay="{{ 0.6 + ($index * 0.1) }}s">
                    <div class="relative">
                        <!-- Connection Line -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-1 h-24 bg-gradient-to-b from-transparent via-white/20 to-transparent transform origin-center {{ str_contains($point['position'], 'top') ? 'rotate-0' : (str_contains($point['position'], 'right') ? 'rotate-45' : (str_contains($point['position'], 'bottom') ? 'rotate-180' : (str_contains($point['position'], 'left') ? '-rotate-45' : 'rotate-0'))) }}"></div>
                        </div>
                        
                        <!-- Integration Node -->
                        <div class="w-20 h-20 rounded-2xl border border-white/20 flex items-center justify-center transition-all duration-300 hover:scale-110" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(10px);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.2)'; this.style.boxShadow='none'">
                            <i class="{{ $point['icon'] }} text-2xl" style="color: var(--voip-link);"></i>
                        </div>
                        
                        <!-- Label -->
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2">
                            <span class="text-white text-sm font-medium whitespace-nowrap">{{ $point['name'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Integration Features Grid with Hover Details -->
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($comprehensiveFeatures['integration_ecosystem']['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.8) }}s">
                <div class="relative p-8 rounded-2xl border border-white/10 h-full transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    
                    <!-- Integration Status Indicator -->
                    <div class="absolute top-4 right-4 flex items-center space-x-2">
                        <div class="w-3 h-3 rounded-full bg-green-400 animate-pulse"></div>
                        <span class="text-green-400 text-xs font-semibold uppercase tracking-wide">Active</span>
                    </div>
                    
                    <!-- Feature Icon with Connect Animation -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 rounded-3xl flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-apps' }} text-3xl text-white relative z-10"></i>
                            <!-- Data flow animation -->
                            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <div class="absolute top-1/2 left-0 w-full h-0.5 bg-white/50 transform -translate-y-1/2">
                                    <div class="w-2 h-2 bg-white rounded-full animate-ping absolute left-0 top-1/2 transform -translate-y-1/2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Feature Content -->
                    <h4 class="text-2xl font-bold text-white mb-4">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                    <p class="text-slate-300 text-base leading-relaxed mb-6">{{ $feature['description'] ?? 'Feature description' }}</p>
                    
                    <!-- Integration Details -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-4 rounded-xl border border-white/5" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.1) 100%);">
                        <h6 class="text-white text-sm font-semibold mb-2 flex items-center">
                            <i class="uil uil-link text-sm mr-2" style="color: var(--voip-link);"></i>
                            Integration Capabilities
                        </h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- Business Efficiency Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-3 p-4 rounded-xl" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.05) 100%);">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center" style="background-color: var(--voip-link);">
                            <i class="uil uil-rocket text-xs text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-semibold mb-1">Efficiency Gain</h6>
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

<!-- Global Readiness Section - World Map Style -->
<section id="global-readiness" class="relative py-32" style="background-color: var(--voip-dark-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-globe text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $comprehensiveFeatures['global_readiness']['subtitle'] ?? 'Scale Worldwide' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $comprehensiveFeatures['global_readiness']['title'] ?? 'Global Business Readiness' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $comprehensiveFeatures['global_readiness']['description'] ?? 'Enterprise features designed for multinational operations and diverse markets' }}
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
            @foreach($comprehensiveFeatures['global_readiness']['features'] ?? [] as $index => $feature)
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

<!-- Call to Action Section - Fixed with FAQ Button Style -->
<section class="relative py-20" style="background-color: var(--voip-dark-bg);">
    <div class="container relative z-10">
        <div class="grid grid-cols-1 text-center">
            <h2 class="mb-6 md:text-4xl text-3xl font-semibold text-white wow animate__animated animate__fadeInUp" 
                data-wow-delay="0.1s">
                Ready to Experience These Features?
            </h2>
            <p class="text-slate-300 max-w-2xl mx-auto text-lg mb-8 wow animate__animated animate__fadeInUp" 
               data-wow-delay="0.2s">
                Start your free 30-day trial and see how our VoIP AI solution transforms your business communications
            </p>
            
            <!-- CTA Buttons - Using FAQ Section Button Pattern -->
            <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                <a href="{{ url('/contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center text-white rounded-md hover:scale-105 transition-all hover-voip-button" style="background-color: var(--voip-primary);">
                    <i class="uil uil-rocket text-lg mr-2"></i>
                    Start Free Trial
                </a>
                <a href="{{ url('/contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center border-2 rounded-md transition-all hover:text-white hover:scale-105" style="border-color: var(--voip-primary); color: var(--voip-primary);" onmouseover="this.style.backgroundColor='var(--voip-primary)'" onmouseout="this.style.backgroundColor='transparent'">
                    <i class="uil uil-phone text-lg mr-2"></i>
                    Schedule Demo
                </a>
            </div>
        </div>
    </div>
</section>

@endsection