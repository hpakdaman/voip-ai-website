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