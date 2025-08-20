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
        
        <!-- Professional Testimonials Grid -->
        @if(!empty($testimonials))
        <div class="max-w-6xl mx-auto mb-16">
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach($testimonials as $index => $testimonial)
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ ($index * 0.15) + 0.1 }}s">
                    <!-- Testimonial Card -->
                    <div class="h-full p-8 rounded-2xl border border-white/10 transition-all duration-300 hover:scale-105 flex flex-col" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.4) 100%);">
                        
                        <!-- Quote Icon & Rating -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil uil-quote-left text-xl text-white"></i>
                            </div>
                            <div class="flex items-center">
                                @for($i = 1; $i <= ($testimonial['rating'] ?? 5); $i++)
                                <i class="uil uil-star text-yellow-400 text-lg"></i>
                                @endfor
                            </div>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <blockquote class="text-white text-lg leading-relaxed mb-8 italic flex-1">
                            "{{ $testimonial['testimonial'] }}"
                        </blockquote>
                        
                        <!-- Results Metrics -->
                        @if(isset($testimonial['results']))
                        <div class="grid grid-cols-3 gap-3 mb-6 p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.05);">
                            @foreach($testimonial['results'] as $metric => $value)
                            <div class="text-center">
                                <div class="text-xl font-bold mb-1" style="color: var(--voip-link);">{{ $value }}</div>
                                <div class="text-xs text-slate-400">{{ ucwords(str_replace('_', ' ', $metric)) }}</div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        
                        <!-- Customer Info -->
                        <div class="flex items-center mt-auto">
                            <div class="w-16 h-16 rounded-full overflow-hidden border-2 mr-4" style="border-color: var(--voip-link);">
                                <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="text-white font-bold text-lg">{{ $testimonial['name'] }}</div>
                                <div class="text-slate-400 text-sm">{{ $testimonial['title'] ?? '' }}</div>
                                <div class="text-slate-500 text-xs font-medium">{{ $testimonial['company'] }}</div>
                                @if(isset($testimonial['specialty']))
                                <span class="inline-block px-2 py-1 text-xs font-medium rounded-full mt-2" style="background: rgba(30, 192, 141, 0.2); color: var(--voip-link);">
                                    {{ $testimonial['specialty'] }}
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- Success Stats -->
        <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
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
                <p class="text-slate-300 mb-8">Don't let your competitors get ahead. Start capturing more leads today with Sawtic AI.</p>
                
                <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center">
                    <a href="/contact-us" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="success-stories-demo">
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