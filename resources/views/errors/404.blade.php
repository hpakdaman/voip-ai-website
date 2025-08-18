@extends('layouts.main')

@section('title', 'Page Not Found - VoIP AI Solutions')

@section('content')
<!-- 404 Error Page -->
<div class="min-h-screen flex items-center justify-center" style="background-color: var(--voip-dark-bg);">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full opacity-10" 
             style="background: var(--primary-gradient);"></div>
        <div class="absolute -bottom-32 -right-32 w-80 h-80 rounded-full opacity-10" 
             style="background: var(--voip-gradient);"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 rounded-full opacity-5" 
             style="background: var(--voip-gradient);"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <!-- Error Code with Animation -->
        <div class="mb-8 relative">
            <div class="text-[12rem] md:text-[16rem] font-bold text-transparent bg-clip-text opacity-20"
                 style="background: var(--primary-gradient);">
                404
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-current opacity-30 animate-ping slow-ping"
                     style="color: var(--voip-link);"></div>
            </div>
        </div>

        <!-- Error Content -->
        <div class="space-y-6">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Page Not Found
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-slate-300 mb-6">
                The page you're looking for seems to have vanished into the digital void
            </p>
            
            <!-- Description -->
            <div class="max-w-2xl mx-auto">
                <p class="text-lg text-slate-400 leading-relaxed mb-8">
                    Don't worry, even the best AI communication systems occasionally lose a signal. 
                    Let's get you back on track to discover our intelligent VoIP solutions.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <!-- Go Home Button -->
                <a href="{{ url('/') }}" 
                   class="group px-8 py-4 rounded-xl text-white font-semibold text-lg transition-all duration-300 hover:transform hover:scale-105 hover:shadow-2xl"
                   style="background: var(--primary-gradient);">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 1.414L7.414 10l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Return Home</span>
                    </div>
                </a>

                <!-- Contact Support Button -->
                <a href="{{ url('/contact-us') }}" 
                   class="group px-8 py-4 rounded-xl border-2 text-white font-semibold text-lg transition-all duration-300 hover:transform hover:scale-105 hover:shadow-2xl hover:bg-opacity-10"
                   style="border-color: var(--voip-link); color: var(--voip-link);"
                   onmouseover="this.style.backgroundColor='rgba(30, 192, 141, 0.1)'"
                   onmouseout="this.style.backgroundColor='transparent'">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>Get Support</span>
                    </div>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="mt-12 pt-8 border-t border-slate-700">
                <p class="text-slate-400 mb-4">Or explore these popular sections:</p>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <a href="{{ url('/features') }}" class="hover:underline" style="color: var(--voip-link);">
                        AI Features
                    </a>
                    <span class="text-slate-600">•</span>
                    <a href="{{ url('/pricing') }}" class="hover:underline" style="color: var(--voip-link);">
                        Pricing Plans
                    </a>
                    <span class="text-slate-600">•</span>
                    <a href="{{ url('/about') }}" class="hover:underline" style="color: var(--voip-link);">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes slow-ping {
  75%, 100% {
    transform: scale(2);
    opacity: 0;
  }
}

.slow-ping {
  animation: slow-ping 3s cubic-bezier(0, 0, 0.2, 1) infinite;
}
</style>
@endsection