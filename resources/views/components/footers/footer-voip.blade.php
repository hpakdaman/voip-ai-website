<!-- VoIP AI Footer - Modern Design -->
<footer class="relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-dark-bg) 0%, var(--voip-bg) 100%);">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full opacity-5" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%);"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 rounded-full opacity-8" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%);"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Main Footer Content -->
        <div class="py-16">
            <div class="grid lg:grid-cols-5 md:grid-cols-2 gap-8">
                
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <a href="{{ url('/') }}" class="inline-block mb-6">
                        <img src="{{ asset('assets/images/sawtic-white-logo-gray-min.svg') }}" class="h-10" alt="VoIP AI Solutions">
                    </a>
                    <p class="text-slate-300 text-lg leading-relaxed mb-8">
                        Dubai's premier AI-powered communication specialists, transforming customer connections across the UAE with intelligent solutions.
                    </p>
                    
                    <!-- Office Locations -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <i class="uil uil-map-marker text-lg mt-1" style="color: var(--voip-link);"></i>
                            <div>
                                <h6 class="text-white font-semibold text-sm">Dubai Office</h6>
                                <p class="text-slate-300 text-sm">DIFC, Gate Building</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="uil uil-map-marker text-lg mt-1" style="color: var(--voip-link);"></i>
                            <div>
                                <h6 class="text-white font-semibold text-sm">Sydney Office</h6>
                                <p class="text-slate-300 text-sm">Martin Place, CBD</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="flex items-center space-x-4">
                        <a href="mailto:dubai@voipai.ae" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-envelope text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-linkedin text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-twitter text-white"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="text-white font-bold text-lg mb-6">Company</h5>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Home</a></li>
                        <li><a href="{{ url('/about') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>About Us</a></li>
                        <li><a href="{{ url('/features') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Features</a></li>
                        <li><a href="{{ url('/contact-us') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Contact</a></li>
                    </ul>
                </div>

                <!-- Solutions -->
                <div>
                    <h5 class="text-white font-bold text-lg mb-6">Solutions</h5>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/healthcare') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Healthcare</a></li>
                        <li><a href="{{ url('/finance') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Finance</a></li>
                        <li><a href="{{ url('/real-estate') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Real Estate</a></li>
                        <li><a href="{{ url('/retail') }}" class="text-slate-300 hover:text-white transition-colors duration-300 flex items-center"><i class="uil uil-angle-right text-xs mr-2" style="color: var(--voip-link);"></i>Retail</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h5 class="text-white font-bold text-lg mb-6">Get Started</h5>
                    
                    <!-- Contact Cards -->
                    <div class="space-y-4 mb-6">
                        <div class="p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="flex items-center space-x-3">
                                <i class="uil uil-phone text-xl" style="color: var(--voip-link);"></i>
                                <div>
                                    <p class="text-white font-semibold text-sm">Call Dubai</p>
                                    <a href="tel:+97148647245" class="text-slate-300 text-xs hover:text-white">+971 4 864 7245</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 rounded-xl" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="flex items-center space-x-3">
                                <i class="uil uil-envelope text-xl" style="color: var(--voip-link);"></i>
                                <div>
                                    <p class="text-white font-semibold text-sm">Email Us</p>
                                    <a href="mailto:dubai@voipai.ae" class="text-slate-300 text-xs hover:text-white">dubai@voipai.ae</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA Button -->
                    <a href="{{ url('/contact-us') }}" class="inline-flex items-center px-6 py-3 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.3);">
                        <i class="uil uil-rocket text-sm mr-2"></i>
                        Request Demo
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="border-t border-white/10 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="flex items-center space-x-6 text-sm text-slate-300">
                    <a href="{{ url('/terms') }}" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="{{ url('/privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                    <span class="flex items-center">
                        <i class="uil uil-shield-check mr-2" style="color: var(--voip-link);"></i>
                        TRA Compliant
                    </span>
                </div>
                <div class="text-sm text-slate-300">
                    <p>&copy; {{ date('Y') }} VoIP AI Solutions. Transforming UAE businesses with intelligent communication.</p>
                </div>
            </div>
        </div>
    </div>
</footer>