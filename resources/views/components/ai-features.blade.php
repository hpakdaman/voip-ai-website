<!-- 6. Advanced AI Features Carousel -->
<section class="relative md:py-24 py-16 bg-gradient-to-r from-slate-900 to-indigo-900 dark:from-slate-900 dark:to-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-300 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Cutting-Edge Technology</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Advanced AI Features</h2>
            <p class="text-slate-300 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Powered by the latest AI innovations designed specifically for UAE market needs</p>
        </div>

        @php
        $aiFeatures = [
            [
                'icon' => 'uil uil-microphone',
                'title' => 'Neural Voice Recognition',
                'desc' => "Deep learning algorithms trained specifically for Gulf Arabic accents and dialects, delivering superior accuracy in voice transcription and understanding.",
            ],
            [
                'icon' => 'uil uil-brain',
                'title' => 'Predictive Analytics Dashboard',
                'desc' => "AI-powered forecasting for call volumes, customer behavior patterns, and optimal staffing with UAE market-specific insights.",
            ],
            [
                'icon' => 'uil uil-heart-alt',
                'title' => 'Emotion AI Detection',
                'desc' => "Real-time customer mood tracking and sentiment analysis to automatically flag escalations and improve satisfaction rates.",
            ],
            [
                'icon' => 'uil uil-shield-exclamation',
                'title' => 'Automated Compliance Auditing',
                'desc' => "Continuous scanning of interactions for TRA and GDPR compliance, generating instant reports and ensuring audit readiness.",
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($aiFeatures as $index => $item)
                <div class="relative p-8 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <!-- AI Feature Icon with Gradient -->
                    <i class="{{ $item['icon'] }} text-6xl bg-gradient-to-tl from-indigo-400 to-blue-400 text-transparent bg-clip-text mb-6"></i>
                    
                    <!-- Feature Content -->
                    <div class="content">
                        <h5 class="text-2xl font-semibold text-white mb-5">{{ $item['title'] }}</h5>
                        <p class="text-slate-300 mb-6">{{ $item['desc'] }}</p>
                        
                        <!-- Feature CTA -->
                        <div class="mt-6">
                            <a href="#demo" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-400 hover:text-indigo-300 after:bg-indigo-400 duration-500 ease-in-out">See in Action <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Background Icon -->
                    <i class="{{ $item['icon'] }} absolute bottom-0 end-0 -z-1 opacity-5 text-9xl text-white"></i>
                    
                    <!-- Connection Line (for flow indication) -->
                    @if($index < 3)
                        <span class="uil uil-angle-right text-2xl bg-indigo-500 text-white rounded-full size-8 flex justify-center items-center absolute md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1"></span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>