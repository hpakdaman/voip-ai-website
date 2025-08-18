@php
try {
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
    $integrationData = $comprehensiveFeatures['integration_ecosystem'] ?? [];
} catch (Exception $e) {
    $integrationData = [
        'title' => 'Universal Integration Ecosystem',
        'subtitle' => 'Connect Everything',
        'description' => 'Seamlessly integrate with your entire business technology stack',
        'features' => []
    ];
}
@endphp

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
                <span class="text-white font-medium">{{ $integrationData['subtitle'] ?? 'Connect Everything' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $integrationData['title'] ?? 'Universal Integration Ecosystem' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $integrationData['description'] ?? 'Seamlessly integrate with your entire business technology stack' }}
            </p>
        </div>

        <!-- Integration Categories Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 mb-20">
            @php
            $integrationCategories = [
                ['name' => 'CRM Systems', 'icon' => 'uil uil-database', 'description' => 'Salesforce, HubSpot, Pipedrive integration'],
                ['name' => 'Communication Tools', 'icon' => 'uil uil-comments', 'description' => 'Slack, Teams, WhatsApp, Email platforms'],
                ['name' => 'Business Intelligence', 'icon' => 'uil uil-chart-growth', 'description' => 'Tableau, Power BI, Google Analytics'],
                ['name' => 'Security Platforms', 'icon' => 'uil uil-shield', 'description' => 'Identity management, compliance tools'],
                ['name' => 'Business Tools', 'icon' => 'uil uil-briefcase', 'description' => 'ERP, HR systems, project management'],
                ['name' => 'API Ecosystem', 'icon' => 'uil uil-code-branch', 'description' => 'RESTful APIs, webhooks, custom integrations']
            ];
            @endphp
            
            @foreach($integrationCategories as $index => $category)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.4 + ($index * 0.1) }}s">
                <div class="relative p-8 rounded-3xl border border-white/10 text-center transition-all duration-500 hover:border-white/30 h-full" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(10px);" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    
                    <!-- Integration Status -->
                    <div class="absolute top-4 right-4 flex items-center space-x-2">
                        <div class="w-3 h-3 rounded-full bg-green-400 animate-pulse"></div>
                        <span class="text-green-400 text-xs font-semibold uppercase tracking-wide">Active</span>
                    </div>
                    
                    <!-- Category Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 rounded-3xl mx-auto flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                            <i class="{{ $category['icon'] }} text-3xl text-white relative z-10"></i>
                            <!-- Shine effect -->
                            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12"></div>
                        </div>
                    </div>
                    
                    <!-- Category Content -->
                    <h4 class="text-xl font-bold text-white mb-3">{{ $category['name'] }}</h4>
                    <p class="text-slate-300 text-sm leading-relaxed">{{ $category['description'] }}</p>
                    
                    <!-- Connection Indicator -->
                    <div class="mt-6 flex items-center justify-center space-x-2">
                        <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
                        <div class="w-2 h-2 rounded-full" style="background-color: var(--voip-link);"></div>
                        <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Central Platform Statement -->
        <div class="text-center mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="1.0s">
            <div class="relative inline-block">
                <div class="w-32 h-32 rounded-full mx-auto flex items-center justify-center mb-6" style="background: radial-gradient(circle, var(--voip-link) 0%, var(--voip-primary) 100%); box-shadow: 0 0 60px rgba(30, 192, 141, 0.4);">
                    <i class="uil uil-server-network text-5xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold text-white mb-4">VoIP AI Platform</h3>
                <p class="text-slate-300 max-w-2xl mx-auto text-lg">The central hub that unifies all your business systems into one intelligent communication ecosystem.</p>
            </div>
        </div>

        <!-- Integration Features Grid with Hover Details -->
        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($integrationData['features'] ?? [] as $index => $feature)
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