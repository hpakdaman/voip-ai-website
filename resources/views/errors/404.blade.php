@extends('layouts.main')

@section('title', 'Page Not Found - Sawtic')

@section('content')
<!-- 404 Error Page -->
<div class="min-h-screen flex items-center justify-center" style="background-color: var(--voip-dark-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full opacity-10" 
             style="background: var(--primary-gradient);"></div>
        <div class="absolute -bottom-32 -right-32 w-80 h-80 rounded-full opacity-10" 
             style="background: var(--voip-gradient);"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 rounded-full opacity-5" 
             style="background: var(--voip-gradient);"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <!-- Error Code -->
        <div class="mb-8 relative">
            <div class="text-[12rem] md:text-[16rem] font-bold text-transparent bg-clip-text opacity-20 select-none"
                 style="background: var(--primary-gradient);">
                404
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
                    Don't worry, even the most advanced AI call centers occasionally lose a connection. 
                    Let's get you back on track to discover our intelligent business automation solutions.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <!-- Go Home Button -->
                <a href="{{ url('/') }}" 
                   class="px-8 py-4 rounded-xl text-white font-semibold text-lg"
                   style="background: var(--primary-gradient);">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 1.414L7.414 10l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Return Home</span>
                    </div>
                </a>

                <!-- Contact Support Button -->
                <a href="{{ url('/contact-us') }}" 
                   class="px-8 py-4 rounded-xl border-2 text-white font-semibold text-lg"
                   style="border-color: var(--voip-link); color: var(--voip-link);">
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
                <p class="text-slate-400 mb-6 text-sm uppercase tracking-wider font-medium">Or explore these popular sections:</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-md mx-auto">
                    <a href="{{ url('/features') }}" 
                       class="p-4 rounded-lg border border-slate-700" 
                       style="color: var(--voip-link);">
                        <div class="flex flex-col items-center text-center space-y-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="text-sm font-medium">AI Features</span>
                        </div>
                    </a>
                    
                    <a href="{{ url('/pricing') }}" 
                       class="p-4 rounded-lg border border-slate-700" 
                       style="color: var(--voip-link);">
                        <div class="flex flex-col items-center text-center space-y-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                            <span class="text-sm font-medium">Pricing Plans</span>
                        </div>
                    </a>
                    
                    <a href="{{ url('/about') }}" 
                       class="p-4 rounded-lg border border-slate-700" 
                       style="color: var(--voip-link);">
                        <div class="flex flex-col items-center text-center space-y-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span class="text-sm font-medium">About Sawtic</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Add a subtle text shadow for better readability */
h1, p {
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

/* Custom scrollbar for better aesthetics */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: rgba(30, 192, 141, 0.1);
}

::-webkit-scrollbar-thumb {
  background: var(--voip-link);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: var(--voip-primary);
}

/* Improved responsive design */
@media (max-width: 640px) {
  .text-\[12rem\] {
    font-size: 8rem;
  }
  
  .text-\[16rem\] {
    font-size: 10rem;
  }
}
</style>
@endsection