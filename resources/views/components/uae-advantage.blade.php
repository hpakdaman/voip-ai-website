<!-- 2. UAE Advantage Spotlight -->
<section class="relative md:py-24 py-16" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #162f3a, #0c1b27); opacity: 0.8;"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" style="color: var(--voip-link);" data-wow-delay=".1s">UAE Market Leader</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Your UAE Advantage</h2>
            <p class="text-slate-300 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Built specifically for UAE businesses with local compliance and cultural understanding</p>
        </div>

        @php
        $uaeAdvantages = [
            [
                'icon' => 'uil uil-shield-check',
                'title' => 'TRA-Compliant Operations',
                'desc' => "Fully aligned with UAE Telecommunications Regulatory Authority standards, ensuring secure and legal communications without hurdles.",
            ],
            [
                'icon' => 'uil uil-server-network',
                'title' => 'MENA Data Centers',
                'desc' => "Strategically placed servers in the region minimize delays, outperforming global competitors in UAE connectivity.",
            ],
            [
                'icon' => 'uil uil-comments-alt',
                'title' => 'Arabic Dialect Recognition',
                'desc' => "AI tuned for Gulf Arabic accents and cultural nuances, delivering authentic multilingual interactions.",
            ],
            [
                'icon' => 'uil uil-building',
                'title' => 'UAE Sector Expertise',
                'desc' => "Customized features for high-volume industries like tourism, oil/gas, and government services in Dubai and Abu Dhabi.",
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px] items-stretch">
            @foreach ($uaeAdvantages as $index => $item)
                <div class="border border-dashed border-white/30 rounded-xl p-8 text-center duration-500 premium-card uae-card h-full flex flex-col wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <i class="{{ $item['icon'] }} text-5xl mb-6" style="color: var(--voip-link);"></i>
                    <div class="content flex-1 flex flex-col justify-center">
                        <h5 class="text-xl font-semibold text-white mb-4">{{ $item['title'] }}</h5>
                        <p class="text-slate-300">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>