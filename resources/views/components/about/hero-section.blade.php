@php
try {
    $heroData = json_decode(file_get_contents(resource_path('data/about/hero.json')), true);
    $sectionData = $heroData['section'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'Leading AI Call Center Innovation in Dubai',
        'subtitle' => 'About VoIP AI Solutions',
        'description' => 'We are Dubai\'s premier AI-powered communication specialists.',
        'stats' => []
    ];
}
@endphp

<!-- Hero Section - Split Layout with Professional Image -->
<section class="relative min-h-screen flex items-center pt-20" style="background-color: var(--voip-dark-bg);">
    <!-- Sophisticated Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: linear-gradient(135deg, #0c1b27 0%, #162f3a 50%, #0c1b27 100%); opacity: 0.95;"></div>
        <!-- Subtle Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(90deg, rgba(30, 192, 141, 0.1) 1px, transparent 1px), linear-gradient(rgba(30, 192, 141, 0.1) 1px, transparent 1px); background-size: 80px 80px;"></div>
    </div>
    
    <div class="container relative z-10 py-16">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="order-2 lg:order-1 wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                <!-- Company Badge -->
                <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                    <i class="uil uil-building text-sm mr-2" style="color: var(--voip-link);"></i>
                    <span class="text-white font-medium">About VoIP AI</span>
                </div>
                
                <!-- Main Heading - Simplified -->
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    Dubai's AI Communication Experts
                </h1>
                
                <!-- Description -->
                <p class="text-slate-300 text-lg leading-relaxed mb-8">
                    {{ $sectionData['description'] ?? 'We are Dubai\'s premier AI-powered communication specialists, transforming how businesses connect with their customers across the UAE and Middle East.' }}
                </p>
                
                <!-- Key Highlight -->
                <div class="flex items-center mb-8 p-4 rounded-xl border-l-4 border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); border-left-color: var(--voip-link);">
                    <i class="uil uil-award text-2xl mr-4" style="color: var(--voip-link);"></i>
                    <div>
                        <h6 class="text-white font-semibold mb-1">{{ $sectionData['highlight'] ?? '5+ Years of Excellence' }}</h6>
                        <p class="text-slate-300 text-sm">Serving Dubai's business community with distinction</p>
                    </div>
                </div>
                
                <!-- Stats Grid -->
                <div class="grid grid-cols-3 gap-6">
                    @foreach($sectionData['stats'] ?? [] as $stat)
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $stat['icon'] ?? 'uil uil-star' }} text-xl text-white"></i>
                        </div>
                        <div class="text-2xl font-bold text-white mb-1">{{ $stat['number'] ?? '0' }}</div>
                        <div class="text-slate-400 text-sm">{{ $stat['label'] ?? 'Metric' }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="order-1 lg:order-2 relative wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                <!-- Main Image Container -->
                <div class="relative">
                    <!-- Professional UAE Team Image -->
                    <img src="{{ asset('assets/images/about/about02.png') }}" 
                         alt="VoIP AI Solutions Dubai Professional Team" 
                         class="w-full h-[500px] lg:h-[600px] object-contain rounded-2xl">
                    
                    <!-- Image Overlay with Company Info - Covers bottom -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 rounded-b-2xl" style="background: linear-gradient(to top, rgba(12, 27, 39, 0.95) 0%, rgba(12, 27, 39, 0.8) 50%, transparent 100%); backdrop-filter: blur(15px);">
                        <div class="flex items-center justify-between">
                            <div>
                                <h6 class="text-white font-semibold mb-1">Dubai Headquarters</h6>
                                <p class="text-slate-300 text-sm">DIFC, Dubai, UAE</p>
                            </div>
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil uil-map-marker text-xl text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Achievement Badge -->
                <div class="absolute top-0 right-0 lg:-top-6 lg:-right-6 p-4 rounded-2xl border border-white/20" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 20px 40px rgba(30, 192, 141, 0.3);">
                    <div class="text-center">
                        <i class="uil uil-trophy text-3xl text-white mb-2"></i>
                        <div class="text-white font-bold text-sm">Dubai Chamber</div>
                        <div class="text-white text-xs opacity-90">AI Innovation Award</div>
                    </div>
                </div>
                
                <!-- Floating Stats -->
                <div class="absolute bottom-24 left-0 lg:-bottom-6 lg:-left-6 p-4 rounded-2xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(10px);">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-400 animate-pulse"></div>
                        <div>
                            <div class="text-white font-semibold text-sm">Active Now</div>
                            <div class="text-slate-300 text-xs">500+ Dubai Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>