<!-- Feature Showcase with Visuals -->
<section class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-6">
                See Sawtic AI
                <span style="color: var(--voip-link);">In Action</span>
            </h2>
        </div>
        
        <!-- Feature Grid -->
        <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
            <div>
                <h3 class="text-3xl font-bold text-white mb-6">Real-Time Lead Dashboard</h3>
                <p class="text-slate-300 text-lg mb-6">Monitor all incoming calls, lead status, and conversions in real-time from your mobile device.</p>
                <ul class="space-y-3">
                    <li class="flex items-center text-slate-300">
                        <i class="uil uil-check mr-3" style="color: var(--voip-link);"></i>Live call monitoring
                    </li>
                    <li class="flex items-center text-slate-300">
                        <i class="uil uil-check mr-3" style="color: var(--voip-link);"></i>Instant lead notifications
                    </li>
                    <li class="flex items-center text-slate-300">
                        <i class="uil uil-check mr-3" style="color: var(--voip-link);"></i>Conversion analytics
                    </li>
                </ul>
            </div>
            <div class="relative">
                <img src="{{ asset('assets/images/real/property/2.jpg') }}" alt="Real Estate Success Dashboard" class="w-full rounded-2xl shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent rounded-2xl"></div>
                
                <!-- Floating Dashboard Overlay -->
                <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(15px);">
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div>
                            <div class="text-lg font-bold text-white">142</div>
                            <div class="text-slate-400 text-xs">Calls Today</div>
                        </div>
                        <div>
                            <div class="text-lg font-bold text-white">89%</div>
                            <div class="text-slate-400 text-xs">Answered</div>
                        </div>
                        <div>
                            <div class="text-lg font-bold text-white">23</div>
                            <div class="text-slate-400 text-xs">Qualified</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Feature Row -->
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative order-2 lg:order-1">
                <img src="{{ asset('assets/images/real/property/5.jpg') }}" alt="Professional Real Estate Service" class="w-full rounded-2xl shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent rounded-2xl"></div>
                
                <!-- Live Status Indicator -->
                <div class="absolute top-6 left-6 p-3 rounded-xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(10px);">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                        <div class="text-white font-medium text-sm">AI Active</div>
                    </div>
                </div>
            </div>
            
            <div class="order-1 lg:order-2">
                <h3 class="text-3xl font-bold text-white mb-6">Professional Property Consultations</h3>
                <p class="text-slate-300 text-lg mb-6">Your AI agent provides expert-level consultations with deep knowledge of UAE real estate market trends and regulations.</p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-brain text-sm text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Market Intelligence</h4>
                            <p class="text-slate-400 text-sm">Real-time property values and market trends</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-shield-check text-sm text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Legal Compliance</h4>
                            <p class="text-slate-400 text-sm">UAE property law and RERA regulations</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center mr-4 mt-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-users-alt text-sm text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Client Profiling</h4>
                            <p class="text-slate-400 text-sm">Advanced lead qualification and matching</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>