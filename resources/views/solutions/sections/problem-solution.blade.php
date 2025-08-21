@php
$sectionData = $data['section'] ?? [];
$problems = $data['problems'] ?? [];
$solutions = $data['solutions'] ?? [];
@endphp

<!-- Problem-Solution Section -->
<section class="relative py-24" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(239, 68, 68, 0.1);">
                <i class="uil uil-exclamation-triangle text-lg mr-3 text-red-400"></i>
                <span class="text-white font-medium">{{ $sectionData['problems_badge'] ?? 'Common Business Problems' }}</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                {{ $sectionData['problems_title'] ?? 'Stop Losing Business to' }}
                <span class="text-red-400">{{ $sectionData['problems_highlighted'] ?? 'Missed Calls' }}</span>
            </h2>
        </div>
        
        <!-- Problems Grid -->
        @if(!empty($problems))
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            @foreach($problems as $index => $problem)
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ ($index * 0.2) + 0.1 }}s">
                <div class="h-full p-6 rounded-2xl border border-red-400/20 transition-all duration-300 hover:border-red-400/40 flex flex-col" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <!-- Problem Icon -->
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                        <i class="uil {{ $problem['icon'] ?? 'uil-times' }} text-2xl text-white"></i>
                    </div>
                    
                    <!-- Problem Content -->
                    <h3 class="text-xl font-bold text-white mb-4">{{ $problem['title'] ?? 'Problem Title' }}</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">{{ $problem['description'] ?? 'Problem description' }}</p>
                    
                    <!-- Problem Pain Points (Clean Structure) -->
                    @if(isset($problem['pain_points']))
                    <div class="space-y-3 mb-6 flex-1">
                        @foreach(array_slice($problem['pain_points'], 0, 4) as $painPoint)
                        <div class="flex items-start text-sm text-slate-400">
                            <i class="uil uil-times-circle text-red-400 text-sm mr-3 mt-0.5 flex-shrink-0"></i>
                            <span class="leading-relaxed">{{ $painPoint }}</span>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    
                    <!-- Business Impact - Stuck to Bottom -->
                    @if(isset($problem['impact']))
                    <div class="p-4 rounded-xl border border-red-400/20 mt-auto" style="background: rgba(239, 68, 68, 0.05);">
                        <div class="text-center">
                            <div class="text-slate-400 text-xs font-medium uppercase tracking-wide mb-2">Business Impact</div>
                            <div class="text-red-400 font-bold text-lg leading-tight">{{ $problem['impact'] }}</div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif
        
        <!-- Solutions Transformation Arrow -->
        <div class="text-center mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <div class="inline-flex items-center px-8 py-4 rounded-full" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                <span class="text-white font-bold text-lg mr-4">✓ Sawtic AI Transforms</span>
                <i class="uil uil-arrow-down text-white text-2xl"></i>
            </div>
        </div>
        
        <!-- Solutions Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                {{ $sectionData['solutions_title'] ?? 'How Sawtic AI' }}
                <span style="color: var(--voip-link);">{{ $sectionData['solutions_highlighted'] ?? 'Solves Everything' }}</span>
            </h2>
        </div>
        
        <!-- Solutions Grid -->
        @if(!empty($solutions))
        <div class="grid lg:grid-cols-3 gap-8">
            @foreach($solutions as $index => $solution)
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ ($index * 0.2) + 0.6 }}s">
                <div class="h-full p-6 rounded-2xl border border-white/10 transition-all duration-300 hover:scale-105 hover:border-white/20 flex flex-col" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <!-- Solution Icon -->
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <i class="uil {{ $solution['icon'] ?? 'uil-check' }} text-2xl text-white"></i>
                    </div>
                    
                    <!-- Solution Content -->
                    <h3 class="text-xl font-bold text-white mb-4">{{ $solution['title'] ?? 'Solution Title' }}</h3>
                    <p class="text-slate-300 text-sm mb-6 leading-relaxed">{{ $solution['description'] ?? 'Solution description' }}</p>
                    
                    <!-- Solution Benefits -->
                    @if(isset($solution['benefits']))
                    <ul class="space-y-3 mb-6 flex-1">
                        @foreach($solution['benefits'] as $benefit)
                        <li class="flex items-start text-sm text-slate-300">
                            <i class="uil uil-check text-sm mr-3 mt-0.5 flex-shrink-0" style="color: var(--voip-link);"></i>
                            <span>{{ $benefit }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    
                    <!-- Solution Results -->
                    @if(isset($solution['result']))
                    <div class="p-4 rounded-xl border border-white/10 mt-auto text-center" style="background: rgba(30, 192, 141, 0.05);">
                        <div class="text-xl font-bold mb-1" style="color: var(--voip-link);">{{ $solution['result'] }}</div>
                        <div class="text-slate-400 text-xs font-medium uppercase tracking-wide">Result</div>
                        @if(isset($solution['result_description']))
                        <div class="text-xs text-slate-400 mt-2">{{ $solution['result_description'] }}</div>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>