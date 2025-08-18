<!-- 7. Success Metrics & Proof -->
<section class="relative py-24 bg-gradient-to-r from-indigo-700 via-purple-700 to-blue-700">
    <div class="absolute inset-0 bg-slate-900/90"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-300 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Proven Results</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Backed by UAE Performance Data</h2>
            <p class="text-slate-300 max-w-2xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">These aren't theoretical numbers - they're real performance metrics from over 500 UAE businesses who chose our AI VoIP platform over global competitors. While RingCentral delivers 99.5% uptime, we guarantee 99.9%. Where Dialpad offers basic AI features, we provide advanced emotion detection and Arabic language mastery. Our clients consistently outperform industry benchmarks, achieving faster resolution times, higher customer satisfaction scores, and significant cost savings. Every metric represents a real business transformation in the UAE market.</p>
        </div>

        @php
        $metrics = [
            [
                'title' => 'UAE Clients Served',
                'target' => '500',
                'price' => '50',
                'symbol' => '+',
            ],
            [
                'title' => 'Average Cost Savings',
                'target' => '70',
                'price' => '10',
                'symbol' => '%',
            ],
            [
                'title' => 'Uptime Guarantee',
                'target' => '99.9',
                'price' => '95.0',
                'symbol' => '%',
            ],
            [
                'title' => 'Response Time',
                'target' => '0.3',
                'price' => '2.0',
                'symbol' => 's',
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($metrics as $index => $item)
                <div class="counter-box relative text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <!-- Large Background Number -->
                    <h3 class="font-extrabold lg:text-[72px] text-[50px] text-white opacity-20 mb-4">
                        <span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['price'] }}</span>{{ $item['symbol'] }}
                    </h3>
                    <!-- Overlay Title -->
                    <div class="absolute top-2/4 start-0 end-0 -translate-y-2/4">
                        <h4 class="font-bold text-2xl lg:text-3xl text-indigo-300 mb-2">
                            <span class="counter-value" data-target="{{ $item['target'] }}">{{ $item['price'] }}</span>{{ $item['symbol'] }}
                        </h4>
                        <span class="text-white font-medium text-lg">{{ $item['title'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Trust Badges -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-16 gap-[30px] wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
            <div class="text-center">
                <i class="uil uil-shield-check text-4xl text-green-400 mb-3"></i>
                <h6 class="text-white font-medium">TRA Certified</h6>
                <p class="text-slate-300 text-sm">UAE Compliant</p>
            </div>
            <div class="text-center">
                <i class="uil uil-award text-4xl text-yellow-400 mb-3"></i>
                <h6 class="text-white font-medium">ISO 27001</h6>
                <p class="text-slate-300 text-sm">Security Standard</p>
            </div>
            <div class="text-center">
                <i class="uil uil-server text-4xl text-blue-400 mb-3"></i>
                <h6 class="text-white font-medium">99.9% SLA</h6>
                <p class="text-slate-300 text-sm">Guaranteed Uptime</p>
            </div>
            <div class="text-center">
                <i class="uil uil-headphones-alt text-4xl text-indigo-400 mb-3"></i>
                <h6 class="text-white font-medium">24/7 Support</h6>
                <p class="text-slate-300 text-sm">UAE Time Zone</p>
            </div>
        </div>
    </div>
</section>