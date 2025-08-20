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
                <div class="h-full p-6 rounded-2xl border border-red-400/20 transition-all duration-300 hover:border-red-400/40" style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <!-- Problem Icon -->
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                        <i class="uil {{ $problem['icon'] ?? 'uil-times' }} text-2xl text-white"></i>
                    </div>
                    
                    <!-- Problem Content -->
                    <h3 class="text-xl font-bold text-white mb-4">{{ $problem['title'] ?? 'Problem Title' }}</h3>
                    <p class="text-slate-300 mb-6 leading-relaxed">{{ $problem['description'] ?? 'Problem description' }}</p>
                    
                    <!-- Problem Impact -->
                    @if(isset($problem['impact']))
                    <div class="p-4 rounded-xl border border-red-400/20 mb-4" style="background: rgba(239, 68, 68, 0.05);">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 text-sm">Business Impact</span>
                            <span class="text-red-400 font-bold">{{ $problem['impact'] }}</span>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Problem Examples -->
                    @if(isset($problem['examples']))
                    <div class="space-y-2">
                        @foreach(array_slice($problem['examples'], 0, 3) as $example)
                        <div class="flex items-start text-sm text-slate-400">
                            <i class="uil uil-minus text-red-400 text-xs mr-2 mt-1"></i>
                            {{ $example }}
                        </div>
                        @endforeach
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
                    <p class="text-slate-300 mb-6 leading-relaxed">{{ $solution['description'] ?? 'Solution description' }}</p>
                    
                    <!-- Solution Benefits -->
                    @if(isset($solution['benefits']))
                    <ul class="space-y-2 mb-6 flex-1">
                        @foreach($solution['benefits'] as $benefit)
                        <li class="flex items-center text-sm text-slate-400">
                            <i class="uil uil-check text-xs mr-2" style="color: var(--voip-link);"></i>
                            {{ $benefit }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    
                    <!-- Solution Results -->
                    @if(isset($solution['result']))
                    <div class="p-4 rounded-xl border border-white/10 mt-auto" style="background: rgba(30, 192, 141, 0.05);">
                        <div class="flex items-center justify-between">
                            <span class="text-slate-400 text-sm">Result</span>
                            <span class="font-bold text-white" style="color: var(--voip-link);">{{ $solution['result'] }}</span>
                        </div>
                        @if(isset($solution['result_description']))
                        <div class="text-xs text-slate-400 mt-1">{{ $solution['result_description'] }}</div>
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