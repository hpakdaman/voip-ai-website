@php
try {
    $storyData = json_decode(file_get_contents(resource_path('data/about/company-story.json')), true);
    $sectionData = $storyData['section'] ?? [];
    $timeline = $storyData['timeline'] ?? [];
} catch (Exception $e) {
    $sectionData = [
        'title' => 'Our Journey to AI Excellence',
        'subtitle' => 'Company Story',
        'description' => 'From a vision in 2019 to becoming Dubai\'s leading AI communication platform.'
    ];
    $timeline = [];
}
@endphp

<!-- Company Story Section - Vertical Timeline Design -->
<section class="relative py-32" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0">
        <!-- Diagonal Gradient Overlay -->
        <div class="absolute inset-0" style="background: linear-gradient(45deg, #162f3a 0%, #1a3a47 50%, #162f3a 100%); opacity: 0.8;"></div>
        <!-- Subtle Texture Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 25% 25%, rgba(30, 192, 141, 0.2) 2px, transparent 2px), radial-gradient(circle at 75% 75%, rgba(30, 192, 141, 0.1) 1px, transparent 1px); background-size: 60px 60px, 40px 40px;"></div>
    </div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-history text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['subtitle'] ?? 'Company Story' }}</span>
            </div>
            <h2 class="text-5xl font-bold text-white mb-8 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $sectionData['title'] ?? 'Our Journey to AI Excellence' }}
            </h2>
            <p class="text-slate-300 max-w-3xl mx-auto text-xl leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'From a vision in 2019 to becoming Dubai\'s leading AI communication platform, discover how we\'re transforming business communications across the UAE.' }}
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="relative max-w-6xl mx-auto">
            <!-- Central Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 rounded-full" style="background: linear-gradient(to bottom, var(--voip-primary), var(--voip-link), var(--voip-primary));"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-24">
                @foreach($timeline as $index => $item)
                <div class="relative flex items-center {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} wow animate__animated animate__fadeInUp" data-wow-delay="{{ 0.4 + ($index * 0.2) }}s">
                    
                    <!-- Timeline Node -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white flex items-center justify-center z-10" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.4);">
                        <span class="text-white font-bold text-lg">{{ substr($item['year'] ?? '2024', -2) }}</span>
                    </div>
                    
                    <!-- Content Card -->
                    <div class="w-5/12 {{ $index % 2 == 0 ? 'pr-16' : 'pl-16' }}">
                        <div class="relative p-8 rounded-3xl border border-white/10 transition-all duration-500 hover:border-white/30" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.4) 100%); backdrop-filter: blur(10px);" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 25px 50px rgba(30, 192, 141, 0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                            
                            <!-- Year Badge -->
                            <div class="absolute -top-4 {{ $index % 2 == 0 ? 'left-6' : 'right-6' }} px-4 py-2 rounded-full text-sm font-bold text-white" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                {{ $item['year'] ?? '2024' }}
                            </div>
                            
                            <!-- Milestone Badge -->
                            <div class="inline-flex items-center px-3 py-1 rounded-full mb-4 text-xs font-semibold uppercase tracking-wide" style="background: rgba(30, 192, 141, 0.2); color: var(--voip-link);">
                                {{ $item['milestone'] ?? 'Milestone' }}
                            </div>
                            
                            <!-- Content -->
                            <h4 class="text-2xl font-bold text-white mb-4">{{ $item['title'] ?? 'Achievement Title' }}</h4>
                            <p class="text-slate-300 text-base leading-relaxed">{{ $item['description'] ?? 'Achievement description' }}</p>
                            
                            <!-- Progress Indicator -->
                            <div class="mt-6 flex items-center space-x-2">
                                <div class="flex-1 h-1 bg-white/10 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full transition-all duration-1000" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: {{ (($index + 1) / count($timeline)) * 100 }}%;"></div>
                                </div>
                                <span class="text-white text-sm font-medium">{{ round((($index + 1) / count($timeline)) * 100) }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Mission & Vision Cards -->
        <div class="grid lg:grid-cols-2 gap-8 mt-20 max-w-5xl mx-auto">
            <!-- Mission -->
            <div class="relative p-8 rounded-3xl border border-white/10 wow animate__animated animate__fadeInLeft" data-wow-delay="1.2s" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(15px);">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <i class="uil uil-compass text-2xl text-white"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-white mb-2">Our Mission</h4>
                        <div class="w-12 h-1 rounded-full" style="background-color: var(--voip-link);"></div>
                    </div>
                </div>
                <p class="text-slate-300 text-base leading-relaxed">
                    {{ $storyData['mission'] ?? 'To empower every Dubai business with intelligent communication solutions that drive growth, enhance customer satisfaction, and maintain the highest standards of excellence.' }}
                </p>
            </div>
            
            <!-- Vision -->
            <div class="relative p-8 rounded-3xl border border-white/10 wow animate__animated animate__fadeInRight" data-wow-delay="1.4s" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(15px);">
                <div class="flex items-start space-x-4 mb-6">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <i class="uil uil-telescope text-2xl text-white"></i>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-white mb-2">Our Vision</h4>
                        <div class="w-12 h-1 rounded-full" style="background-color: var(--voip-link);"></div>
                    </div>
                </div>
                <p class="text-slate-300 text-base leading-relaxed">
                    {{ $storyData['vision'] ?? 'To be the Middle East\'s leading AI communication platform, setting the global standard for culturally-aware business intelligence.' }}
                </p>
            </div>
        </div>
    </div>
</section>