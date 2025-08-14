@php
try {
    $whoWeAreData = json_decode(file_get_contents(resource_path('data/who-we-are.json')), true);
    $sectionData = $whoWeAreData['section'] ?? [];
    $whoWeAreFeatures = $whoWeAreData['features'] ?? [];
    $missionData = $whoWeAreData['mission'] ?? [];
    $visualData = $whoWeAreData['visual'] ?? [];
    $ctaData = $whoWeAreData['cta'] ?? [];
} catch (Exception $e) {
    // Fallback data in case JSON file cannot be read
    $sectionData = [
        'subtitle' => 'About Our Company',
        'title' => 'Who We Are',
        'description' => 'We are a UAE-based technology company specializing in AI-powered VoIP solutions designed specifically for Middle Eastern businesses.'
    ];
    $whoWeAreFeatures = [
        [
            'id' => 1,
            'icon' => 'uil uil-rocket',
            'title' => 'Innovation Leaders',
            'description' => 'Pioneering AI-powered VoIP solutions that transform how businesses communicate in the digital age.',
            'stat' => '500+',
            'statLabel' => 'AI Models Deployed',
            'delay' => '0.4s'
        ],
        [
            'id' => 2,
            'icon' => 'uil uil-users-alt',
            'title' => 'Expert Team',
            'description' => 'UAE-based specialists with deep expertise in AI, telecommunications, and Middle Eastern business culture.',
            'stat' => '15+',
            'statLabel' => 'Years Combined Experience',
            'delay' => '0.6s'
        ],
        [
            'id' => 3,
            'icon' => 'uil uil-globe',
            'title' => 'Regional Focus',
            'description' => 'Built specifically for the UAE and MENA region with local compliance, Arabic support, and cultural understanding.',
            'stat' => '50+',
            'statLabel' => 'Languages Supported',
            'delay' => '0.8s'
        ]
    ];
    $missionData = [
        'title' => 'What We Do',
        'description' => 'We revolutionize customer service through AI-powered call center technology that handles inquiries 24/7 in multiple languages.',
        'company_info' => [
            ['label' => 'Founded', 'value' => '2019', 'type' => 'year', 'icon' => 'uil uil-calendar-alt'],
            ['label' => 'Headquarters', 'value' => 'Dubai, UAE', 'type' => 'location', 'icon' => 'uil uil-map-marker']
        ]
    ];
    $visualData = [
        'image_path' => 'assets/images/business/about01.jpg',
        'alt_text' => 'Professional business team collaboration'
    ];
    $ctaData = [
        'title' => 'Ready to Transform Your Communications?',
        'description' => 'Join hundreds of UAE businesses already using our AI-powered VoIP solutions',
        'buttons' => [
            ['text' => 'Learn More', 'url' => '/about', 'type' => 'secondary'],
            ['text' => 'Get Started', 'url' => '/contact-us', 'type' => 'primary']
        ]
    ];
}

// Sort features by priority if available
usort($whoWeAreFeatures, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- Who We Are Section Start -->
<section class="relative md:py-24 py-16" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0" style="background: linear-gradient(135deg, #0c1b27, #162f3a); opacity: 0.9;"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" style="color: var(--voip-link);" data-wow-delay="0.1s">{{ $sectionData['subtitle'] ?? 'About Our Company' }}</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $sectionData['title'] ?? 'Who We Are' }}
            </h2>
            <p class="text-slate-300 max-w-2xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'We are a UAE-based technology company specializing in AI-powered VoIP solutions.' }}
            </p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px] items-stretch">
            @foreach ($whoWeAreFeatures as $index => $feature)
                <div class="border border-dashed border-white/30 rounded-xl p-8 text-center duration-500 premium-card who-we-are-card h-full flex flex-col wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? (0.4 + ($index * 0.2)) }}s">
                    <div class="mb-6">
                        <i class="{{ $feature['icon'] }} text-5xl mb-4" style="color: var(--voip-link);"></i>
                        <div class="stat-container">
                            <h3 class="text-3xl font-bold text-white mb-1">{{ $feature['stat'] }}</h3>
                            <p class="text-sm text-slate-400">{{ $feature['statLabel'] }}</p>
                        </div>
                    </div>
                    <div class="content flex-1 flex flex-col justify-center">
                        <h4 class="text-xl font-semibold text-white mb-4">{{ $feature['title'] }}</h4>
                        <p class="text-slate-300 leading-relaxed">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Company Values/Mission Row -->
        <div class="grid lg:grid-cols-2 grid-cols-1 mt-16 gap-[50px] items-center">
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                <h3 class="text-2xl font-semibold text-white mb-6">{{ $missionData['title'] ?? 'Our Mission' }}</h3>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    {{ $missionData['description'] ?? 'To empower UAE and MENA businesses with cutting-edge AI communication technology.' }}
                </p>
                <div class="grid grid-cols-2 gap-6">
                    @if(isset($missionData['company_info']) && is_array($missionData['company_info']))
                        @foreach($missionData['company_info'] as $info)
                            <div class="text-center p-4 rounded-lg" style="background: rgba(30, 192, 141, 0.1);">
                                <i class="{{ $info['icon'] ?? 'uil uil-info-circle' }} text-2xl mb-3" style="color: var(--voip-link);"></i>
                                <h4 class="text-lg font-semibold text-white mb-2">{{ $info['label'] }}</h4>
                                <p class="{{ $info['type'] === 'year' ? 'text-2xl font-bold' : 'text-xl font-semibold' }}" style="color: var(--voip-link);">{{ $info['value'] }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="1.2s">
                <div class="relative">
                    <!-- Professional business image -->
                    <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
                        @if(isset($visualData['image_path']))
                            <img src="{{ asset($visualData['image_path']) }}" 
                                 alt="{{ $visualData['alt_text'] ?? 'Professional business team' }}" 
                                 class="w-full h-full object-cover">
                        @else
                            <!-- Fallback placeholder -->
                            <img src="{{ asset('assets/images/business/about01.jpg') }}" 
                                 alt="Professional business team collaboration" 
                                 class="w-full h-full object-cover">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="grid grid-cols-1 mt-16">
            <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
                <h4 class="text-xl font-semibold text-white mb-4">{{ $ctaData['title'] ?? 'Ready to Transform Your Communications?' }}</h4>
                <p class="text-slate-300 mb-6">{{ $ctaData['description'] ?? 'Join hundreds of UAE businesses already using our AI-powered VoIP solutions' }}</p>
                <div class="space-x-4">
                    @if(isset($ctaData['buttons']) && is_array($ctaData['buttons']))
                        @foreach($ctaData['buttons'] as $button)
                            @if($button['type'] === 'secondary')
                                <a href="{{ url($button['url']) }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center border-2 rounded-md transition-all hover:text-white hover:scale-105" style="border-color: var(--voip-primary); color: var(--voip-primary);" onmouseover="this.style.backgroundColor='var(--voip-primary)'" onmouseout="this.style.backgroundColor='transparent'">
                                    {{ $button['text'] }}
                                </a>
                            @else
                                <a href="{{ url($button['url']) }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center text-white rounded-md hover:scale-105 transition-all hover-voip-button" style="background-color: var(--voip-primary);">
                                    {{ $button['text'] }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Who We Are Section End -->