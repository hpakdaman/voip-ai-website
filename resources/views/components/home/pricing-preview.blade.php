<!-- 10. Pricing Sneak Peek -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Transparent Pricing</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Flexible Plans for UAE Scale</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Clear, honest pricing in AED - no hidden fees, unlike our competitors</p>
            
            <!-- Currency Toggle -->
            <div class="flex items-center justify-center mt-6 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                <span class="text-slate-600 dark:text-slate-300 me-3">USD</span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer" id="currencyToggle">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 dark:peer-focus:ring-indigo-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600"></div>
                </label>
                <span class="text-slate-600 dark:text-slate-300 ms-3">AED</span>
            </div>
        </div>

        @php
        $plans = [
            [
                'name' => 'Startup',
                'desc' => 'Perfect for small UAE businesses',
                'price_usd' => 10,
                'price_aed' => 36,
                'period' => 'user/month',
                'popular' => false,
                'features' => [
                    'Up to 10 concurrent calls',
                    'Basic AI routing',
                    'Arabic language support',
                    'TRA compliance',
                    'Email support',
                    '99.5% uptime SLA'
                ]
            ],
            [
                'name' => 'Professional',
                'desc' => 'Ideal for growing UAE enterprises',
                'price_usd' => 25,
                'price_aed' => 92,
                'period' => 'user/month',
                'popular' => true,
                'features' => [
                    'Unlimited concurrent calls',
                    'Advanced AI features',
                    'Emotion detection',
                    'Analytics dashboard',
                    '24/7 UAE support',
                    '99.9% uptime SLA',
                    'Custom integrations'
                ]
            ],
            [
                'name' => 'Enterprise',
                'desc' => 'Complete solution for large organizations',
                'price_usd' => 50,
                'price_aed' => 183,
                'period' => 'user/month',
                'popular' => false,
                'features' => [
                    'Everything in Professional',
                    'Dedicated account manager',
                    'Custom compliance reporting',
                    'Priority UAE data centers',
                    'Advanced security features',
                    'White-label options',
                    'On-premise deployment'
                ]
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($plans as $index => $plan)
                <div class="relative {{ $plan['popular'] ? 'border-2 border-indigo-600 shadow-xl' : 'border border-gray-200 dark:border-gray-700' }} rounded-2xl p-8 bg-white dark:bg-slate-800 hover:shadow-lg transition-all duration-500 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    @if($plan['popular'])
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-indigo-600 text-white px-4 py-1 rounded-full text-sm font-medium">Most Popular</span>
                        </div>
                    @endif
                    
                    <!-- Plan Header -->
                    <div class="text-center mb-8">
                        <h4 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">{{ $plan['name'] }}</h4>
                        <p class="text-slate-500 dark:text-slate-400">{{ $plan['desc'] }}</p>
                        
                        <!-- Price Display -->
                        <div class="mt-6">
                            <div class="price-container">
                                <span class="usd-price text-5xl font-bold text-indigo-600">${{ $plan['price_usd'] }}</span>
                                <span class="aed-price text-5xl font-bold text-indigo-600 hidden">{{ $plan['price_aed'] }} AED</span>
                            </div>
                            <span class="text-slate-500 dark:text-slate-400">{{ $plan['period'] }}</span>
                        </div>
                    </div>
                    
                    <!-- Features List -->
                    <ul class="space-y-4 mb-8">
                        @foreach ($plan['features'] as $feature)
                            <li class="flex items-start">
                                <i class="uil uil-check-circle text-green-600 text-xl me-3 mt-0.5"></i>
                                <span class="text-slate-600 dark:text-slate-300">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                    
                    <!-- CTA Button -->
                    <div class="text-center">
                        <a href="#trial" class="w-full py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center {{ $plan['popular'] ? 'bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white' : 'bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white' }} rounded-lg">
                            Start {{ $plan['name'] }} Plan
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Enterprise Contact -->
        <div class="text-center mt-12 wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
            <p class="text-slate-600 dark:text-slate-300 mb-4">Need a custom solution for your UAE business?</p>
            <a href="#contact" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-slate-50 hover:bg-slate-100 border-slate-200 hover:border-slate-300 text-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700 dark:border-slate-700 dark:text-slate-200 rounded-lg">Contact Sales Team</a>
        </div>
    </div>
</section>