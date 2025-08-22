@php
$sectionData = $data['section'] ?? [];
$testimonials = $data['testimonials'] ?? [];
@endphp

<!-- Success Stories & Testimonials -->
<section class="relative py-24" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1);">
                <i class="uil uil-award text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['badge'] ?? 'Success Stories' }}</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                {{ $sectionData['title'] ?? 'Real Results from' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'UAE Businesses' }}</span>
            </h2>
            
            @if(isset($sectionData['description']))
            <p class="text-slate-300 text-xl leading-relaxed">{{ $sectionData['description'] }}</p>
            @endif
        </div>
        
        <!-- Testimonials: Grid or Slider -->
        @if(!empty($testimonials))
        <div class="max-w-5xl mx-auto mb-16">
            @if(count($testimonials) <= 3)
                <!-- Static Grid for 3 or fewer testimonials -->
                <div class="grid lg:grid-cols-{{ count($testimonials) }} gap-6 justify-center">
                    @foreach($testimonials as $index => $testimonial)
                    @include('solutions.sections.partials.testimonial-card', ['testimonial' => $testimonial, 'index' => $index])
                    @endforeach
                </div>
            @else
                <!-- Splide Slider for more than 3 testimonials -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
                
                <div class="splide testimonials-splide" role="group">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($testimonials as $index => $testimonial)
                            <li class="splide__slide">
                                <div class="flex justify-center px-4">
                                    <div class="w-full max-w-sm">
                                        @include('solutions.sections.partials.testimonial-card', ['testimonial' => $testimonial, 'index' => $index])
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Splide CSS Customization -->
                <style>
                    .testimonials-splide .splide__arrow {
                        background: rgba(30, 192, 141, 0.1);
                        border: 1px solid rgba(30, 192, 141, 0.3);
                        backdrop-filter: blur(10px);
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                    }
                    
                    .testimonials-splide .splide__arrow svg {
                        fill: rgb(30, 192, 141);
                        width: 18px;
                        height: 18px;
                    }
                    
                    .testimonials-splide .splide__pagination__page {
                        background: rgba(255, 255, 255, 0.3);
                        width: 12px;
                        height: 12px;
                        margin: 0 4px;
                    }
                    
                    .testimonials-splide .splide__pagination__page.is-active {
                        background: rgb(30, 192, 141);
                        transform: scale(1.2);
                    }
                    
                    .testimonials-splide .splide__track {
                        padding-bottom: 50px;
                    }
                </style>

                <!-- Splide JS -->
                <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
                
                <!-- Initialize Splide -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        new Splide('.testimonials-splide', {
                            type: 'loop',
                            perPage: 1,
                            perMove: 1,
                            gap: '2rem',
                            pagination: true,
                            arrows: true,
                            autoplay: true,
                            interval: 5000,
                            pauseOnHover: true,
                            pauseOnFocus: true,
                            resetProgress: false,
                            height: 'auto',
                            fixedHeight: false
                        }).mount();
                    });
                </script>
            @endif
        </div>
        @endif
        
        <!-- Success Stats -->
        <div class="mt-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">500+</div>
                    <div class="text-slate-400">UAE Businesses</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">95%</div>
                    <div class="text-slate-400">Lead Capture Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">24/7</div>
                    <div class="text-slate-400">AI Availability</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">15x</div>
                    <div class="text-slate-400">Average ROI</div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
            <div class="max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-white mb-4">Join These Successful Businesses</h3>
                <p class="text-slate-300 mb-8">Start capturing more leads with Sawtic AI.</p>
                
                <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center">
                    <a href="{{ route('demo.booking') }}" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="success-stories-demo">
                        <i class="uil uil-calendar-alt text-xl mr-3"></i>
                        Get Your Free Demo
                    </a>
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="success-stories-call">
                        <i class="uil uil-phone text-xl mr-3"></i>
                        Call: +971 4 864 7245
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>