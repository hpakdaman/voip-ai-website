<!-- 3. Core Benefits Spotlight -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" style="color: var(--voip-link);" data-wow-delay=".1s">Powerful Results</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Transform Your Business Communications</h2>
            <p class="text-slate-400 max-w-2xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Experience measurable improvements that matter to your bottom line. Our AI-powered VoIP solution has helped UAE businesses achieve remarkable results: 50% faster query resolution, 70% reduction in operational costs, unified multi-channel communication, and enterprise-grade security with zero downtime. These aren't just numbers - they represent real transformation for Dubai's most innovative companies.</p>
        </div>

        @php
        $coreBenefits = [
            [
                'icon' => 'send',
                'title' => '50% Faster Resolutions',
                'desc' => "AI-optimized processing handles queries instantly, reducing handle times and boosting customer satisfaction in Dubai's service-driven economy.",
            ],
            [
                'icon' => 'layers',
                'title' => 'Multi-Channel Unified',
                'desc' => "Converge voice, chat, and SMS into one AI-managed platform, ensuring consistent experiences without communication silos.",
            ],
            [
                'icon' => 'dollar-sign',
                'title' => '70% Cost Reduction',
                'desc' => "Eliminate hardware costs and reduce staffing needs with predictive automation, delivering direct value in dirhams for Dubai SMBs.",
            ],
            [
                'icon' => 'shield',
                'title' => 'Zero-Downtime Security',
                'desc' => "Enterprise-grade redundant infrastructure with end-to-end encryption and AI threat detection, exceeding industry standards.",
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($coreBenefits as $index => $item)
                <div class="premium-card px-6 py-10 shadow-sm hover:shadow-lg dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-gray-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <i data-feather="{{ $item['icon'] }}" class="size-12 stroke-1 mb-6" style="color: var(--voip-primary);"></i>
                    <div class="content">
                        <h5 class="text-xl font-semibold hover:text-indigo-600 mb-4">{{ $item['title'] }}</h5>
                        <p class="text-slate-400">{{ $item['desc'] }}</p>
                        <div class="mt-5">
                            <a href="#features" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>