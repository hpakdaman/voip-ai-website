@extends('layouts.main')

@section('title', 'Privacy Rights Portal - Sawtic | Exercise Your Data Rights')

@section('content')

<!-- Privacy Rights Portal Hero -->
<section class="relative min-h-[60vh] flex items-center pt-20" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: linear-gradient(135deg, #0c1b27 0%, #162f3a 50%, #0c1b27 100%); opacity: 0.95;"></div>
    </div>
    
    <div class="container relative z-10 py-16">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-8" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-user-check text-xl mr-3" style="color: var(--voip-link);"></i>
                <span class="text-slate-300 font-medium">Privacy Rights Management</span>
            </div>
            
            <h1 class="text-5xl font-bold text-white mb-6 leading-tight">Privacy Rights Portal</h1>
            <p class="text-slate-300 max-w-3xl mx-auto text-xl leading-relaxed mb-8">Exercise your privacy rights and manage your personal data preferences through our secure self-service portal.</p>
            
            <div class="inline-flex items-center px-6 py-3 rounded-lg border border-white/20" style="background: rgba(255, 193, 7, 0.1);">
                <i class="uil uil-construction text-xl mr-3" style="color: #ffc107;"></i>
                <span class="text-slate-300">Portal Under Development - Coming Soon</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Alternative -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Exercise Your Privacy Rights Now</h2>
            <p class="text-slate-300 text-lg mb-8">While our self-service portal is under development, you can still exercise all your privacy rights by contacting our Data Protection Officer directly.</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="p-6 rounded-xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <i class="uil uil-envelope text-3xl mb-4" style="color: var(--voip-link);"></i>
                    <h3 class="text-xl font-semibold text-white mb-2">Email Request</h3>
                    <p class="text-slate-300 mb-4">Send your privacy request directly to our DPO</p>
                    <a href="mailto:privacy@sawtic.com" class="inline-flex items-center px-6 py-3 rounded-lg font-semibold text-white transition-all duration-300" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        privacy@sawtic.com
                    </a>
                </div>
                
                <div class="p-6 rounded-xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <i class="uil uil-phone text-3xl mb-4" style="color: var(--voip-link);"></i>
                    <h3 class="text-xl font-semibold text-white mb-2">Phone Support</h3>
                    <p class="text-slate-300 mb-4">Speak directly with our privacy team</p>
                    <a href="tel:+97148647245" class="inline-flex items-center px-6 py-3 rounded-lg font-semibold text-white transition-all duration-300" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        +971 4 864 7245
                    </a>
                </div>
            </div>
            
            <div class="mt-12 p-6 rounded-xl border border-white/20" style="background: rgba(30, 192, 141, 0.05);">
                <p class="text-slate-300"><strong class="text-white">Response Time:</strong> We respond to all privacy requests within 30 days as required by law.</p>
            </div>
        </div>
    </div>
</section>

@endsection