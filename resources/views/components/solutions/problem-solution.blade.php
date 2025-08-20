@php
// Dynamically determine industry from URL path
$currentPath = request()->path();
$industry = 'real-estate'; // Default fallback
if (str_contains($currentPath, 'spa-massage')) {
    $industry = 'spa-massage';
} elseif (str_contains($currentPath, 'real-estate')) {
    $industry = 'real-estate';
}

$problemsData = json_decode(file_get_contents(resource_path("data/solutions/{$industry}/problems.json")), true);
$sectionData = $problemsData['section'] ?? [];
$problems = $problemsData['problems'] ?? [];
$solutions = $problemsData['solutions'] ?? [];

// Box height parameter - can be overridden by parent page
$boxHeight = $boxHeight ?? '250px';
$heightClass = "lg:h-[{$boxHeight}]";
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
        <div class="grid lg:grid-cols-2 gap-12 items-stretch">
            
            <!-- Problems Column -->
            <div class="wow animate__animated animate__fadeInLeft flex flex-col" data-wow-delay="0.2s">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                        <i class="uil uil-times text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Current Problems</h3>
                    <p class="text-slate-400">What's costing you leads right now</p>
                </div>
                
                <!-- Problems List -->
                <div class="space-y-6 flex-1">
                    @foreach($problems as $problem)
                    <div class="relative p-6 rounded-2xl border-2 transition-all duration-300 hover:scale-105 hover:shadow-2xl {{ $heightClass }}" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.12) 100%); border-color: rgba(30, 192, 141, 0.25); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.15); display: flex; flex-direction: column;">
                        <!-- Warning Badge -->
                        <div class="absolute -top-3 -right-3 w-8 h-8 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); box-shadow: 0 4px 12px rgba(239, 68, 68, 0.4);">
                            <i class="uil uil-times text-white text-sm"></i>
                        </div>
                        
                        <div class="flex items-start space-x-4 flex-1">
                            <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); box-shadow: 0 6px 15px rgba(239, 68, 68, 0.3);">
                                <i class="uil {{ $problem['icon'] ?? 'uil-times' }} text-xl text-white"></i>
                            </div>
                            <div class="flex-1 flex flex-col">
                                <h4 class="text-xl font-bold text-white mb-3">{{ $problem['title'] ?? 'Problem Title' }}</h4>
                                <p class="text-slate-200 leading-relaxed mb-4 flex-1">{{ $problem['description'] ?? 'Problem description' }}</p>
                                <div class="inline-flex items-center px-4 py-2 rounded-full text-white font-semibold text-sm mt-auto" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 12px rgba(30, 192, 141, 0.3);">
                                    <i class="uil uil-chart-down text-sm mr-2"></i>
                                    {{ $problem['impact'] ?? 'Impact metric' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Solutions Column -->
            <div class="wow animate__animated animate__fadeInRight flex flex-col" data-wow-delay="0.4s">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <i class="uil uil-check text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Sawtic AI Solutions</h3>
                    <p class="text-slate-400">How we solve each challenge</p>
                </div>
                
                <!-- Solutions List -->
                <div class="space-y-6 flex-1">
                    @foreach($solutions as $solution)
                    <div class="relative p-6 rounded-2xl border-2 transition-all duration-300 hover:scale-105 hover:shadow-2xl {{ $heightClass }}" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(29, 120, 97, 0.1) 100%); border-color: rgba(30, 192, 141, 0.4); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.2); display: flex; flex-direction: column;">
                        <!-- Success Badge -->
                        <div class="absolute -top-3 -right-3 w-8 h-8 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 12px rgba(30, 192, 141, 0.4);">
                            <i class="uil uil-check text-white text-sm"></i>
                        </div>
                        
                        <div class="flex items-start space-x-4 flex-1">
                            <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 6px 15px rgba(30, 192, 141, 0.3);">
                                <i class="uil {{ $solution['icon'] ?? 'uil-check' }} text-xl text-white"></i>
                            </div>
                            <div class="flex-1 flex flex-col">
                                <h4 class="text-xl font-bold text-white mb-3">{{ $solution['title'] ?? 'Solution Title' }}</h4>
                                <p class="text-slate-200 leading-relaxed mb-4 flex-1">{{ $solution['description'] ?? 'Solution description' }}</p>
                                <div class="flex items-center justify-between mt-auto">
                                    <div class="inline-flex items-center px-4 py-2 rounded-full text-white font-semibold text-sm" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 12px rgba(30, 192, 141, 0.3);">
                                        <i class="uil uil-chart-growth text-sm mr-2"></i>
                                        {{ $solution['result'] ?? 'Result metric' }}
                                    </div>
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
                @php
                $ctaTitle = 'Ready to Transform Your Real Estate Business?';
                $ctaDesc = 'Join 500+ UAE real estate professionals who never miss another lead';
                if (str_contains(request()->path(), 'spa-massage')) {
                    $ctaTitle = 'Ready to Transform Your Spa & Wellness Business?';
                    $ctaDesc = 'Join 300+ UAE spa & wellness centers who never miss another booking';
                }
                @endphp
                <h3 class="text-2xl font-bold text-white mb-4">{{ $ctaTitle }}</h3>
                <p class="text-slate-300 mb-8">{{ $ctaDesc }}</p>
                
                <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center">
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