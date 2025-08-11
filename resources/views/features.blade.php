@extends('layouts.main')

@section('title', 'AI-Powered VoIP Features | Smart Communication Solutions for UAE Businesses')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-gradient-to-br from-indigo-600/10 via-blue-50 to-amber-50/30 dark:from-slate-800 dark:via-slate-800 dark:to-slate-800">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/5 to-blue-600/5"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Advanced Technology</h6>
            <h1 class="mb-6 md:text-5xl text-4xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">AI-Powered VoIP <span class="bg-gradient-to-r from-indigo-600 to-blue-600 text-transparent bg-clip-text">Features</span></h1>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Discover how our intelligent VoIP solutions transform business communications with cutting-edge AI technology designed specifically for UAE enterprises. From Arabic language processing to TRA compliance, every feature is built to excel in the Middle East market.</p>
        </div>
    </div>
</section>

<!-- Core AI Features Grid -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Core Capabilities</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Intelligent Communication Features</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Experience the next generation of business communications with AI-driven features that understand, adapt, and optimize</p>
        </div>

        @php
        $coreFeatures = [
            [
                'icon' => 'mic',
                'title' => 'Neural Voice Recognition',
                'desc' => 'Advanced speech-to-text with 99.5% accuracy in Arabic and English dialects',
                'data' => '.1s',
            ],
            [
                'icon' => 'message-circle',
                'title' => 'Natural Language Processing',
                'desc' => 'AI understands context and intent in multiple languages and cultural nuances',
                'data' => '.3s',
            ],
            [
                'icon' => 'zap',
                'title' => 'Real-time Analytics',
                'desc' => 'Instant insights on call performance, customer sentiment, and team efficiency',
                'data' => '.5s',
            ],
            [
                'icon' => 'shield',
                'title' => 'Enterprise Security',
                'desc' => 'End-to-end encryption with TRA compliance and zero-trust architecture',
                'data' => '.7s',
            ],
            [
                'icon' => 'cpu',
                'title' => 'Intelligent Routing',
                'desc' => 'AI-powered call distribution based on skills, availability, and priority',
                'data' => '.9s',
            ],
            [
                'icon' => 'globe',
                'title' => 'Global Connectivity',
                'desc' => 'Seamless international calling with optimized routes and competitive rates',
                'data' => '1.1s',
            ],
            [
                'icon' => 'bar-chart-2',
                'title' => 'Predictive Analytics',
                'desc' => 'Forecast call volumes, identify trends, and optimize resource allocation',
                'data' => '1.3s',
            ],
            [
                'icon' => 'headphones',
                'title' => '24/7 AI Assistance',
                'desc' => 'Round-the-clock intelligent support with human escalation when needed',
                'data' => '1.5s',
            ],
            [
                'icon' => 'smartphone',
                'title' => 'Omnichannel Integration',
                'desc' => 'Unified experience across voice, SMS, WhatsApp, and social channels',
                'data' => '1.7s',
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($coreFeatures as $item)
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ $item['data'] }}">
                    <div class="premium-card flex duration-500 hover:scale-105 shadow-sm dark:shadow-gray-800 hover:shadow-lg dark:hover:shadow-gray-700 ease-in-out p-6 rounded-xl bg-gray-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900">
                        <div class="flex items-center justify-center h-[50px] min-w-[50px] -rotate-45 bg-gradient-to-r from-indigo-600/20 to-blue-600/20 text-indigo-600 text-center rounded-full me-4">
                            <i data-feather="{{ $item['icon'] }}" class="size-6 rotate-45"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-2 text-lg font-semibold">{{ $item['title'] }}</h4>
                            <p class="text-slate-400 text-sm">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- UAE-Specific Features -->
<section class="relative md:py-24 py-16 bg-slate-900 dark:bg-slate-900">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 to-slate-800"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-400 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Built for UAE</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">UAE-Optimized Features</h2>
            <p class="text-slate-300 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Specialized capabilities designed for the unique requirements of UAE businesses and regulations</p>
        </div>

        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            <div class="border border-dashed border-white/30 rounded-xl p-8 hover:border-indigo-400/50 duration-500 wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
                <i class="uil uil-shield-check text-5xl text-indigo-400 mb-6"></i>
                <div class="content">
                    <h5 class="text-2xl font-semibold text-white mb-4">TRA Compliance Suite</h5>
                    <p class="text-slate-300 mb-4">Complete compliance with UAE Telecommunications Regulatory Authority requirements including data localization, security standards, and regulatory reporting.</p>
                    <ul class="list-none text-slate-300 space-y-2">
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Data residency in UAE</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Automatic compliance reporting</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Regular security audits</li>
                    </ul>
                </div>
            </div>

            <div class="border border-dashed border-white/30 rounded-xl p-8 hover:border-indigo-400/50 duration-500 wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                <i class="uil uil-comments-alt text-5xl text-indigo-400 mb-6"></i>
                <div class="content">
                    <h5 class="text-2xl font-semibold text-white mb-4">Arabic Language AI</h5>
                    <p class="text-slate-300 mb-4">Advanced natural language processing specifically trained for Gulf Arabic dialects, cultural context, and business terminology used in the UAE market.</p>
                    <ul class="list-none text-slate-300 space-y-2">
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Gulf Arabic recognition</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Cultural context awareness</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Bilingual conversation flow</li>
                    </ul>
                </div>
            </div>

            <div class="border border-dashed border-white/30 rounded-xl p-8 hover:border-indigo-400/50 duration-500 wow animate__animated animate__fadeInLeft" data-wow-delay=".7s">
                <i class="uil uil-server-network text-5xl text-indigo-400 mb-6"></i>
                <div class="content">
                    <h5 class="text-2xl font-semibold text-white mb-4">MENA Infrastructure</h5>
                    <p class="text-slate-300 mb-4">Strategically positioned data centers and network nodes across the Middle East ensure optimal performance and latency for UAE businesses.</p>
                    <ul class="list-none text-slate-300 space-y-2">
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>< 20ms latency in UAE</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>99.99% uptime guarantee</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Disaster recovery sites</li>
                    </ul>
                </div>
            </div>

            <div class="border border-dashed border-white/30 rounded-xl p-8 hover:border-indigo-400/50 duration-500 wow animate__animated animate__fadeInRight" data-wow-delay=".9s">
                <i class="uil uil-building text-5xl text-indigo-400 mb-6"></i>
                <div class="content">
                    <h5 class="text-2xl font-semibold text-white mb-4">Industry Customization</h5>
                    <p class="text-slate-300 mb-4">Pre-configured solutions for key UAE industries including healthcare, finance, tourism, and government services with sector-specific workflows.</p>
                    <ul class="list-none text-slate-300 space-y-2">
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Healthcare HIPAA templates</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Financial services compliance</li>
                        <li class="flex items-center"><i class="uil uil-check text-green-400 me-2"></i>Government workflow integration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advanced AI Capabilities -->
