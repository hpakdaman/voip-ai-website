@php
$contactData = json_decode(file_get_contents(resource_path('data/contact-us.json')), true);
$heroData = $contactData['hero'] ?? [];
@endphp

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden" style="background: linear-gradient(135deg, var(--voip-dark-bg) 0%, var(--voip-bg) 100%);">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 rounded-full opacity-10 animate-pulse" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%);"></div>
        <div class="absolute top-3/4 right-1/4 w-64 h-64 rounded-full opacity-15 animate-pulse" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-delay: 1s;"></div>
        
        <!-- Floating Connection Lines -->
        <svg class="absolute inset-0 w-full h-full opacity-20" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="contact-grid" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="currentColor" stroke-width="1" style="color: var(--voip-link);"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#contact-grid)" />
        </svg>
    </div>
    
    <div class="container relative z-10 py-20">
        <div class="grid grid-cols-1 text-center">
            <!-- Contact Badge -->
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-8 mx-auto wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-headphone-alt text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">24/7 Expert Support</span>
            </div>
            
            <!-- Main Title -->
            <h1 class="md:text-5xl text-3xl md:leading-tight tracking-wide leading-normal font-bold text-white mb-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $heroData['title'] ?? 'Contact VoIP AI Experts' }}
            </h1>
            
            <!-- Subtitle -->
            <h2 class="text-2xl md:text-3xl font-semibold mb-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s" style="color: var(--voip-link);">
                {{ $heroData['subtitle'] ?? 'Transform Your Business Communications Today' }}
            </h2>
            
            <!-- Description -->
            <p class="text-slate-300 text-xl leading-relaxed max-w-4xl mx-auto mb-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                {{ $heroData['description'] ?? 'Get personalized AI-powered communication solutions designed specifically for UAE enterprises' }}
            </p>
            
            <!-- Quick Action Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                <a href="#ai-calling" class="group relative px-8 py-4 rounded-xl text-white font-semibold transition-all duration-500 hover:-translate-y-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                    <i class="uil uil-phone-alt mr-2"></i>
                    Try Our AI Agent
                </a>
                <a href="#contact-form" class="group relative px-8 py-4 rounded-xl border border-white/20 text-white font-semibold transition-all duration-500 hover:border-white/50 hover:-translate-y-1" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                    <i class="uil uil-message mr-2"></i>
                    Send Message
                </a>
            </div>
        </div>
    </div>
    
    <!-- Breadcrumb -->
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                <a href="{{ url('/') }}">VoIP AI</a>
            </li>
            <li class="inline-block text-base text-white/50 mx-0.5">
                <i class="uil uil-angle-right-b"></i>
            </li>
            <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">
                Contact Us
            </li>
        </ul>
    </div>
</section>

<!-- Shape Separator -->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1" style="color: #0a1a24;">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>