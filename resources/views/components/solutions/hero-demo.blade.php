@php
// Dynamically determine industry from URL path
$currentPath = request()->path();
$industry = 'real-estate'; // Default fallback
if (str_contains($currentPath, 'spa-massage')) {
    $industry = 'spa-massage';
} elseif (str_contains($currentPath, 'real-estate')) {
    $industry = 'real-estate';
}

$heroData = json_decode(file_get_contents(resource_path("data/solutions/{$industry}/hero.json")), true);
$sectionData = $heroData['section'] ?? [];
$voiceDemo = $heroData['voice_demo'] ?? [];
@endphp

<!-- Hero Section with Voice Demo - Real Estate Focus -->
<section class="relative min-h-screen flex items-center pt-20" style="background-color: var(--voip-dark-bg);">
    <!-- Premium Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(30, 192, 141, 0.1) 0%, transparent 70%), linear-gradient(135deg, #0c1b27 0%, #162f3a 50%, #0c1b27 100%);"></div>
        <!-- Subtle Real Estate Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(45deg, rgba(30, 192, 141, 0.1) 25%, transparent 25%), linear-gradient(-45deg, rgba(30, 192, 141, 0.1) 25%, transparent 25%); background-size: 60px 60px;"></div>
    </div>
    
    <div class="container relative z-10 py-16">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="order-1 lg:order-1 wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <!-- Industry Badge -->
                <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                    @if($industry === 'spa-massage')
                    <i class="uil uil-spa text-sm mr-2" style="color: var(--voip-link);"></i>
                    @else
                    <i class="uil uil-building text-sm mr-2" style="color: var(--voip-link);"></i>
                    @endif
                    <span class="text-white font-medium">{{ $sectionData['industry_badge'] ?? ($industry === 'spa-massage' ? 'Spa & Wellness AI Solutions' : 'Real Estate AI Solutions') }}</span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-3xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    {{ $sectionData['main_title'] ?? 'Never Miss Another' }}
                    <span style="color: var(--voip-link);">{{ $sectionData['highlighted_word'] ?? ($industry === 'spa-massage' ? 'Spa Booking' : 'Real Estate Lead') }}</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-slate-300 text-xl leading-relaxed mb-8">
                    {{ $sectionData['subtitle'] ?? ($industry === 'spa-massage' ? 'Dubai\'s #1 AI call center handles spa bookings, treatment inquiries, and client consultations 24/7 - even when you\'re with other clients.' : 'Dubai\'s #1 AI call center handles property inquiries, showing bookings, and lead qualification 24/7 - even when you\'re showing other properties.') }}
                </p>
                
                <!-- Key Benefits List -->
                <div class="space-y-4 mb-10">
                    @foreach($sectionData['key_benefits'] ?? [] as $benefit)
                    <div class="flex items-start space-x-4">
                        <div class="w-6 h-6 rounded-full flex items-center justify-center mt-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-check text-xs text-white"></i>
                        </div>
                        <span class="text-slate-300 text-lg">{{ $benefit }}</span>
                    </div>
                    @endforeach
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="#voice-demo" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" data-cta-track="hero-listen-demo">
                        <i class="uil uil-play text-lg mr-3"></i>
                        Listen to Live Demo
                    </a>
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="hero-call-now">
                        <i class="uil uil-phone text-lg mr-3"></i>
                        Call Now: +971 4 864 7245
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="grid grid-cols-3 gap-6">
                    @foreach($sectionData['trust_stats'] ?? [] as $stat)
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white mb-1">{{ $stat['number'] ?? '0' }}</div>
                        <div class="text-slate-400 text-sm">{{ $stat['label'] ?? 'Metric' }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Right Voice Demo Player -->
            <div class="order-2 lg:order-2 relative wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                <!-- Voice Demo Container -->
                <div class="relative">
                    <!-- Main Demo Image -->
                    <div class="relative">
                        @if($industry === 'spa-massage')
                        <img src="{{ asset('assets/images/spa/1.jpg') }}" 
                             alt="Spa & Massage AI Call Center Demo" 
                             class="w-full h-[500px] lg:h-[600px] object-cover rounded-2xl shadow-2xl">
                        @else
                        <img src="{{ asset('assets/images/real/property/1.jpg') }}" 
                             alt="Real Estate Agent AI Call Center Demo" 
                             class="w-full h-[500px] lg:h-[600px] object-cover rounded-2xl shadow-2xl">
                        @endif
                        
                        <!-- Demo Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent rounded-2xl"></div>
                    </div>
                    
                    <!-- Floating Voice Demo Player -->
                    <div id="voice-demo" class="absolute bottom-8 left-8 right-8 p-6 rounded-2xl border-2" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(29, 120, 97, 0.1) 100%); border-color: rgba(30, 192, 141, 0.4); backdrop-filter: blur(15px); box-shadow: 0 12px 30px rgba(30, 192, 141, 0.2);">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h6 class="text-white font-semibold mb-1">{{ $voiceDemo['title'] ?? 'Live Property Inquiry Demo' }}</h6>
                                <p class="text-slate-200 text-sm">{{ $voiceDemo['description'] ?? 'Real conversation with AI agent' }}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 12px rgba(30, 192, 141, 0.4);">
                                <i class="uil uil-headphones text-xl text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Audio Player -->
                        <div class="voice-demo-player">
                            <audio controls class="w-full" data-demo-type="{{ str_contains(request()->path(), 'spa-massage') ? 'spa-booking' : 'property-inquiry' }}" style="accent-color: var(--voip-link);">
                                @if($industry === 'spa-massage')
                                <source src="{{ asset('assets/audio/solutions/spa-massage/spa-booking-demo.mp3') }}" type="audio/mpeg">
                                @else
                                <source src="{{ asset('assets/audio/solutions/real-estate/property-inquiry-demo.mp3') }}" type="audio/mpeg">
                                @endif
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        
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
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                        <div class="text-white font-medium text-sm">Live 24/7</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="animate-bounce">
            <i class="uil uil-angle-down text-2xl text-white opacity-60"></i>
        </div>
    </div>
</section>
