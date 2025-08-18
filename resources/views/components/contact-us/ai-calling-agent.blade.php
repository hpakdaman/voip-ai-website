@php
$contactData = json_decode(file_get_contents(resource_path('data/contact-us.json')), true);
$aiCallingData = $contactData['ai_calling'] ?? [];
@endphp

<!-- AI Calling Agent Section -->
<section id="ai-calling" class="relative py-24 overflow-hidden" style="background-color: #0a1a24;">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <!-- Pulsing Circles -->
        <div class="absolute top-20 left-10 w-32 h-32 rounded-full opacity-20 animate-ping" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%); animation-duration: 3s;"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 rounded-full opacity-25 animate-ping" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-duration: 4s; animation-delay: 1s;"></div>
        
        <!-- Voice Wave Animation -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex space-x-2 opacity-10">
            <div class="w-2 h-16 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0s;"></div>
            <div class="w-2 h-24 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.2s;"></div>
            <div class="w-2 h-20 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.4s;"></div>
            <div class="w-2 h-28 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.6s;"></div>
            <div class="w-2 h-18 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.8s;"></div>
        </div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-robot text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $aiCallingData['subtitle'] ?? 'Experience VoIP AI in Action' }}</span>
            </div>
            
            <h2 class="text-5xl font-bold text-white mb-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $aiCallingData['title'] ?? 'Talk to Our AI Agent' }}
            </h2>
            
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed mb-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $aiCallingData['description'] ?? 'Test our AI communication technology firsthand - speak directly with our intelligent agent to see how we can transform your business conversations.' }}
            </p>
        </div>

        <!-- Centered AI Phone Interface -->
        <div class="max-w-xl mx-auto text-center">
            <!-- AI Phone Container -->
            <div class="relative p-8 rounded-2xl border border-white/20 transition-all duration-500 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(20px); box-shadow: 0 30px 60px rgba(30, 192, 141, 0.1);">
                
                <!-- AI Avatar -->
                <div class="relative mb-6">
                    <div class="w-24 h-24 rounded-full mx-auto flex items-center justify-center relative overflow-hidden" style="background: radial-gradient(circle, var(--voip-link) 0%, var(--voip-primary) 100%); box-shadow: 0 0 40px rgba(30, 192, 141, 0.4);">
                        <i class="uil uil-robot text-3xl text-white relative z-10"></i>
                        <!-- Pulse Animation -->
                        <div class="absolute inset-0 rounded-full animate-ping" style="background: rgba(30, 192, 141, 0.3);"></div>
                    </div>
                </div>
                
                <!-- AI Info -->
                <h3 class="text-2xl font-bold text-white mb-3">VoIP AI Assistant</h3>
                <p class="text-green-400 text-sm font-semibold uppercase tracking-wide mb-6">● Available 24/7 in Arabic & English</p>
                
                <!-- Phone Number Display -->
                <div class="mb-6 p-6 rounded-2xl border border-white/10" style="background: rgba(30, 192, 141, 0.08);">
                    <h4 class="text-white text-lg font-semibold mb-3">Experience AI Communication</h4>
                    <p class="text-3xl font-bold mb-3" style="color: var(--voip-link);">{{ $aiCallingData['display_number'] ?? '+971 4 864 724' }}</p>
                    <p class="text-slate-300 text-sm">Test our AI technology with a live demo call</p>
                </div>
                
                <!-- Call Button -->
                <a href="tel:{{ $aiCallingData['phone_number'] ?? '+971-4-VOIP-AI' }}" class="group relative inline-flex items-center justify-center px-8 py-4 rounded-xl font-bold text-white text-lg transition-all duration-500 hover:-translate-y-2 mb-6" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" onmouseover="this.style.boxShadow='0 20px 50px rgba(30, 192, 141, 0.6)'" onmouseout="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.4)'">
                    <i class="uil uil-phone text-2xl mr-3"></i>
                    {{ $aiCallingData['call_to_action'] ?? 'Call Now to Experience AI' }}
                </a>
                
                <!-- Simple Stats -->
                <div class="grid grid-cols-3 gap-8 pt-8 border-t border-white/10">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">< 3s</div>
                        <div class="text-slate-400 text-sm">Response</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">99.9%</div>
                        <div class="text-slate-400 text-sm">Uptime</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">15+</div>
                        <div class="text-slate-400 text-sm">Languages</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Features - Simplified Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            @foreach($aiCallingData['features'] ?? [] as $index => $feature)
            <div class="text-center p-6 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/30 hover:-translate-y-1" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%); backdrop-filter: blur(10px);">
                <div class="w-16 h-16 rounded-2xl mx-auto mb-4 flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                    <i class="{{ $feature['icon'] ?? 'uil uil-check' }} text-2xl text-white"></i>
                </div>
                <h4 class="text-lg font-bold text-white mb-2">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                <p class="text-slate-300 text-sm">{{ $feature['description'] ?? 'Feature description' }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>