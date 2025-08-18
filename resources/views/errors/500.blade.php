@extends('layouts.main')

@section('title', 'Server Error - VoIP AI Solutions')

@section('content')
<!-- 500 Error Page -->
<div class="min-h-screen flex items-center justify-center" style="background-color: var(--voip-dark-bg);">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full opacity-10" 
             style="background: linear-gradient(135deg, #b0413e 0%, #ff6b6b 100%);"></div>
        <div class="absolute -bottom-32 -right-32 w-80 h-80 rounded-full opacity-10" 
             style="background: linear-gradient(135deg, #b0413e 0%, #ff6b6b 100%);"></div>
        <div class="absolute top-1/3 right-1/4 w-48 h-48 rounded-full opacity-5" 
             style="background: linear-gradient(135deg, #b0413e 0%, #ff6b6b 100%);"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <!-- Error Code with Animation -->
        <div class="mb-8 relative">
            <div class="text-[12rem] md:text-[16rem] font-bold text-transparent bg-clip-text opacity-20"
                 style="background: linear-gradient(135deg, #b0413e 0%, #ff6b6b 100%);">
                500
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-4 border-red-400 opacity-30 animate-pulse"></div>
            </div>
        </div>

        <!-- Error Content -->
        <div class="space-y-6">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Server Error
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-slate-300 mb-6">
                Our AI systems are experiencing a temporary glitch
            </p>
            
            <!-- Description -->
            <div class="max-w-2xl mx-auto">
                <p class="text-lg text-slate-400 leading-relaxed mb-8">
                    Even the most advanced VoIP AI technology occasionally needs a moment to recalibrate. 
                    Our technical team has been automatically notified and is working to resolve this issue.
                </p>
            </div>

            <!-- Status Information -->
            <div class="bg-slate-800 bg-opacity-50 rounded-xl p-6 mb-8 border border-slate-700">
                <div class="flex items-center justify-center space-x-4 text-sm text-slate-400">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                        <span>System Status: Under Maintenance</span>
                    </div>
                </div>
                <p class="text-xs text-slate-500 mt-2">
                    Expected resolution: Within 15 minutes
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <!-- Refresh Page Button -->
                <button onclick="window.location.reload()" 
                        class="group px-8 py-4 rounded-xl text-white font-semibold text-lg transition-all duration-300 hover:transform hover:scale-105 hover:shadow-2xl"
                        style="background: linear-gradient(135deg, #1d7861 0%, #1ec08d 100%);">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        <span>Try Again</span>
                    </div>
                </button>

                <!-- Go Home Button -->
                <a href="{{ url('/') }}" 
                   class="group px-8 py-4 rounded-xl border-2 text-white font-semibold text-lg transition-all duration-300 hover:transform hover:scale-105 hover:shadow-2xl hover:bg-opacity-10"
                   style="border-color: var(--voip-link); color: var(--voip-link);"
                   onmouseover="this.style.backgroundColor='rgba(30, 192, 141, 0.1)'"
                   onmouseout="this.style.backgroundColor='transparent'">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        <span>Go Home</span>
                    </div>
                </a>
            </div>

            <!-- Support Information -->
            <div class="mt-12 pt-8 border-t border-slate-700">
                <p class="text-slate-400 mb-4">Need immediate assistance?</p>
                <div class="flex flex-col sm:flex-row justify-center gap-6 text-sm">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" style="color: var(--voip-link);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.82 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-slate-400">Email: </span>
                        <a href="mailto:support@voipai.ae" class="hover:underline" style="color: var(--voip-link);">
                            support@voipai.ae
                        </a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" style="color: var(--voip-link);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-slate-400">Phone: </span>
                        <a href="tel:+97148647245" class="hover:underline" style="color: var(--voip-link);">
                            +971 4 864 7245
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}
</style>
@endsection