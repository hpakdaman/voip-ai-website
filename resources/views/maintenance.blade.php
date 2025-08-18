<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance - VoIP AI Solutions</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen" style="background-color: var(--voip-dark-bg);">
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full opacity-10" 
             style="background: var(--primary-gradient);"></div>
        <div class="absolute -bottom-32 -right-32 w-80 h-80 rounded-full opacity-10" 
             style="background: var(--voip-gradient);"></div>
    </div>

    <div class="relative z-10 min-h-screen flex items-center justify-center px-6">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Logo -->
            <div class="mb-8">
                <div class="inline-flex items-center space-x-3 mb-6">
                    <div class="w-16 h-16 rounded-xl flex items-center justify-center"
                         style="background: var(--primary-gradient);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                        </svg>
                    </div>
                    <h1 class="text-3xl font-bold text-white">VoIP AI Solutions</h1>
                </div>
            </div>

            <!-- Maintenance Icon -->
            <div class="mb-8">
                <div class="w-24 h-24 mx-auto rounded-full flex items-center justify-center mb-6"
                     style="background: rgba(30, 192, 141, 0.2); border: 3px solid var(--voip-link);">
                    <svg class="w-12 h-12 animate-spin" style="color: var(--voip-link);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Content -->
            <div class="space-y-6">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    We'll Be Right Back
                </h2>
                
                <p class="text-xl text-slate-300 mb-6">
                    Our VoIP AI platform is undergoing scheduled maintenance
                </p>
                
                <div class="max-w-lg mx-auto">
                    <p class="text-lg text-slate-400 leading-relaxed mb-8">
                        We're enhancing our intelligent communication systems to serve you better. 
                        Thank you for your patience while we upgrade our AI-powered VoIP solutions.
                    </p>
                </div>

                <!-- Status -->
                <div class="bg-slate-800 bg-opacity-50 rounded-xl p-6 border border-slate-700 mb-8">
                    <div class="flex items-center justify-center space-x-3 mb-3">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full animate-pulse"></div>
                        <span class="text-yellow-400 font-semibold">Maintenance in Progress</span>
                    </div>
                    <p class="text-slate-400 text-sm">
                        Expected completion: Soon
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="border-t border-slate-700 pt-8">
                    <p class="text-slate-400 mb-4">Need immediate assistance?</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6 text-sm">
                        <a href="mailto:support@voipai.ae" 
                           class="flex items-center space-x-2 hover:underline transition-colors"
                           style="color: var(--voip-link);">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M3 8l7.89 7.89a2 2 0 002.82 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>support@voipai.ae</span>
                        </a>
                        <a href="tel:+97148647245" 
                           class="flex items-center space-x-2 hover:underline transition-colors"
                           style="color: var(--voip-link);">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+971 4 864 7245</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    @keyframes spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
    
    .animate-spin {
        animation: spin 3s linear infinite;
    }
    </style>
</body>
</html>