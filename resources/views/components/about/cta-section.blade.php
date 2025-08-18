<!-- Call to Action Section - Contact Form Integration -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0">
        <!-- Elegant Gradient -->
        <div class="absolute inset-0" style="background: linear-gradient(135deg, #162f3a 0%, #1a3a47 100%); opacity: 0.9;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Section Header -->
            <div class="mb-12">
                <h2 class="text-4xl font-bold text-white mb-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    Ready to Transform Your Business Communication?
                </h2>
                <p class="text-slate-300 text-lg leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    Join 500+ Dubai enterprises already benefiting from our AI-powered communication solutions. 
                    Let's discuss how we can elevate your customer experience to Dubai's gold standards.
                </p>
            </div>
            
            <!-- CTA Buttons -->
            <div class="flex flex-wrap gap-4 items-center justify-center mb-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                <a href="{{ url('/contact-us') }}" class="px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                    <i class="uil uil-phone text-lg mr-3"></i>
                    Schedule a Consultation
                </a>
                <a href="{{ url('/features') }}" class="px-8 py-4 rounded-xl font-semibold border-2 transition-all duration-300 hover:text-white hover:scale-105" style="border-color: var(--voip-primary); color: var(--voip-primary);" onmouseover="this.style.backgroundColor='var(--voip-primary)'" onmouseout="this.style.backgroundColor='transparent'">
                    <i class="uil uil-rocket text-lg mr-3"></i>
                    Explore Our Solutions
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="grid md:grid-cols-3 grid-cols-1 gap-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <div class="flex items-center justify-center space-x-3 p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                    <i class="uil uil-shield-check text-2xl" style="color: var(--voip-link);"></i>
                    <div class="text-left">
                        <div class="text-white font-semibold text-sm">TRA Certified</div>
                        <div class="text-slate-300 text-xs">UAE Compliant</div>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-3 p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                    <i class="uil uil-clock text-2xl" style="color: var(--voip-link);"></i>
                    <div class="text-left">
                        <div class="text-white font-semibold text-sm">24/7 Support</div>
                        <div class="text-slate-300 text-xs">Local Dubai Team</div>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-3 p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                    <i class="uil uil-award text-2xl" style="color: var(--voip-link);"></i>
                    <div class="text-left">
                        <div class="text-white font-semibold text-sm">5+ Years</div>
                        <div class="text-slate-300 text-xs">Dubai Excellence</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>