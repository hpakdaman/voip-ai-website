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

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- AI Phone Interface -->
            <div class="relative wow animate__animated animate__fadeInLeft" data-wow-delay="0.4s">
                <!-- Main Phone Container -->
                <div class="relative mx-auto max-w-sm">
                    <!-- Phone Device -->
                    <div class="relative p-8 rounded-3xl border border-white/20 text-center transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(20px); box-shadow: 0 20px 40px rgba(30, 192, 141, 0.1);">
                        
                        <!-- AI Avatar -->
                        <div class="relative mb-8">
                            <div class="w-24 h-24 rounded-full mx-auto flex items-center justify-center relative overflow-hidden" style="background: radial-gradient(circle, var(--voip-link) 0%, var(--voip-primary) 100%); box-shadow: 0 0 40px rgba(30, 192, 141, 0.4);">
                                <i class="uil uil-robot text-4xl text-white relative z-10"></i>
                                <!-- Pulse Animation -->
                                <div class="absolute inset-0 rounded-full animate-ping" style="background: rgba(30, 192, 141, 0.3);"></div>
                            </div>
                        </div>
                        
                        <!-- AI Name & Status -->
                        <h3 class="text-2xl font-bold text-white mb-2">VoIP AI Assistant</h3>
                        <p class="text-green-400 text-sm font-semibold uppercase tracking-wide mb-8">● Online & Ready</p>
                        
                        <!-- Phone Number Display -->
                        <div class="mb-8 p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.05);">
                            <h4 class="text-white text-lg font-semibold mb-2">Call Our AI Agent</h4>
                            <p class="text-3xl font-bold mb-2" style="color: var(--voip-link);">{{ $aiCallingData['display_number'] ?? '+971 4 864 724' }}</p>
                            <p class="text-slate-300 text-sm">Available 24/7 in Arabic & English</p>
                        </div>
                        
                        <!-- Call Button -->
                        <a href="tel:{{ $aiCallingData['phone_number'] ?? '+971-4-VOIP-AI' }}" class="group relative block w-full p-4 rounded-xl font-bold text-white transition-all duration-500 hover:-translate-y-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" onmouseover="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.5)'" onmouseout="this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'">
                            <i class="uil uil-phone text-2xl mr-3"></i>
                            {{ $aiCallingData['call_to_action'] ?? 'Call Now to Experience AI' }}
                        </a>
                        
                        <!-- Call Stats -->
                        <div class="mt-6 flex justify-between text-center">
                            <div>
                                <div class="text-xl font-bold text-white">< 3s</div>
                                <div class="text-xs text-slate-400">Response Time</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-white">99.9%</div>
                                <div class="text-xs text-slate-400">Uptime</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-white">15+</div>
                                <div class="text-xs text-slate-400">Languages</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Features Grid -->
            <div class="space-y-6 wow animate__animated animate__fadeInRight" data-wow-delay="0.6s">
                @foreach($aiCallingData['features'] ?? [] as $index => $feature)
                <div class="group relative p-6 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/30 hover:-translate-y-1" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%); backdrop-filter: blur(10px);" data-wow-delay="{{ 0.7 + ($index * 0.1) }}s">
                    
                    <!-- Feature Icon -->
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-14 h-14 rounded-2xl flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.2);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-check' }} text-2xl text-white relative z-10"></i>
                            <!-- Shine Effect -->
                            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12"></div>
                        </div>
                        
                        <!-- Feature Content -->
                        <div class="flex-1">
                            <h4 class="text-xl font-bold text-white mb-2">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                            <p class="text-slate-300 leading-relaxed">{{ $feature['description'] ?? 'Feature description' }}</p>
                        </div>
                    </div>
                    
                    <!-- Interactive Indicator -->
                    <div class="absolute top-4 right-4 w-3 h-3 rounded-full bg-green-400 animate-pulse opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                @endforeach
                
                <!-- Demo Available Notice -->
                @if($aiCallingData['demo_available'] ?? true)
                <div class="p-4 rounded-xl border border-green-500/20 text-center" style="background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(30, 192, 141, 0.1) 100%);">
                    <div class="flex items-center justify-center mb-2">
                        <i class="uil uil-play-circle text-green-400 text-2xl mr-2"></i>
                        <span class="text-green-400 font-semibold">Live Demo Available</span>
                    </div>
                    <p class="text-slate-300 text-sm">Experience our AI technology in real-time during your call</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>