<section class="relative md:py-24 py-16 bg-gradient-to-r from-indigo-600/5 to-blue-600/5 dark:from-slate-800 dark:to-slate-900">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-6">
                <div class="lg:me-8">
                    <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">AI Innovation</h6>
                    <h3 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">Next-Generation AI Capabilities</h3>
                    <p class="text-slate-400 max-w-2xl mb-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">Our AI engine continuously learns and adapts to your business patterns, customer preferences, and communication styles. Experience intelligent automation that gets smarter over time while maintaining the human touch when needed.</p>

                    @php
                    $aiCapabilities = [
                        'Sentiment analysis in real-time conversations',
                        'Automatic call summarization and action items',
                        'Intelligent queue management and priority routing',
                        'Predictive customer behavior modeling',
                        'Dynamic pricing based on usage patterns',
                        'Automated compliance monitoring and reporting'
                    ];
                    @endphp

                    <ul class="list-none text-slate-400 mt-4 wow animate__animated animate__fadeInLeft" data-wow-delay=".7s">
                        @foreach ($aiCapabilities as $capability)
                            <li class="mb-3 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-3 mt-1"></i> <span>{{ $capability }}</span></li>
                        @endforeach
                    </ul>

                    <div class="mt-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".9s">
                        <a href="{{ url('/pricing') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full shadow-lg hover:shadow-xl">Explore Pricing Plans</a>
                        <a href="{{ url('/contact-us') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-full ms-2">Schedule Demo</a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6">
                <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                    <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" alt="AI Features Illustration" class="mx-auto">
                    <!-- Floating feature badges -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-r from-indigo-500/20 to-blue-500/20 rounded-full blur-xl opacity-60 floating-element"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full blur-xl opacity-60 floating-element"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Integration & Compatibility -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Seamless Integration</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Works With Your Existing Systems</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Integrate seamlessly with your current business tools and workflows without disruption</p>
        </div>

        @php
        $integrations = [
            [
                'category' => 'CRM Systems',
                'items' => ['Salesforce', 'HubSpot', 'Zoho CRM', 'Microsoft Dynamics', 'Pipedrive'],
                'icon' => 'users'
            ],
            [
                'category' => 'Business Tools',
                'items' => ['Microsoft Teams', 'Slack', 'Google Workspace', 'Office 365', 'Zoom'],
                'icon' => 'briefcase'
            ],
            [
                'category' => 'E-commerce',
                'items' => ['Shopify', 'WooCommerce', 'Magento', 'BigCommerce', 'OpenCart'],
                'icon' => 'shopping-cart'
            ],
            [
                'category' => 'Support Platforms',
                'items' => ['Zendesk', 'Freshdesk', 'Intercom', 'Help Scout', 'LiveChat'],
                'icon' => 'headphones'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($integrations as $index => $integration)
                <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <div class="size-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto mb-4">
                        <i data-feather="{{ $integration['icon'] }}" class="size-8"></i>
                    </div>
                    <div class="content">
                        <h5 class="text-xl font-semibold mb-3">{{ $integration['category'] }}</h5>
                        <ul class="list-none text-slate-400 space-y-1">
                            @foreach ($integration['items'] as $item)
                                <li class="text-sm">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- API Documentation CTA -->
        <div class="grid grid-cols-1 mt-16 text-center">
            <div class="bg-indigo-600/5 dark:bg-indigo-600/10 rounded-xl p-8 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                <h4 class="text-2xl font-semibold mb-4 text-slate-900 dark:text-white">Need Custom Integration?</h4>
                <p class="text-slate-400 mb-6 max-w-2xl mx-auto">Our comprehensive API and webhook system allows you to integrate with virtually any business system. Get detailed documentation and developer support.</p>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">API Documentation</a>
                    <a href="{{ url('/contact-us') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-indigo-600 border-indigo-600 text-indigo-600 hover:text-white rounded-full">Contact Developers</a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection