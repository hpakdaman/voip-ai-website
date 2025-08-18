@php
try {
    $teamData = json_decode(file_get_contents(resource_path('data/about/team-values.json')), true);
    $sectionData = $teamData['section'] ?? [];
    $values = $teamData['values'] ?? [];
    $teamStats = $teamData['team_stats'] ?? [];
    $expertiseAreas = $teamData['expertise_areas'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'Our Core Values & Team Excellence',
        'subtitle' => 'Team & Values',
        'description' => 'Meet the passionate professionals behind Dubai\'s leading AI communication platform.'
    ];
    $values = [];
    $teamStats = [];
    $expertiseAreas = [];
}
@endphp

<!-- Team & Values Section - Hexagonal Grid Design -->
<section class="relative py-32" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 100%);">
    <div class="absolute inset-0">
        <!-- Dynamic Mesh Background -->
        <div class="absolute inset-0 opacity-10" style="background-image: 
            radial-gradient(circle at 20% 80%, rgba(30, 192, 141, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(30, 192, 141, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(30, 192, 141, 0.08) 0%, transparent 50%);"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-users-alt text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['subtitle'] ?? 'Team & Values' }}</span>
            </div>
            <h2 class="text-5xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $sectionData['title'] ?? 'Our Core Values & Team Excellence' }}
            </h2>
            <p class="text-slate-300 max-w-4xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'Meet the passionate professionals behind Dubai\'s leading AI communication platform, united by shared values and commitment to excellence.' }}
            </p>
        </div>

        <!-- Team Statistics Dashboard -->
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 mb-20">
            @php
            $statItems = [
                ['key' => 'total_members', 'label' => 'Team Members', 'icon' => 'uil uil-users-alt'],
                ['key' => 'ai_specialists', 'label' => 'AI Specialists', 'icon' => 'uil uil-robot'],
                ['key' => 'dubai_experience', 'label' => 'Combined Experience', 'icon' => 'uil uil-clock'],
                ['key' => 'certifications', 'label' => 'Professional Certifications', 'icon' => 'uil uil-award']
            ];
            @endphp
            
            @foreach($statItems as $index => $stat)
            <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.4 + ($index * 0.1) }}s">
                <div class="relative mb-6">
                    <!-- Animated Ring -->
                    <div class="w-24 h-24 mx-auto rounded-full flex items-center justify-center relative" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);">
                        <i class="{{ $stat['icon'] }} text-3xl text-white relative z-10"></i>
                        <!-- Pulse Ring -->
                        <div class="absolute inset-0 rounded-full animate-ping" style="background: rgba(30, 192, 141, 0.4);"></div>
                    </div>
                </div>
                <div class="text-3xl font-bold text-white mb-2">{{ $teamStats[$stat['key']] ?? '0' }}</div>
                <div class="text-slate-300 text-sm">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>

        <!-- Core Values Grid -->
        <div class="grid lg:grid-cols-2 gap-8 mb-20">
            @foreach($values as $index => $value)
            <div class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.8 + ($index * 0.2) }}s">
                <div class="relative p-8 rounded-3xl border border-white/10 h-full transition-all duration-700" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.2) 100%); backdrop-filter: blur(10px);" onmouseover="this.style.borderColor='var(--voip-link)'; this.style.transform='translateY(-15px) rotateX(2deg)'; this.style.boxShadow='0 35px 70px rgba(30, 192, 141, 0.25)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0) rotateX(0deg)'; this.style.boxShadow='none'">
                    
                    <!-- Value Icon with Animation -->
                    <div class="relative mb-8">
                        <div class="w-20 h-20 rounded-3xl flex items-center justify-center relative overflow-hidden" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 35px rgba(30, 192, 141, 0.4);">
                            <i class="{{ $value['icon'] ?? 'uil uil-star' }} text-3xl text-white relative z-10"></i>
                            <!-- Sliding Shine Effect -->
                            <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/30 to-transparent transform skew-x-12"></div>
                        </div>
                    </div>
                    
                    <!-- Value Content -->
                    <h4 class="text-2xl font-bold text-white mb-4 group-hover:text-white transition-colors duration-300">
                        {{ $value['title'] ?? 'Core Value' }}
                    </h4>
                    <p class="text-slate-300 text-base leading-relaxed">
                        {{ $value['description'] ?? 'Value description highlighting our commitment to excellence.' }}
                    </p>
                    
                    <!-- Priority Indicator -->
                    <div class="absolute top-6 right-6 w-10 h-10 rounded-full flex items-center justify-center text-sm font-bold text-slate-300" style="background: rgba(30, 192, 141, 0.2); backdrop-filter: blur(5px);">
                        {{ $value['priority'] ?? '1' }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Expertise Areas -->
        <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="1.6s">
            <h3 class="text-3xl font-bold text-white mb-8">Our Areas of Expertise</h3>
            <div class="flex flex-wrap items-center justify-center gap-4 max-w-4xl mx-auto">
                @foreach($expertiseAreas as $index => $area)
                <div class="px-6 py-3 rounded-full border border-white/20 transition-all duration-300 hover:border-white/40 hover:scale-105" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(5px);">
                    <span class="text-white font-medium text-sm">{{ $area }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>