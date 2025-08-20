@php
$heroData = $data['section'] ?? [];
$voiceDemo = $data['voice_demo'] ?? [];
$ctaButtons = $data['cta_buttons'] ?? [];
@endphp

<!-- Hero Section with Voice Demo -->
<section class="relative py-24 overflow-hidden" style="background-color: var(--voip-dark-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <!-- Animated gradient background -->
        <div class="absolute inset-0 opacity-20" style="background: radial-gradient(circle at 30% 50%, var(--voip-link) 0%, transparent 50%), radial-gradient(circle at 70% 20%, var(--voip-primary) 0%, transparent 50%);"></div>
        <!-- Tech pattern overlay -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 25px 25px, rgba(30, 192, 141, 0.3) 2px, transparent 0), radial-gradient(circle at 75px 75px, rgba(30, 192, 141, 0.2) 1px, transparent 0); background-size: 100px 100px;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content Column -->
            <div class="order-2 lg:order-1">
                <!-- Industry Badge -->
                <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInUp" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);" data-wow-delay="0.1s">
                    <i class="uil uil-phone text-lg mr-3" style="color: var(--voip-link);"></i>
                    <span class="text-white font-medium">{{ $heroData['badge'] ?? 'AI Call Center Solution' }}</span>
                </div>
                
                <!-- Main Headlines -->
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    {{ $heroData['title'] ?? 'Transform Your Business' }}
                    <span style="color: var(--voip-link);">{{ $heroData['highlighted'] ?? 'with AI Calls' }}</span>
                </h1>
                
                <p class="text-slate-300 text-xl mb-8 leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    {{ $heroData['description'] ?? 'Professional AI agents that handle your calls 24/7, never miss leads, and provide exceptional customer service in Arabic and English.' }}
                </p>
                
                <!-- Key Benefits List -->
                @if(isset($heroData['benefits']))
                <ul class="space-y-4 mb-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    @foreach($heroData['benefits'] as $benefit)
                    <li class="flex items-center text-slate-300">
                        <i class="uil uil-check text-xl mr-4" style="color: var(--voip-link);"></i>
                        {{ $benefit }}
                    </li>
                    @endforeach
                </ul>
                @endif
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-start mb-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="hero-call">
                        <i class="uil uil-phone text-xl mr-3"></i>
                        Call Now: +971 4 864 7245
                    </a>
                    <a href="/contact-us" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="hero-demo">
                        <i class="uil uil-calendar-alt text-xl mr-3"></i>
                        Book Free Demo
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="flex items-center space-x-8 text-slate-400 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-white mr-2">500+</span>
                        <span class="text-sm">UAE Businesses</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-white mr-2">24/7</span>
                        <span class="text-sm">AI Support</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-white mr-2">95%</span>
                        <span class="text-sm">Lead Capture</span>
                    </div>
                </div>
            </div>
            
            <!-- Hero Image with Voice Demo Column -->
            <div class="order-1 lg:order-2">
                <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                    <!-- Main Hero Image -->
                    <div class="relative">
                        @php
                        $heroImages = $data['hero_images'] ?? [];
                        $defaultImage = 'assets/images/real/property/1.jpg';
                        $heroImage = $heroImages['main'] ?? $defaultImage;
                        @endphp
                        <img src="{{ asset($heroImage) }}" 
                             alt="{{ $data['hero']['alt_text'] ?? 'AI Call Center Demo' }}" 
                             class="w-full h-[500px] lg:h-[600px] object-cover rounded-2xl shadow-2xl">
                        
                        <!-- Image Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent rounded-2xl"></div>
                    </div>
                    
                    <!-- Floating Voice Demo Player -->
                    <div id="voice-demo" class="absolute bottom-8 left-8 right-8 p-6 rounded-2xl border-2" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(29, 120, 97, 0.1) 100%); border-color: rgba(30, 192, 141, 0.4); backdrop-filter: blur(15px); box-shadow: 0 12px 30px rgba(30, 192, 141, 0.2);">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h6 class="text-white font-semibold mb-1">{{ $voiceDemo['title'] ?? '🎧 Live AI Call Demo' }}</h6>
                                <p class="text-slate-200 text-sm">{{ $voiceDemo['subtitle'] ?? 'Real conversation with AI agent' }}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 12px rgba(30, 192, 141, 0.4);">
                                <i class="uil uil-headphones text-xl text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Audio Player -->
                        @if(isset($voiceDemo['audio_file']))
                        <div class="voice-demo-player">
                            <audio controls class="w-full" data-demo-type="main-demo" style="accent-color: var(--voip-link);">
                                <source src="{{ asset($voiceDemo['audio_file']) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        @endif
                        
                        <!-- Demo Actions -->
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-slate-400 text-xs">{{ $voiceDemo['duration'] ?? '45 seconds' }}</span>
                            <a href="#" class="text-white text-sm hover:text-green-400 transition-colors" style="color: var(--voip-link);">
                                <i class="uil uil-download-alt mr-1"></i>Download Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Live Status Indicator -->
                <div class="absolute top-8 right-8 p-3 rounded-xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(10px);">
                    <div class="flex items-center">
                        <div class="w-2 h-2 rounded-full bg-green-400 mr-2 animate-pulse"></div>
                        <span class="text-white text-sm font-medium">AI Online</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>