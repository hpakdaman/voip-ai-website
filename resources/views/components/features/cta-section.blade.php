<!-- Call to Action Section - Fixed with FAQ Button Style -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        <div class="grid grid-cols-1 text-center">
            <h2 class="mb-6 md:text-4xl text-3xl font-semibold text-white wow animate__animated animate__fadeInUp" 
                data-wow-delay="0.1s">
                Ready to Experience These Features?
            </h2>
            <p class="text-slate-300 max-w-2xl mx-auto text-lg mb-8 wow animate__animated animate__fadeInUp" 
               data-wow-delay="0.2s">
                Start your free 30-day trial and see how our VoIP AI solution transforms your business communications
            </p>
            
            <!-- CTA Buttons - Using FAQ Section Button Pattern -->
            <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                <a href="{{ url('/contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center text-white rounded-md hover:scale-105 transition-all hover-voip-button" style="background-color: var(--voip-primary);">
                    <i class="uil uil-rocket text-lg mr-2"></i>
                    Start Free Trial
                </a>
                <a href="{{ url('/contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center border-2 rounded-md transition-all hover:text-white hover:scale-105" style="border-color: var(--voip-primary); color: var(--voip-primary);" onmouseover="this.style.backgroundColor='var(--voip-primary)'" onmouseout="this.style.backgroundColor='transparent'">
                    <i class="uil uil-phone text-lg mr-2"></i>
                    Schedule Demo
                </a>
            </div>
        </div>
    </div>
</section>