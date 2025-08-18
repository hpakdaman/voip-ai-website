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