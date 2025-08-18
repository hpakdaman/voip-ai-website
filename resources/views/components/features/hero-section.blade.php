@php
try {
    $pageData = json_decode(file_get_contents(resource_path('data/features-page.json')), true);
    $heroData = $pageData['hero'] ?? [];
} catch (Exception $e) {
    $heroData = [
        'title' => 'Comprehensive VoIP AI Features',
        'subtitle' => 'Complete Feature Overview', 
        'description' => 'Discover every powerful feature that makes our VoIP AI solution the perfect choice for UAE businesses.'
    ];
}
@endphp

<!-- Hero Section - Immersive Cinema Style -->
<section class="relative min-h-screen flex items-center overflow-hidden" style="background-color: var(--voip-dark-bg);">
    <!-- Dynamic Gradient Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center top, rgba(30, 192, 141, 0.08) 0%, transparent 50%), linear-gradient(135deg, #0c1b27 0%, #162f3a 30%, #0c1b27 70%, #1a2f3a 100%);"></div>
        <!-- Animated Floating Orbs -->
        <div class="floating-orb absolute top-1/4 left-1/4 w-96 h-96 rounded-full opacity-10 animate-pulse" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%); animation-duration: 4s;"></div>
        <div class="floating-orb absolute bottom-1/4 right-1/4 w-64 h-64 rounded-full opacity-5 animate-pulse" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-duration: 6s; animation-delay: 2s;"></div>
    </div>
    
    <div class="container relative z-10 py-20">
        <div class="grid grid-cols-1 text-center">
            <!-- Feature Count Badge -->
            <div class="wow animate__animated animate__fadeInDown" data-wow-delay="0.1s">
                <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                    <span class="text-sm font-medium text-white mr-2">200+</span>
                    <span class="text-sm" style="color: var(--voip-link);">Advanced AI Features</span>
                </div>
            </div>
            
            <h1 class="mb-8 md:text-7xl text-5xl font-bold text-white leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                The Most <span style="background: linear-gradient(135deg, var(--voip-link) 0%, #ffffff 50%, var(--voip-primary) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Advanced</span><br/>
                AI Call Center Platform
            </h1>
            
            <p class="text-slate-200 max-w-4xl mx-auto text-xl mb-12 leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $heroData['description'] ?? 'Experience the future of business communications with enterprise-grade AI features designed specifically for the UAE market. From intelligent automation to predictive analytics, discover how our platform transforms customer service into a competitive advantage.' }}
            </p>
            
            <!-- Interactive Feature Navigator -->
            <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-4 max-w-6xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <a href="#intelligent-automation" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-robot text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Intelligent Automation</h6>
                </a>
                <a href="#advanced-analytics" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-chart-growth text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Advanced Analytics</h6>
                </a>
                <a href="#customer-experience" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-heart text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Customer Experience</h6>
                </a>
                <a href="#enterprise-security" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-shield-check text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Enterprise Security</h6>
                </a>
                <a href="#integration-ecosystem" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-apps text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Integrations</h6>
                </a>
                <a href="#global-readiness" class="group relative p-4 rounded-xl border border-white/10 hover:border-white/30 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(5px);" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <i class="uil uil-globe text-3xl mb-2 group-hover:scale-110 transition-transform duration-300" style="color: var(--voip-link);"></i>
                    <h6 class="text-white text-sm font-medium">Global Ready</h6>
                </a>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                <div class="inline-flex flex-col items-center">
                    <span class="text-slate-400 text-sm mb-4">Scroll to explore features</span>
                    <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                        <div class="w-1 h-3 bg-white rounded-full mt-2 animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>