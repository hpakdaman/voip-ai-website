@extends('layouts.main')

@section('title', 'UAE VoIP Pricing | Transparent AI Communication Plans in AED & USD')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-gradient-to-br from-indigo-600/10 via-blue-50 to-amber-50/30 dark:from-slate-800 dark:via-slate-800 dark:to-slate-800">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/5 to-blue-600/5"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Transparent Pricing</h6>
            <h1 class="mb-6 md:text-5xl text-4xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Choose Your <span class="bg-gradient-to-r from-indigo-600 to-blue-600 text-transparent bg-clip-text">VoIP Plan</span></h1>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Flexible pricing plans designed specifically for UAE businesses. Scale seamlessly from startup to enterprise with our AI-powered VoIP solutions. All plans include Arabic language support, TRA compliance, and UAE-based servers.</p>
            
            <!-- Currency Toggle -->
            <div class="flex justify-center mt-8 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                <div class="currency-toggle relative inline-flex items-center bg-white dark:bg-slate-800 rounded-full p-1 shadow-lg">
                    <button id="currencyUSD" class="currency-btn active px-6 py-2 text-sm font-medium rounded-full transition-all duration-300 bg-indigo-600 text-white shadow-sm">USD</button>
                    <button id="currencyAED" class="currency-btn px-6 py-2 text-sm font-medium rounded-full transition-all duration-300 text-slate-600 dark:text-slate-300 hover:text-indigo-600">AED</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plans -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        @php
        $pricingPlans = [
            [
                'name' => 'Startup',
                'badge' => '',
                'priceUSD' => 39,
                'priceAED' => 149,
                'popular' => false,
                'description' => 'Perfect for small businesses and startups in Dubai',
                'features' => [
                    '5 Active Users',
                    '1000 Minutes/Month',
                    'Basic AI Features',
                    'Email Support',
                    'UAE Phone Numbers',
                    'Arabic Language Support',
                    'Basic Analytics',
                    'TRA Compliant'
                ],
                'delay' => '.3s'
            ],
            [
                'name' => 'Professional',
                'badge' => 'Most Popular',
                'priceUSD' => 89,
                'priceAED' => 329,
                'popular' => true,
                'description' => 'Ideal for growing UAE businesses',
                'features' => [
                    '25 Active Users',
                    '5000 Minutes/Month',
                    'Advanced AI Features',
                    'Priority Support',
                    'International Numbers',
                    'Omnichannel Integration',
                    'Advanced Analytics',
                    'Custom Integrations',
                    'Call Recording',
                    'Real-time Dashboard'
                ],
                'delay' => '.1s'
            ],
            [
                'name' => 'Enterprise',
                'badge' => 'Best Value',
                'priceUSD' => 199,
                'priceAED' => 739,
                'popular' => false,
                'description' => 'Comprehensive solution for large UAE enterprises',
                'features' => [
                    'Unlimited Users',
                    'Unlimited Minutes',
                    'Full AI Suite',
                    'Dedicated Support',
                    'Global Coverage',
                    'API Access',
                    'Custom Reporting',
                    'White-label Options',
                    'Advanced Security',
                    'SLA Guarantee',
                    'On-site Training',
                    'Custom Development'
                ],
                'delay' => '.5s'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($pricingPlans as $plan)
                <div class="pricing-card group relative {{ $plan['popular'] ? 'popular md:scale-110 z-10' : 'z-2' }} shadow-sm dark:shadow-gray-800 rounded-xl {{ $plan['popular'] ? 'bg-white dark:bg-slate-900 border-2 border-indigo-600' : 'bg-gray-50 dark:bg-slate-800' }} wow animate__animated animate__fadeInUp" data-wow-delay="{{ $plan['delay'] }}">
                    @if ($plan['badge'])
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="bg-indigo-600 text-white px-4 py-1 rounded-full text-sm font-medium shadow-lg">{{ $plan['badge'] }}</span>
                        </div>
                    @endif
                    
                    <div class="p-8">
                        <h6 class="font-bold uppercase mb-5 text-indigo-600 text-lg">{{ $plan['name'] }}</h6>

                        <div class="flex items-end mb-5">
                            <span class="text-2xl font-semibold currency-symbol">$</span>
                            <span class="price-usd text-5xl font-bold text-slate-900 dark:text-white" data-price="{{ $plan['priceUSD'] }}">{{ $plan['priceUSD'] }}</span>
                            <span class="price-aed hidden text-5xl font-bold text-slate-900 dark:text-white" data-price="{{ $plan['priceAED'] }}">{{ $plan['priceAED'] }}</span>
                            <span class="text-xl font-semibold text-slate-600 dark:text-slate-300 self-end mb-1">/mo</span>
                        </div>

                        <p class="text-slate-400 mb-6">{{ $plan['description'] }}</p>

                        <ul class="list-none text-slate-400 mb-8">
                            @foreach ($plan['features'] as $feature)
                                <li class="mb-3 flex items-start">
                                    <i class="uil uil-check-circle text-indigo-600 text-xl me-3 mt-0.5 flex-shrink-0"></i>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ url('/contact-us') }}" class="w-full py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center {{ $plan['popular'] ? 'bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white' : 'bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white' }} rounded-lg shadow-sm hover:shadow-lg">
                            {{ $plan['popular'] ? 'Start Free Trial' : 'Get Started' }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="grid grid-cols-1 mt-16 text-center">
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                <h4 class="text-2xl font-semibold mb-4 text-slate-900 dark:text-white">All Plans Include</h4>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mt-8">
                    @php
                    $includedFeatures = [
                        ['icon' => 'shield-check', 'title' => 'TRA Compliance', 'desc' => 'Full regulatory compliance'],
                        ['icon' => 'server', 'title' => 'UAE Servers', 'desc' => 'Low latency & data residency'],
                        ['icon' => 'clock', 'title' => '99.9% Uptime', 'desc' => 'Guaranteed availability'],
                        ['icon' => 'headphones', 'title' => '24/7 Support', 'desc' => 'Arabic & English support']
                    ];
                    @endphp
                    
                    @foreach ($includedFeatures as $feature)
                        <div class="text-center">
                            <i class="uil uil-{{ $feature['icon'] }} text-3xl text-indigo-600 mb-3"></i>
                            <h6 class="font-semibold text-slate-900 dark:text-white mb-2">{{ $feature['title'] }}</h6>
                            <p class="text-slate-400 text-sm">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Enterprise Solutions -->
<section class="relative md:py-24 py-16 bg-slate-900 dark:bg-slate-900">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 to-slate-800"></div>
    <div class="container relative z-1">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-7">
                <div class="me-6">
                    <h6 class="text-indigo-400 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">Enterprise Solutions</h6>
                    <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">Custom Solutions for Large UAE Organizations</h2>
                    <p class="text-slate-300 text-lg mb-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">Need something more specific? We create tailored VoIP solutions for government entities, large corporations, and multi-national companies operating in the UAE.</p>
                    
                    <ul class="list-none text-slate-300 mb-8 wow animate__animated animate__fadeInLeft" data-wow-delay=".7s">
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Custom pricing based on volume</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Dedicated UAE infrastructure</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>24/7 dedicated support team</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Custom integrations and development</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>On-site installation and training</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>SLA guarantees and penalties</li>
                    </ul>

                    <div class="wow animate__animated animate__fadeInLeft" data-wow-delay=".9s">
                        <a href="{{ url('/contact-us') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-lg shadow-lg hover:shadow-xl me-2">Request Custom Quote</a>
                        <a href="#" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white border-white text-white hover:text-slate-900 rounded-lg">Download Brochure</a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-5">
                <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                    <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" alt="Enterprise Solutions" class="mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Got Questions?</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Pricing FAQs</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Common questions about our UAE VoIP pricing and features</p>
        </div>

        @php
        $faqs = [
            [
                'question' => 'Are there any setup fees or hidden costs?',
                'answer' => 'No hidden costs! All pricing is transparent. Setup is completely free, and you only pay the monthly subscription. International calling rates are clearly listed in your dashboard.'
            ],
            [
                'question' => 'Can I switch between USD and AED billing?',
                'answer' => 'Yes, UAE businesses can choose their preferred billing currency. AED pricing includes all local taxes and is processed through UAE banks for easier accounting.'
            ],
            [
                'question' => 'What happens if I exceed my monthly minutes?',
                'answer' => 'Overage rates are very competitive. Local UAE calls are charged at AED 0.05/minute, and we\'ll notify you before you approach your limit with options to upgrade.'
            ],
            [
                'question' => 'Is there a free trial available?',
                'answer' => 'Yes! All plans come with a 30-day free trial. No credit card required for the trial. Experience the full platform with your team before committing.'
            ],
            [
                'question' => 'Do you offer discounts for annual payments?',
                'answer' => 'Absolutely! Pay annually and save 20% on all plans. Enterprise customers can negotiate custom terms for multi-year contracts with additional savings.'
            ],
            [
                'question' => 'Can I upgrade or downgrade my plan anytime?',
                'answer' => 'Yes, plan changes are instant. Upgrades take effect immediately, downgrades apply at your next billing cycle. No penalties for changing plans.'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($faqs as $index => $faq)
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.1) }}s">
                    <div class="bg-gray-50 dark:bg-slate-800 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <h5 class="font-semibold text-slate-900 dark:text-white mb-3">{{ $faq['question'] }}</h5>
                        <p class="text-slate-400">{{ $faq['answer'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Contact CTA -->
        <div class="grid grid-cols-1 mt-16 text-center">
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                <h4 class="text-2xl font-semibold mb-4 text-slate-900 dark:text-white">Still Have Questions?</h4>
                <p class="text-slate-400 mb-6">Our UAE-based sales team is ready to help you choose the perfect plan</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ url('/contact-us') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-lg">Contact Sales</a>
                    <a href="#" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-lg">Schedule Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

<!-- Currency Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const currencyBtns = document.querySelectorAll('.currency-btn');
    const currencySymbols = document.querySelectorAll('.currency-symbol');
    const pricesUSD = document.querySelectorAll('.price-usd');
    const pricesAED = document.querySelectorAll('.price-aed');
    
    currencyBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            currencyBtns.forEach(b => {
                b.classList.remove('active', 'bg-indigo-600', 'text-white', 'shadow-sm');
                b.classList.add('text-slate-600', 'dark:text-slate-300');
            });
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-indigo-600', 'text-white', 'shadow-sm');
            this.classList.remove('text-slate-600', 'dark:text-slate-300');
            
            const currency = this.id.replace('currency', '');
            
            // Update currency symbols and prices
            currencySymbols.forEach(symbol => {
                symbol.textContent = currency === 'USD' ? '$' : 'AED ';
            });
            
            if (currency === 'USD') {
                pricesUSD.forEach(price => price.classList.remove('hidden'));
                pricesAED.forEach(price => price.classList.add('hidden'));
            } else {
                pricesUSD.forEach(price => price.classList.add('hidden'));
                pricesAED.forEach(price => price.classList.remove('hidden'));
            }
        });
    });
});
</script>

@endsection