@php
try {
    $comprehensiveFeatures = json_decode(file_get_contents(resource_path('data/comprehensive-features.json')), true);
    $experienceData = $comprehensiveFeatures['customer_experience'] ?? [];
} catch (Exception $e) {
    $experienceData = [
        'title' => 'Superior Customer Experience Engine',
        'subtitle' => 'Delight Every Customer',
        'description' => 'Advanced features designed to exceed customer expectations and build lasting relationships',
        'features' => []
    ];
}
@endphp

<!-- Customer Experience Section - Journey Timeline Style -->
<section id="customer-experience" class="relative py-32 overflow-hidden" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 100%);">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(30deg, var(--voip-link) 12%, transparent 12.5%, transparent 87%, var(--voip-link) 87.5%, var(--voip-link)), linear-gradient(150deg, var(--voip-link) 12%, transparent 12.5%, transparent 87%, var(--voip-link) 87.5%, var(--voip-link)); background-size: 80px 140px;"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-heart text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $experienceData['subtitle'] ?? 'Delight Every Customer' }}</span>
            </div>
            <h2 class="text-6xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $experienceData['title'] ?? 'Superior Customer Experience Engine' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $experienceData['description'] ?? 'Advanced features designed to exceed customer expectations and build lasting relationships' }}
            </p>
        </div>

        <!-- Customer Journey Timeline -->
        <div class="relative mb-20 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <!-- Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 rounded-full" style="background: linear-gradient(to bottom, var(--voip-primary), var(--voip-link), var(--voip-primary));"></div>
            
            <div class="space-y-16">
                @foreach(['Initial Contact', 'Active Engagement', 'Issue Resolution', 'Follow-up Care'] as $index => $stage)
                <div class="relative flex items-center {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }}">
                    <!-- Timeline Node -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-16 h-16 rounded-full border-4 border-white flex items-center justify-center z-10" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <span class="text-white font-bold text-lg">{{ $index + 1 }}</span>
                    </div>
                    
                    <!-- Content Card -->
                    <div class="w-5/12 {{ $index % 2 == 0 ? 'pr-16' : 'pl-16' }}">
                        <div class="p-8 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/30" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(10px);" onmouseover="this.style.transform='scale(1.02)'; this.style.boxShadow='0 20px 40px rgba(30, 192, 141, 0.2)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
                            <h4 class="text-2xl font-bold text-white mb-4">{{ $stage }}</h4>
                            <p class="text-slate-300 text-base leading-relaxed mb-4">
                                @if($index == 0)
                                    Customer reaches out through any channel - phone, chat, email, or social media. Our AI instantly recognizes them and loads their complete history.
                                @elseif($index == 1)
                                    AI personalizes the conversation based on customer preferences, past interactions, and current context. Every response feels tailored and relevant.
                                @elseif($index == 2)
                                    89% of issues resolved instantly without human intervention. Complex cases seamlessly escalate to specialists with full context preserved.
                                @else
                                    Proactive follow-up ensures satisfaction. AI schedules check-ins, renewal reminders, and identifies opportunities for additional value.
                                @endif
                            </p>
                            <div class="flex items-center space-x-2">
                                <div class="flex-1 h-2 bg-white/10 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full transition-all duration-1000" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: {{ ($index + 1) * 25 }}%;"></div>
                                </div>
                                <span class="text-white text-sm font-medium">{{ ($index + 1) * 25 }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Experience Features Grid -->
        <div class="grid lg:grid-cols-2 gap-12">
            @foreach($experienceData['features'] ?? [] as $index => $feature)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $feature['delay'] ?? ($index * 0.2 + 0.8) }}s">
                <div class="relative p-8 rounded-3xl border border-white/10 h-full transition-all duration-700" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-10px) rotateX(5deg)'; this.style.boxShadow='0 30px 60px rgba(30, 192, 141, 0.2)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0) rotateX(0deg)'; this.style.boxShadow='none'">
                    
                    <!-- 3D Icon Effect -->
                    <div class="relative mb-8">
                        <div class="w-24 h-24 rounded-3xl flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                            <i class="{{ $feature['icon'] ?? 'uil uil-heart' }} text-4xl text-white relative z-10"></i>
                            <!-- Shimmer effect -->
                            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12"></div>
                        </div>
                        <!-- Floating particles -->
                        <div class="absolute -top-2 -right-2 w-4 h-4 rounded-full animate-bounce" style="background-color: var(--voip-link); animation-delay: 0.5s;"></div>
                        <div class="absolute -bottom-1 -left-1 w-3 h-3 rounded-full animate-bounce" style="background-color: var(--voip-primary); animation-delay: 1s;"></div>
                    </div>
                    
                    <!-- Feature Content -->
                    <h4 class="text-3xl font-bold text-white mb-4 group-hover:text-white transition-colors duration-300">{{ $feature['title'] ?? 'Feature Title' }}</h4>
                    <p class="text-slate-300 text-lg leading-relaxed mb-6">{{ $feature['description'] ?? 'Feature description' }}</p>
                    
                    <!-- Enhanced Details -->
                    @if(isset($feature['details']))
                    <div class="mb-6 p-6 rounded-2xl border border-white/5" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(5px);">
                        <h6 class="text-white text-sm font-bold mb-3 uppercase tracking-wide flex items-center">
                            <i class="uil uil-cog text-sm mr-2" style="color: var(--voip-link);"></i>
                            How It Works
                        </h6>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $feature['details'] }}</p>
                    </div>
                    @endif
                    
                    <!-- Customer Impact -->
                    @if(isset($feature['benefit']))
                    <div class="flex items-start space-x-4 p-4 rounded-xl" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(22, 47, 58, 0.05) 100%);">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center" style="background-color: var(--voip-link);">
                            <i class="uil uil-smile text-sm text-white"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-sm font-bold mb-2">Customer Impact</h6>
                            <p class="text-base" style="color: var(--voip-link);">{{ $feature['benefit'] }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>