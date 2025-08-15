@php
try {
    $data = json_decode(file_get_contents(resource_path('data/demo-request.json')), true);
    $sectionData = $data['section'] ?? [];
    $content = $data['content'] ?? [];
    $cta = $data['cta'] ?? [];
    $stats = $data['stats'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'See Your Business Transform in Real-Time',
        'subtitle' => 'Experience the Future',
        'image' => '/assets/images/saas/home.png'
    ];
    $content = [];
    $cta = [];
    $stats = [];
}
@endphp

<!-- Demo Request Section -->
<section class="relative py-20" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0" style="background: linear-gradient(135deg, #0c1b27 0%, #162f3a 50%, #0c1b27 100%); opacity: 0.95;"></div>
    
    <div class="container relative z-10">
        <!-- Full-Width Header Section -->
        <div class="text-center mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-base font-medium uppercase mb-3" 
                style="color: var(--voip-link);">
                {{ $sectionData['subtitle'] ?? 'Experience the Future' }}
            </h6>
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $sectionData['title'] ?? 'See Your Business Transform in Real-Time' }}
            </h2>
            <p class="text-lg text-slate-300 max-w-4xl mx-auto"
               data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'Watch your customer service costs drop by 70% while satisfaction soars. Our live demo reveals exactly how AI will revolutionize your business operations.' }}
            </p>
        </div>

        <!-- Two Column Layout -->
        <div class="grid lg:grid-cols-2 grid-cols-1 items-start gap-16">
            
            <!-- Left Side - Image -->
            <div class="lg:order-1 order-2 wow animate__animated animate__fadeInLeft" data-wow-delay="0.4s">
                <div class="relative">
                    <!-- Main Image Container -->
                    <div class="relative rounded-2xl overflow-hidden"
                         style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                        <img src="{{ asset($sectionData['image'] ?? '/assets/images/saas/home.png') }}" 
                             class="w-full h-auto rounded-2xl shadow-2xl transition-transform duration-500 hover:scale-105"
                             alt="{{ $sectionData['image_alt'] ?? 'AI Call Center Demo' }}" />
                        
                        <!-- Image Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent rounded-2xl"></div>
                        
                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button class="w-20 h-20 rounded-full flex items-center justify-center transition-all duration-300 group"
                                    style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);"
                                    onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.4)'"
                                    onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.3)'">
                                <i class="uil uil-play text-2xl text-white group-hover:scale-110 transition-transform duration-300"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Floating Stats -->
                    @if(!empty($stats))
                    <div class="absolute -bottom-6 right-0 bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20">
                        <div class="grid grid-cols-2 gap-3 text-center">
                            @foreach(array_slice($stats, 0, 4) as $stat)
                            <div class="text-center">
                                <div class="text-lg font-bold text-white">{{ $stat['number'] ?? '99%' }}</div>
                                <div class="text-xs text-slate-300">{{ $stat['label'] ?? 'Success' }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -top-4 -left-4 w-24 h-24 rounded-full opacity-20"
                         style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%);"></div>
                    <div class="absolute -bottom-8 -left-8 w-16 h-16 rounded-full opacity-15"
                         style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%);"></div>
                </div>
                
                <!-- Demo Features Below Image -->
                @if(isset($cta['features']) && is_array($cta['features']))
                <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach($cta['features'] as $feature)
                    <div class="flex items-center space-x-2">
                        <i class="uil uil-check-circle text-sm" style="color: var(--voip-link);"></i>
                        <span class="text-white text-sm">{{ $feature }}</span>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            
            <!-- Right Side - Content -->
            <div class="lg:order-2 order-1 wow animate__animated animate__fadeInRight" data-wow-delay="0.5s">
                <!-- Key Headlines -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold text-white mb-4">
                        {{ $content['headline'] ?? "Don't Just Read About AI Success – Witness It Live" }}
                    </h3>
                    <p class="text-base text-slate-300">
                        {{ $content['subheading'] ?? 'In 15 minutes, discover how industry leaders are transforming customer experiences' }}
                    </p>
                </div>
                
                <!-- Key Points -->
                @if(isset($content['key_points']) && is_array($content['key_points']))
                <div class="space-y-4 mb-8">
                    @foreach($content['key_points'] as $point)
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                             style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $point['icon'] ?? 'uil uil-check' }} text-white text-sm"></i>
                        </div>
                        <p class="text-white {{ ($point['emphasis'] ?? false) ? 'font-semibold' : '' }}">
                            {{ $point['text'] ?? 'Key benefit point' }}
                        </p>
                    </div>
                    @endforeach
                </div>
                @endif
                
                <!-- Social Proof & Urgency -->
                <div class="mb-8">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 border border-white/10">
                        <p class="text-white font-medium mb-2">
                            🔥 {{ $content['urgency_message'] ?? 'Join 500+ UAE businesses already using AI to dominate their markets' }}
                        </p>
                        <p class="text-sm text-slate-400">
                            {{ $content['social_proof'] ?? 'Trusted by companies like Emirates NBD, Careem, and Noon' }}
                        </p>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div>
                    <!-- Primary CTA -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 mb-6">
                        <a href="{{ $cta['primary_link'] ?? '/request-demo' }}" 
                           class="w-full sm:w-auto flex items-center justify-center py-4 px-8 text-white font-semibold text-lg rounded-xl transition-all duration-300 group"
                           style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);"
                           onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.4)'"
                           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            <i class="uil uil-rocket text-xl mr-3 group-hover:rotate-12 transition-transform duration-300"></i>
                            {{ $cta['primary_text'] ?? 'Get Your Free Live Demo' }}
                        </a>
                        
                        <div class="text-left sm:text-left text-center w-full sm:w-auto">
                            <p class="text-sm font-medium text-white">{{ $cta['secondary_text'] ?? 'Book Now - Limited Slots Available' }}</p>
                            <p class="text-xs" style="color: var(--voip-link);">{{ $cta['urgency_note'] ?? 'Next available: Today at 3:00 PM GST' }}</p>
                        </div>
                    </div>
                    
                    
                    <!-- Guarantee -->
                    <p class="text-xs text-slate-400 italic">
                        ✨ {{ $content['guarantee'] ?? 'No commitment required – just pure insights' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background Animation -->
    <div class="absolute top-1/4 right-10 w-32 h-32 rounded-full opacity-10 animate-pulse"
         style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%);"></div>
    <div class="absolute bottom-1/4 left-10 w-20 h-20 rounded-full opacity-15 animate-pulse"
         style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-delay: 2s;"></div>
</section>