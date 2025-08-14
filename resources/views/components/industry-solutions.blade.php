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