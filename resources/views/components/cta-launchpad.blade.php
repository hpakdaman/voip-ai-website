<!-- 12. Action Launchpad (CTA Cluster) -->
<section id="trial" class="relative py-24 bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600">
    <div class="absolute inset-0 bg-slate-900/80"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 text-center">
            <h6 class="text-indigo-300 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Ready to Transform?</h6>
            <h2 class="mb-6 md:text-5xl text-4xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Launch Your UAE AI VoIP Era Now</h2>
            <p class="text-slate-300 text-xl max-w-2xl mx-auto mb-12 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Join hundreds of UAE businesses already experiencing the future of intelligent communications</p>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px] mt-10">
            @php
            $ctaOptions = [
                [
                    'icon' => 'uil uil-rocket',
                    'title' => 'Start Free Trial',
                    'desc' => '30-day full access',
                    'urgency' => 'No credit card required',
                    'link' => '#signup',
                    'primary' => true
                ],
                [
                    'icon' => 'uil uil-play',
                    'title' => 'Watch Demo',
                    'desc' => 'See AI in action',
                    'urgency' => 'Live UAE examples',
                    'link' => '#demo',
                    'primary' => false
                ],
                [
                    'icon' => 'uil uil-phone',
                    'title' => 'Schedule Call',
                    'desc' => 'Speak with expert',
                    'urgency' => 'UAE time zone available',
                    'link' => '#contact',
                    'primary' => false
                ],
                [
                    'icon' => 'uil uil-chat-bubble-user',
                    'title' => 'Live Chat',
                    'desc' => 'Instant support',
                    'urgency' => 'AI-powered assistance',
                    'link' => '#chat',
                    'primary' => false
                ]
            ];
            @endphp

            @foreach ($ctaOptions as $index => $cta)
                <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.15) }}s">
                    <div class="group relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/20 hover:border-white/30 transition-all duration-300">
                        <!-- CTA Icon -->
                        <div class="w-20 h-20 bg-gradient-to-r from-white/20 to-white/10 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="{{ $cta['icon'] }} text-3xl text-white"></i>
                        </div>
                        
                        <!-- CTA Content -->
                        <h5 class="text-xl font-bold text-white mb-3">{{ $cta['title'] }}</h5>
                        <p class="text-slate-300 mb-2">{{ $cta['desc'] }}</p>
                        <p class="text-sm text-indigo-300 font-medium mb-6">{{ $cta['urgency'] }}</p>
                        
                        <!-- CTA Button -->
                        <a href="{{ $cta['link'] }}" class="inline-block w-full py-3 px-6 font-semibold tracking-wide text-center transition-all duration-300 rounded-xl
                            {{ $cta['primary'] ? 'bg-white text-indigo-600 hover:bg-indigo-50 shadow-lg hover:shadow-xl' : 'bg-transparent border-2 border-white/50 text-white hover:bg-white hover:text-indigo-600' }}">
                            {{ $cta['title'] }}
                        </a>
                        
                        @if($cta['primary'])
                            <!-- Pulse effect for primary CTA -->
                            <div class="absolute -inset-1 bg-white/20 rounded-2xl blur opacity-75 group-hover:opacity-100 transition-opacity duration-300 -z-10"></div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Trust Elements -->
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="1s">
            <div class="flex flex-wrap justify-center items-center gap-8 text-white/70">
                <div class="flex items-center">
                    <i class="uil uil-shield-check text-green-400 text-xl me-2"></i>
                    <span class="text-sm">TRA Compliant</span>
                </div>
                <div class="flex items-center">
                    <i class="uil uil-clock text-blue-400 text-xl me-2"></i>
                    <span class="text-sm">Setup in 24 Hours</span>
                </div>
                <div class="flex items-center">
                    <i class="uil uil-headphones-alt text-purple-400 text-xl me-2"></i>
                    <span class="text-sm">24/7 UAE Support</span>
                </div>
                <div class="flex items-center">
                    <i class="uil uil-award text-yellow-400 text-xl me-2"></i>
                    <span class="text-sm">Money-back Guarantee</span>
                </div>
            </div>
        </div>
    </div>
</section>