@extends('layouts.main')

@section('title', 'About Us | Leading VoIP AI Innovation in the UAE & Middle East')

@section('content')

@include('includes.navbar')

<!-- Start Hero -->
<section class="relative table w-full py-36 lg:py-44 bg-gradient-to-br from-indigo-600/10 via-blue-50 to-amber-50/30 dark:from-slate-800 dark:via-slate-800 dark:to-slate-800">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/5 to-blue-600/5"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Our Story</h6>
            <h1 class="mb-6 md:text-5xl text-4xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Pioneering <span class="bg-gradient-to-r from-indigo-600 to-blue-600 text-transparent bg-clip-text">AI-Powered</span> Communications</h1>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Born in the heart of Dubai's tech ecosystem, we're revolutionizing business communications across the Middle East with cutting-edge AI technology that understands local culture, language, and business needs.</p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-6">
                <div class="lg:me-8">
                    <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">Our Mission</h6>
                    <h2 class="mb-4 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">Transforming Business Communications in the UAE</h2>
                    <p class="text-slate-400 max-w-2xl mb-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">We believe that every business deserves intelligent communication solutions that not only meet today's demands but anticipate tomorrow's opportunities. Our AI-powered VoIP platform is designed specifically for the UAE market, incorporating Arabic language processing, local compliance requirements, and cultural understanding that makes communication truly seamless.</p>
                    
                    <p class="text-slate-400 max-w-2xl mb-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".7s">From startups in Dubai's Silicon Oasis to enterprises in Abu Dhabi's business districts, we're empowering organizations to communicate smarter, faster, and more efficiently than ever before.</p>

                    <div class="mt-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".9s">
                        <a href="{{ url('/contact-us') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-lg shadow-lg hover:shadow-xl">Join Our Journey</a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6">
                <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                    <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" alt="Our Mission" class="mx-auto">
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-r from-indigo-500/20 to-blue-500/20 rounded-full blur-xl opacity-60 floating-element"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full blur-xl opacity-60 floating-element"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="relative md:py-24 py-16 bg-slate-900 dark:bg-slate-900">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 to-slate-800"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-400 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Founded in Dubai</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Our Journey</h2>
            <p class="text-slate-300 max-w-2xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">From a small team of passionate engineers to becoming the UAE's trusted VoIP AI partner</p>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @php
            $milestones = [
                [
                    'year' => '2019',
                    'title' => 'Founded in Dubai',
                    'desc' => 'Started with a vision to revolutionize Middle East communications using AI technology.',
                    'icon' => 'uil uil-rocket',
                    'delay' => '.2s'
                ],
                [
                    'year' => '2021',
                    'title' => 'TRA Certification',
                    'desc' => 'Achieved full compliance with UAE Telecommunications Regulatory Authority standards.',
                    'icon' => 'uil uil-shield-check',
                    'delay' => '.4s'
                ],
                [
                    'year' => '2023',
                    'title' => 'Arabic AI Launch',
                    'desc' => 'Launched advanced Arabic language processing capabilities for Gulf markets.',
                    'icon' => 'uil uil-comments-alt',
                    'delay' => '.6s'
                ],
                [
                    'year' => '2024',
                    'title' => 'Regional Expansion',
                    'desc' => 'Expanded across GCC countries, serving 500+ businesses with AI-powered communications.',
                    'icon' => 'uil uil-globe',
                    'delay' => '.8s'
                ]
            ];
            @endphp

            @foreach ($milestones as $milestone)
                <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ $milestone['delay'] }}">
                    <div class="relative mb-6">
                        <div class="size-16 bg-indigo-600/10 text-indigo-400 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <i class="{{ $milestone['icon'] }} text-2xl"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 bg-indigo-600 text-white text-xs font-bold px-2 py-1 rounded-full">{{ $milestone['year'] }}</div>
                    </div>
                    <h5 class="text-xl font-semibold text-white mb-3">{{ $milestone['title'] }}</h5>
                    <p class="text-slate-300">{{ $milestone['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Our Values</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">What Drives Us Forward</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">The principles that guide every decision we make and every solution we create</p>
        </div>

        @php
        $values = [
            [
                'icon' => 'uil uil-brain',
                'title' => 'Innovation First',
                'desc' => 'We push the boundaries of AI technology to create solutions that don\'t just meet current needs but anticipate future opportunities.',
            ],
            [
                'icon' => 'uil uil-users-alt',
                'title' => 'Customer-Centric',
                'desc' => 'Every feature we build starts with understanding our customers\' challenges and designing solutions that truly make their lives easier.',
            ],
            [
                'icon' => 'uil uil-shield',
                'title' => 'Trust & Security',
                'desc' => 'We maintain the highest standards of data protection and regulatory compliance because trust is the foundation of communication.',
            ],
            [
                'icon' => 'uil uil-heart',
                'title' => 'Cultural Understanding',
                'desc' => 'We embrace the rich diversity of the Middle East, ensuring our technology respects and celebrates cultural nuances.',
            ],
            [
                'icon' => 'uil uil-chart-growth',
                'title' => 'Scalable Excellence',
                'desc' => 'We build solutions that grow with our customers, from startup to enterprise, maintaining quality at every scale.',
            ],
            [
                'icon' => 'uil uil-award',
                'title' => 'Continuous Learning',
                'desc' => 'Our AI gets smarter every day, and so do we. We\'re committed to constant improvement and evolution.',
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($values as $index => $value)
                <div class="premium-card px-6 py-8 shadow-sm hover:shadow-lg dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-gray-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900 text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.1) }}s">
                    <i class="{{ $value['icon'] }} text-4xl text-indigo-600 mb-6"></i>
                    <h5 class="text-xl font-semibold hover:text-indigo-600 mb-4">{{ $value['title'] }}</h5>
                    <p class="text-slate-400">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team & Leadership -->
<section class="relative md:py-24 py-16 bg-gradient-to-r from-indigo-600/5 to-blue-600/5 dark:from-slate-800 dark:to-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Our Team</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Meet the Innovators</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">A diverse team of AI experts, engineers, and business professionals passionate about transforming communications</p>
        </div>

        @php
        $teamStats = [
            [
                'number' => '50+',
                'label' => 'Team Members',
                'desc' => 'Across 12 countries',
                'icon' => 'users'
            ],
            [
                'number' => '15+',
                'label' => 'AI Engineers',
                'desc' => 'Machine learning experts',
                'icon' => 'cpu'
            ],
            [
                'number' => '8+',
                'label' => 'Years Experience',
                'desc' => 'Average team experience',
                'icon' => 'award'
            ],
            [
                'number' => '24/7',
                'label' => 'Support Coverage',
                'desc' => 'Always here for you',
                'icon' => 'headphones'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($teamStats as $index => $stat)
                <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <div class="counter-container relative mb-4">
                        <div class="counter-bg"></div>
                        <i data-feather="{{ $stat['icon'] }}" class="size-12 text-indigo-600 mx-auto mb-4 relative z-2"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">{{ $stat['number'] }}</h3>
                    <h6 class="font-semibold text-slate-900 dark:text-white mb-2">{{ $stat['label'] }}</h6>
                    <p class="text-slate-400 text-sm">{{ $stat['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Recognition & Achievements -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Recognition</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Industry Recognition</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Proud to be recognized by leading industry bodies and our valued customers</p>
        </div>

        @php
        $achievements = [
            [
                'title' => 'TRA Certified Provider',
                'org' => 'UAE Telecommunications Regulatory Authority',
                'year' => '2021',
                'icon' => 'shield-check'
            ],
            [
                'title' => 'Best VoIP Innovation',
                'org' => 'Middle East Telecom Awards',
                'year' => '2023',
                'icon' => 'award'
            ],
            [
                'title' => 'ISO 27001 Certified',
                'org' => 'International Security Standards',
                'year' => '2022',
                'icon' => 'lock'
            ],
            [
                'title' => '99.9% Customer Satisfaction',
                'org' => 'Based on 500+ customer reviews',
                'year' => '2024',
                'icon' => 'star'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($achievements as $index => $achievement)
                <div class="text-center p-6 rounded-xl bg-gray-50 dark:bg-slate-800 hover:shadow-lg transition-all duration-300 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <i data-feather="{{ $achievement['icon'] }}" class="size-12 text-indigo-600 mx-auto mb-4"></i>
                    <h6 class="font-semibold text-slate-900 dark:text-white mb-2">{{ $achievement['title'] }}</h6>
                    <p class="text-slate-400 text-sm mb-2">{{ $achievement['org'] }}</p>
                    <span class="text-xs bg-indigo-600/10 text-indigo-600 px-2 py-1 rounded-full">{{ $achievement['year'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Future Vision -->
<section class="relative md:py-24 py-16 bg-slate-900 dark:bg-slate-900">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-900 to-slate-800"></div>
    <div class="container relative z-1">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-6">
                <div class="relative wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
                    <img src="{{ asset('assets/images/illustrator/Startup_SVG.svg') }}" alt="Future Vision" class="mx-auto">
                </div>
            </div>

            <div class="md:col-span-6">
                <div class="lg:ms-8">
                    <h6 class="text-indigo-400 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInRight" data-wow-delay=".1s">Looking Ahead</h6>
                    <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-white wow animate__animated animate__fadeInRight" data-wow-delay=".3s">The Future of Communication</h2>
                    <p class="text-slate-300 text-lg mb-6 wow animate__animated animate__fadeInRight" data-wow-delay=".5s">We're not just building VoIP solutions for today – we're creating the communication infrastructure for tomorrow. Our roadmap includes revolutionary features that will redefine how businesses connect, collaborate, and grow in the digital age.</p>
                    
                    <ul class="list-none text-slate-300 mb-8 wow animate__animated animate__fadeInRight" data-wow-delay=".7s">
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Advanced AI agents for customer service</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Real-time language translation during calls</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Predictive analytics for business insights</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Integration with emerging technologies like AR/VR</li>
                        <li class="mb-3 flex"><i class="uil uil-check text-green-400 text-xl me-3 mt-1"></i>Expansion across the entire MENA region</li>
                    </ul>

                    <div class="wow animate__animated animate__fadeInRight" data-wow-delay=".9s">
                        <a href="{{ url('/contact-us') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-lg shadow-lg hover:shadow-xl me-2">Be Part of the Future</a>
                        <a href="{{ url('/features') }}" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-transparent hover:bg-white border-white text-white hover:text-slate-900 rounded-lg">Explore Our Technology</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection