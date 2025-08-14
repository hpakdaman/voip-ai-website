@extends('layouts.main')

@section('title', 'AI-Powered VoIP Solutions for UAE Businesses | Dubai Call Center Technology')

@section('content')

@include('includes.navbar')

<!-- Animated Background Blurs -->
<span class="fixed blur-[200px] lg:size-[600px] size-[400px] rounded-full top-[10%] md:start-[10%] -start-[20%]" style="background-color: var(--voip-primary); opacity: 0.2;"></span>
<span class="fixed blur-[200px] lg:size-[600px] size-[400px] rounded-full bottom-[10%] md:end-[10%] -end-[20%]" style="background-color: var(--voip-link); opacity: 0.2;"></span>

<!-- Start Hero -->
<section class="relative table w-full lg:py-40 md:py-36 pt-36 pb-24 overflow-hidden" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0 bg-[url('../../assets/images/overlay.png')] bg-repeat opacity-10 dark:opacity-60"></div>
    <div class="container relative z-1">
        <div class="relative grid lg:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
            <div class="lg:col-span-7">
                <div class="lg:me-6 lg:text-start text-center">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mb-5 text-white">
                        Access powerful AI <br>For 
                        <span class="typewrite bg-gradient-to-tl to-indigo-600 from-red-600 text-transparent bg-clip-text"   data-period="2000" data-type='[ "VoIP Solutions", "Customer Service", "Business Growth" ]'> 
                            <span class="wrap"></span> 
                        </span>
                    </h1>

                    <p class="text-lg max-w-xl lg:ms-0 mx-auto text-slate-300">Transform your business communications with AI-powered VoIP solutions designed for the modern enterprise.</p>
                
                    <div class="subcribe-form mt-6 mb-3">
                        <form class="relative max-w-md mx-auto lg:ms-0">
                            <div class="relative">
                                <i class="uil uil-envelope text-xl absolute top-3 left-5 text-slate-400"></i>
                                <input type="email" id="aiemail" name="email" class="py-4 pe-40 ps-12 w-full h-[50px] outline-none text-white rounded-md shadow-sm" style="background-color: rgba(22, 47, 58, 0.6);" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center absolute top-[2px] end-[3px] h-[46px] text-white rounded-md hover-voip-button" style="background-color: var(--voip-primary);">Get Started</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative flex items-center justify-center">
                    <!-- Spinning circles - behind the image -->
                    <div class="absolute size-[36rem] border border-dashed rounded-full animate-[spin_120s_linear_infinite] -z-50 spinning-circle" style="border-color: rgba(30, 192, 141, 0.3);"></div>
                    <div class="absolute size-[48rem] border border-dashed rounded-full animate-[spin_240s_linear_infinite] -z-50 spinning-circle outer" style="border-color: rgba(29, 120, 97, 0.2);"></div>
                    
                    <!-- Gradient box background -->
                    <div class="absolute size-[36rem] blur-[200px] rounded-full dark:after:to-indigo-600/50 -z-50" style="background: linear-gradient(135deg, var(--voip-primary), var(--voip-link)); opacity: 0.3;"></div>
                    
                    <!-- Circular container with VoIP color background - perfectly centered -->
                    <div class="relative w-100 h-100 sm:w-80 sm:h-80 md:w-100 md:h-100 lg:w-[28rem] lg:h-[28rem] xl:w-[32rem] xl:h-[32rem] rounded-full overflow-hidden flex items-center justify-center flex-shrink-0" style="background-color: #122a34; aspect-ratio: 1/1;">
                        <img src="{{ asset('assets/images/personal/a-professional-middle-eastern-woman-without-a-head.png') }}" alt="Professional Customer Service Representative" class="w-[110%] h-[110%] object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- Business Partner -->
<section class="pt-6">
    <div class="container relative">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            <div class="mx-auto py-4">
                <img src="{{ asset('assets/images/client/amazon.svg') }}" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="{{ asset('assets/images/client/google.svg') }}" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="{{ asset('assets/images/client/lenovo.svg') }}" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="{{ asset('assets/images/client/paypal.svg') }}" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="{{ asset('assets/images/client/shopify.svg') }}" class="h-6" alt="">
            </div>
            
            <div class="mx-auto py-4">
                <img src="{{ asset('assets/images/client/spotify.svg') }}" class="h-6" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Business Partner -->

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

        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($uaeAdvantages as $index => $item)
                <div class="border border-dashed border-white/30 rounded-xl p-8 text-center hover:border-indigo-400/50 duration-500 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <i class="{{ $item['icon'] }} text-5xl text-indigo-400 mb-6"></i>
                    <div class="content">
                        <h5 class="text-xl font-semibold text-white mb-4">{{ $item['title'] }}</h5>
                        <p class="text-slate-300">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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

<!-- 4. Intelligent Workflow Demo -->
<section id="demo" class="relative md:py-24 py-16 bg-gradient-to-r from-indigo-600/5 to-blue-600/5 dark:from-slate-800 dark:to-slate-900">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-6">
                <div class="lg:me-8">
                    <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">AI in Action</h6>
                    <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">See AI Handle UAE Calls in Real-Time</h3>
                    <p class="text-slate-400 max-w-2xl mb-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">Experience the power of AI in action through our live demonstration. Watch as our advanced system processes incoming calls in real-time, accurately detecting customer intent through natural language processing, intelligently routing conversations to the most suitable agents or automated responses, and generating comprehensive analytics insights. Our system excels at understanding Gulf Arabic dialects and cultural nuances, ensuring authentic and effective communication with your UAE customers. This isn't just a demo - it's a preview of how your business communications will transform.</p>

                    <ul class="list-none text-slate-400 mt-4 wow animate__animated animate__fadeInLeft" data-wow-delay=".7s">
                        <li class="mb-3 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-3 mt-1"></i> <span>Real-time natural language processing</span></li>
                        <li class="mb-3 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-3 mt-1"></i> <span>Intelligent call routing and escalation</span></li>
                        <li class="mb-3 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-3 mt-1"></i> <span>Instant analytics and insights generation</span></li>
                        <li class="mb-3 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-3 mt-1"></i> <span>Arabic and English language support</span></li>
                    </ul>

                    <div class="mt-6 wow animate__animated animate__fadeInLeft" data-wow-delay=".9s">
                        <a href="#trial" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/10 hover:bg-indigo-600 border-indigo-600/20 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Try Interactive Demo</a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6">
                <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                    <!-- Demo Interface Mockup -->
                    <div class="demo-interface bg-white dark:bg-slate-800 rounded-xl shadow-2xl p-6 border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <div class="mx-auto text-sm font-medium text-slate-600 dark:text-slate-300">AI VoIP Dashboard</div>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Incoming Call Simulation -->
                            <div class="demo-step bg-blue-50 dark:bg-slate-700 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse me-2"></div>
                                    <span class="text-sm font-medium text-blue-700 dark:text-blue-300">Incoming Call</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-300">"مرحبا، أريد معلومات عن خدماتكم"</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Detected: Arabic - Service Inquiry</p>
                            </div>
                            
                            <!-- AI Processing -->
                            <div class="demo-step bg-indigo-50 dark:bg-slate-700 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse me-2"></div>
                                    <span class="text-sm font-medium text-indigo-700 dark:text-indigo-300">AI Processing</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-300">Intent: Service Information Request</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300">Language: Arabic (Gulf Dialect)</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300">Routing to: Arabic Sales Agent</p>
                            </div>
                            
                            <!-- Response Generated -->
                            <div class="demo-step bg-green-50 dark:bg-slate-700 p-4 rounded-lg">
                                <div class="flex items-center mb-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full me-2"></div>
                                    <span class="text-sm font-medium text-green-700 dark:text-green-300">Response Generated</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-300">"أهلاً وسهلاً! يسعدني مساعدتك..."</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Confidence: 98% | Response Time: 0.3s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Industry Impact Grid -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Industry Solutions</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">AI VoIP Tailored for UAE's Diverse Economy</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Empowering every sector with intelligent communication solutions designed for UAE business needs</p>
        </div>

        @php
        $industries = [
            [
                'icon' => 'uil uil-heart-medical',
                'title' => 'Healthcare',
                'desc' => "HIPAA-secure consultations with multilingual AI support for Dubai's medical tourism sector.",
                'impact' => '80% engagement boost',
                'link' => '/healthcare'
            ],
            [
                'icon' => 'uil uil-shopping-cart',
                'title' => 'E-Commerce',
                'desc' => "Multi-channel customer support integrating with local payment gateways and delivery services.",
                'impact' => '40% churn reduction',
                'link' => '/ecommerce'
            ],
            [
                'icon' => 'uil uil-landmark',
                'title' => 'Government',
                'desc' => "TRA-compliant citizen services with Arabic language prioritization and secure data handling.",
                'impact' => '60% efficiency gain',
                'link' => '/government'
            ],
            [
                'icon' => 'uil uil-wind',
                'title' => 'Oil & Gas',
                'desc' => "Real-time field communications with emergency protocols for UAE's energy sector operations.",
                'impact' => '50% faster response',
                'link' => '/oil-gas'
            ],
            [
                'icon' => 'uil uil-plane-departure',
                'title' => 'Tourism',
                'desc' => "Multilingual booking systems handling Dubai's diverse international visitor communications.",
                'impact' => '70% booking increase',
                'link' => '/tourism'
            ],
            [
                'icon' => 'uil uil-university',
                'title' => 'Finance',
                'desc' => "Secure banking communications with fraud detection and compliance reporting for UAE regulations.",
                'impact' => '90% accuracy rate',
                'link' => '/finance'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($industries as $index => $item)
                <div class="group relative px-6 py-10 shadow-sm hover:shadow-lg dark:shadow-gray-800 dark:hover:shadow-gray-700 duration-500 rounded-2xl bg-white dark:bg-slate-900 hover:bg-indigo-50 dark:hover:bg-slate-800 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.1) }}s">
                    <!-- Industry Icon -->
                    <i class="industry-icon {{ $item['icon'] }} text-4xl text-indigo-600 mb-6 group-hover:text-indigo-700 transition-colors duration-300"></i>
                    
                    <!-- Industry Content -->
                    <div class="content">
                        <h5 class="text-xl font-semibold group-hover:text-indigo-600 mb-4">{{ $item['title'] }}</h5>
                        <p class="text-slate-400 mb-4">{{ $item['desc'] }}</p>
                        
                        <!-- Impact Metric -->
                        <div class="bg-indigo-50 dark:bg-slate-700 px-3 py-2 rounded-lg mb-4">
                            <span class="text-sm font-medium text-indigo-700 dark:text-indigo-300">{{ $item['impact'] }}</span>
                        </div>
                        
                        <!-- Learn More Link -->
                        <div class="mt-5">
                            <a href="{{ $item['link'] }}" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Explore Solution <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Hover Effect Background -->
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-indigo-600/5 to-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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

<!-- 8. Client Voices Carousel -->
<section class="relative md:py-24 py-16 bg-white dark:bg-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Customer Success</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">What UAE Businesses Say</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Authentic stories from UAE enterprises who transformed their communications with our AI VoIP solutions</p>
        </div>

        @php
        $testimonials = [
            [
                'quote' => "This AI VoIP platform transformed our Dubai call center operations overnight. We've seen a 65% reduction in costs while customer satisfaction scores improved dramatically.",
                'author' => 'Ahmed Al-Mahmoud',
                'position' => 'Operations Director',
                'company' => 'UAE Retail Leader',
                'rating' => 5,
                'image' => 'client-01.jpg'
            ],
            [
                'quote' => "The Arabic language support is exceptional. Our customers feel more comfortable, and our agents can handle twice as many inquiries with the AI assistance.",
                'author' => 'Fatima Hassan',
                'position' => 'Customer Service Manager',
                'company' => 'Dubai Healthcare Group',
                'rating' => 5,
                'image' => 'client-02.jpg'
            ],
            [
                'quote' => "Predictive routing saved us hours in compliance-heavy operations. The TRA compliance features give us peace of mind for all government interactions.",
                'author' => 'Mohammad Al-Rashid',
                'position' => 'IT Director',
                'company' => 'Abu Dhabi Financial Services',
                'rating' => 5,
                'image' => 'client-03.jpg'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-3 md:grid-cols-1 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($testimonials as $index => $testimonial)
                <div class="p-8 bg-gray-50 dark:bg-slate-800 rounded-xl shadow-sm hover:shadow-lg duration-500 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <!-- Star Rating -->
                    <div class="flex mb-4">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="uil uil-star {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }} text-lg"></i>
                        @endfor
                    </div>
                    
                    <!-- Quote -->
                    <p class="text-slate-600 dark:text-slate-300 italic mb-6">"{{ $testimonial['quote'] }}"</p>
                    
                    <!-- Author Info -->
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center">
                                <span class="text-indigo-600 dark:text-indigo-400 font-semibold text-lg">{{ substr($testimonial['author'], 0, 1) }}</span>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h6 class="text-slate-900 dark:text-white font-semibold">{{ $testimonial['author'] }}</h6>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">{{ $testimonial['position'] }}</p>
                            <p class="text-indigo-600 dark:text-indigo-400 text-sm font-medium">{{ $testimonial['company'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12 wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
            <a href="#case-studies" class="py-3 px-6 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600/10 hover:bg-indigo-600 border-indigo-600/20 hover:border-indigo-600 text-indigo-600 hover:text-white rounded-full">Read More Success Stories</a>
        </div>
    </div>
</section>

<!-- 9. Seamless Integrations Hub -->
<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Connect Everything</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Seamless Integrations Hub</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Connect with 100+ global tools plus UAE-specific platforms for complete business integration</p>
        </div>

        @php
        $integrationCategories = [
            [
                'name' => 'CRM & Sales',
                'tools' => ['Salesforce', 'HubSpot', 'Pipedrive', 'Zoho'],
                'color' => 'blue'
            ],
            [
                'name' => 'UAE Local',
                'tools' => ['Bayut', 'Dubizzle', 'ADCB', 'Emirates NBD'],
                'color' => 'amber'
            ],
            [
                'name' => 'Communication',
                'tools' => ['Slack', 'Teams', 'WhatsApp', 'Telegram'],
                'color' => 'green'
            ],
            [
                'name' => 'Analytics',
                'tools' => ['Google Analytics', 'Mixpanel', 'Hotjar', 'Tableau'],
                'color' => 'purple'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($integrationCategories as $index => $category)
                <div class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-sm hover:shadow-lg duration-500 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <!-- Category Header -->
                    <div class="mb-6">
                        <div class="w-12 h-12 bg-{{ $category['color'] }}-100 dark:bg-{{ $category['color'] }}-900/50 rounded-lg flex items-center justify-center mb-4">
                            <i class="uil uil-apps text-2xl text-{{ $category['color'] }}-600"></i>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 dark:text-white">{{ $category['name'] }}</h5>
                    </div>
                    
                    <!-- Integration Tools -->
                    <div class="space-y-3">
                        @foreach ($category['tools'] as $tool)
                            <div class="flex items-center p-2 bg-gray-50 dark:bg-slate-700 rounded-lg hover:bg-{{ $category['color'] }}-50 dark:hover:bg-{{ $category['color'] }}-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-{{ $category['color'] }}-100 dark:bg-{{ $category['color'] }}-900/50 rounded-full flex items-center justify-center me-3">
                                    <span class="text-xs font-medium text-{{ $category['color'] }}-600">{{ substr($tool, 0, 1) }}</span>
                                </div>
                                <span class="text-sm text-slate-600 dark:text-slate-300">{{ $tool }}</span>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- View All Link -->
                    <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="#integrations" class="text-sm font-medium text-{{ $category['color'] }}-600 hover:text-{{ $category['color'] }}-700">View All +</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Popular Integrations Logos -->
        <div class="mt-16">
            <h4 class="text-center text-lg font-medium text-slate-600 dark:text-slate-300 mb-8">Trusted by businesses using</h4>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60 hover:opacity-100 transition-opacity duration-500">
                @php
                $popularLogos = ['salesforce', 'microsoft', 'google', 'slack', 'hubspot', 'whatsapp', 'zoom', 'aws'];
                @endphp
                @foreach ($popularLogos as $logo)
                    <div class="w-20 h-12 bg-white dark:bg-slate-700 rounded-lg shadow-sm flex items-center justify-center hover:shadow-md transition-shadow duration-300">
                        <span class="text-xs font-medium text-slate-400">{{ ucfirst($logo) }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

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

<!-- 11. 2025 AI Trends Teaser -->
<section class="relative md:py-24 py-16 bg-gradient-to-r from-indigo-50 to-blue-50 dark:from-slate-800 dark:to-slate-900">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-indigo-600 text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Future Insights</h6>
            <h2 class="mb-6 md:text-4xl text-3xl md:leading-normal leading-normal font-bold text-slate-900 dark:text-white wow animate__animated animate__fadeInUp" data-wow-delay=".3s">2025 AI Communication Trends</h2>
            <p class="text-slate-400 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay=".5s">Stay ahead with UAE-focused AI communication insights and industry predictions</p>
        </div>

        @php
        $trends = [
            [
                'icon' => 'uil uil-robot',
                'title' => 'AI-First Customer Experience',
                'desc' => 'How UAE businesses are adopting AI-first strategies to enhance customer interactions and reduce response times.',
                'readTime' => '5 min read',
                'category' => 'AI Innovation'
            ],
            [
                'icon' => 'uil uil-analytics',
                'title' => 'Predictive Analytics in MENA',
                'desc' => 'Regional data insights driving smarter business decisions across Dubai and Abu Dhabi enterprises.',
                'readTime' => '4 min read',
                'category' => 'Data Analytics'
            ],
            [
                'icon' => 'uil uil-shield-check',
                'title' => 'UAE Compliance Evolution',
                'desc' => 'Upcoming TRA regulations and how AI VoIP systems are preparing for enhanced security requirements.',
                'readTime' => '6 min read',
                'category' => 'Compliance'
            ],
            [
                'icon' => 'uil uil-globe',
                'title' => 'Multi-language AI Future',
                'desc' => 'Arabic NLP advancements and their impact on Gulf region communication technologies.',
                'readTime' => '7 min read',
                'category' => 'Technology'
            ]
        ];
        @endphp

        <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 mt-10 gap-[30px]">
            @foreach ($trends as $index => $trend)
                <div class="group bg-white dark:bg-slate-800 rounded-xl p-8 shadow-sm hover:shadow-xl transition-all duration-500 wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                    <!-- Trend Icon -->
                    <div class="flex items-start mb-6">
                        <div class="w-16 h-16 bg-gradient-to-tl from-indigo-500 to-blue-500 rounded-xl flex items-center justify-center me-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="{{ $trend['icon'] }} text-2xl text-white"></i>
                        </div>
                        <div class="flex-1">
                            <span class="text-xs font-medium text-indigo-600 dark:text-indigo-400 uppercase tracking-wide">{{ $trend['category'] }}</span>
                            <h5 class="text-xl font-bold text-slate-900 dark:text-white mt-2 group-hover:text-indigo-600 transition-colors duration-300">{{ $trend['title'] }}</h5>
                        </div>
                    </div>
                    
                    <!-- Trend Description -->
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">{{ $trend['desc'] }}</p>
                    
                    <!-- Read More Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100 dark:border-gray-700">
                        <span class="text-sm text-slate-500 dark:text-slate-400">{{ $trend['readTime'] }}</span>
                        <a href="#trends" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 font-medium group-hover:translate-x-1 transition-all duration-300">
                            Read Full Article <i class="uil uil-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Trends Newsletter Signup -->
        <div class="mt-16 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Stay Informed</h4>
                <p class="text-slate-600 dark:text-slate-300 mb-6">Get monthly insights on AI communication trends specific to the UAE market</p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Your business email" class="flex-1 px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-slate-700 text-slate-900 dark:text-white">
                    <button class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition-colors duration-300">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>

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

@include('includes.footer')

@endsection