@php
try {
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
    $securityData = $comprehensiveFeatures['enterprise_security'] ?? [];
} catch (Exception $e) {
    $securityData = [
        'title' => 'Enterprise-Grade Security & Compliance',
        'subtitle' => 'Protect Your Business',
        'description' => 'Military-grade security features designed for enterprise environments',
        'features' => []
    ];
}
@endphp

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
                <span class="text-white font-medium">{{ $securityData['subtitle'] ?? 'Protect Your Business' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $securityData['title'] ?? 'Enterprise-Grade Security & Compliance' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $securityData['description'] ?? 'Military-grade security features designed for enterprise environments' }}
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
            @foreach($securityData['features'] ?? [] as $index => $feature)
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