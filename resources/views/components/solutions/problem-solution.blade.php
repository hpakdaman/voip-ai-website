@php
$problemsData = json_decode(file_get_contents(resource_path('data/solutions/real-estate/problems.json')), true);
$sectionData = $problemsData['section'] ?? [];
$problems = $problemsData['problems'] ?? [];
$solutions = $problemsData['solutions'] ?? [];
@endphp

<!-- Problem vs Solution Showcase - Real Estate Focus -->
<section class="relative py-24" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0">
        <!-- Premium Background -->
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, transparent 50%), radial-gradient(ellipse at left, rgba(29, 120, 97, 0.1) 0%, transparent 70%);"></div>
        <!-- Diagonal Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: repeating-linear-gradient(45deg, rgba(30, 192, 141, 0.1) 0px, rgba(30, 192, 141, 0.1) 1px, transparent 1px, transparent 30px);"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-exclamation-triangle text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['badge'] ?? 'Real Estate Challenges' }}</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $sectionData['title'] ?? 'Stop Losing Leads While You\'re' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'Showing Properties' }}</span>
            </h2>
            
            <p class="text-slate-300 text-xl leading-relaxed">
                {{ $sectionData['description'] ?? 'Every missed call is a lost commission. See how Sawtic AI transforms real estate challenges into competitive advantages.' }}
            </p>
        </div>
        
        <!-- Problem vs Solution Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            
            <!-- Problems Column -->
            <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                        <i class="uil uil-times text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Current Problems</h3>
                    <p class="text-slate-400">What's costing you leads right now</p>
                </div>
                
                <!-- Problems List -->
                <div class="space-y-6">
                    @foreach($problems as $problem)
                    <div class="p-6 rounded-2xl border border-red-500/20" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.05) 100%);">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center mt-1 bg-red-500/20">
                                <i class="uil {{ $problem['icon'] ?? 'uil-exclamation' }} text-red-400"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-white mb-2">{{ $problem['title'] ?? 'Problem Title' }}</h4>
                                <p class="text-slate-300 text-sm leading-relaxed">{{ $problem['description'] ?? 'Problem description' }}</p>
                                <div class="mt-3 text-red-400 text-sm font-medium">
                                    <i class="uil uil-chart-down text-xs mr-1"></i>
                                    {{ $problem['impact'] ?? 'Impact metric' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Solutions Column -->
            <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <i class="uil uil-check text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Sawtic AI Solutions</h3>
                    <p class="text-slate-400">How we solve each challenge</p>
                </div>
                
                <!-- Solutions List -->
                <div class="space-y-6">
                    @foreach($solutions as $solution)
                    <div class="p-6 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(29, 120, 97, 0.05) 100%);">
                        <div class="flex items-start space-x-4">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center mt-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil {{ $solution['icon'] ?? 'uil-check' }} text-white text-sm"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-semibold text-white mb-2">{{ $solution['title'] ?? 'Solution Title' }}</h4>
                                <p class="text-slate-300 text-sm leading-relaxed mb-3">{{ $solution['description'] ?? 'Solution description' }}</p>
                                <div class="flex items-center justify-between">
                                    <div style="color: var(--voip-link);" class="text-sm font-medium">
                                        <i class="uil uil-chart-growth text-xs mr-1"></i>
                                        {{ $solution['benefit'] ?? 'Benefit metric' }}
                                    </div>
                                    @if($solution['demo_available'] ?? false)
                                    <button class="text-xs px-3 py-1 rounded-full border border-white/20 text-white hover:bg-white/10 transition-colors">
                                        <i class="uil uil-play text-xs mr-1"></i>Demo
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <!-- Bottom CTA -->
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <div class="max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-white mb-4">Ready to Transform Your Real Estate Business?</h3>
                <p class="text-slate-300 mb-8">Join 500+ UAE real estate professionals who never miss another lead</p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#roi-calculator" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" data-cta-track="problem-solution-calculator">
                        <i class="uil uil-calculator text-lg mr-3"></i>
                        Calculate Your ROI
                    </a>
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="problem-solution-call">
                        <i class="uil uil-phone text-lg mr-3"></i>
                        Speak with Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Hover animations for problem/solution cards */
.problem-solution-card {
    transition: all 0.3s ease;
}

.problem-solution-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

/* Pulse animation for impact metrics */
@keyframes pulse-glow {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}

.impact-metric {
    animation: pulse-glow 2s ease-in-out infinite;
}
</style>