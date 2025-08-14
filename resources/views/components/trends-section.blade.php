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