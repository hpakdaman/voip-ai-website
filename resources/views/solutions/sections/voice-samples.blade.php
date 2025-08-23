@php
$sectionData = $data['section'] ?? [];
// Handle different data structures - some use 'voice_samples', government uses 'demos' in section
$voiceSamples = $data['voice_samples'] ?? $sectionData['demos'] ?? [];
@endphp

<!-- Voice Samples Section - Dashboard Style Interactive Player -->
<section id="voice-samples" class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <!-- Command Center Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, transparent 60%), radial-gradient(circle at 30% 80%, rgba(29, 120, 97, 0.1) 0%, transparent 50%);"></div>
        <!-- Tech Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(30, 192, 141, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(30, 192, 141, 0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    <div class="container relative z-10">
        <!-- Dashboard Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp">
            <div class="inline-flex items-center px-8 py-4 rounded-2xl border border-white/20 mb-6" style="background: rgba(12, 27, 39, 0.8); backdrop-filter: blur(15px); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.2);">
                <div class="w-3 h-3 rounded-full bg-green-400 mr-3 animate-pulse"></div>
                <i class="uil uil-desktop text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-bold">{{ $sectionData['badge'] ?? 'AI Command Center' }}</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                {{ $sectionData['headline'] ?? $sectionData['title'] ?? 'See Sawtic AI' }}
                <span style="color: var(--voip-link);">In Action</span>
            </h2>
            
            <p class="text-slate-300 text-xl leading-relaxed">{{ $sectionData['subheadline'] ?? $sectionData['description'] ?? 'Real conversations showing how our AI serves clients with empathy, accuracy, and professionalism' }}</p>
        </div>
        
        <!-- Interactive Voice Dashboard -->
        @if(!empty($voiceSamples))
        <div class="max-w-6xl mx-auto">
            <!-- Dashboard Layout -->
            <div class="grid lg:grid-cols-3 gap-8 mb-12">
                <!-- Left Panel: Demo Selection -->
                <div class="lg:col-span-1 wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-full p-6 rounded-2xl border border-white/20" style="background: linear-gradient(135deg, rgba(12, 27, 39, 0.8) 0%, rgba(22, 47, 58, 0.6) 100%); backdrop-filter: blur(10px);">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil uil-list-ul text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white">Demo Library</h3>
                        </div>
                        
                        <div class="space-y-3" id="demo-playlist">
                            @foreach($voiceSamples as $index => $sample)
                            <div class="demo-selector p-4 rounded-xl border border-white/10 cursor-pointer transition-all duration-300 hover:border-white/30 {{ $index === 0 ? 'active-demo' : '' }}" 
                                 data-demo-index="{{ $index }}"
                                 style="background: rgba(30, 192, 141, {{ $index === 0 ? '0.2' : '0.05' }});">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3" style="background: {{ $index === 0 ? 'var(--voip-link)' : 'rgba(255, 255, 255, 0.1)' }};">
                                        <i class="uil {{ $index === 0 ? 'uil-play' : 'uil-pause' }} text-white text-sm play-icon"></i>
                                    </div>
                                    <div>
                                        <div class="text-white font-medium text-sm">{{ $sample['title'] ?? 'Voice Sample' }}</div>
                                        <div class="text-slate-400 text-xs">{{ $sample['duration'] ?? '1:30' }} • {{ isset($sample['tags'][0]) ? $sample['tags'][0] : 'Government Services' }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Right Panel: Player & Visualization -->
                <div class="lg:col-span-2 wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
                    <div class="p-8 rounded-2xl border border-white/20 h-full" style="background: linear-gradient(135deg, rgba(12, 27, 39, 0.95) 0%, rgba(22, 47, 58, 0.8) 100%); backdrop-filter: blur(15px);">
                        <!-- Current Demo Header -->
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-2" id="current-demo-title">{{ $voiceSamples[0]['title'] ?? 'Government Service Call' }}</h3>
                                <p class="text-slate-400" id="current-demo-scenario">{{ $voiceSamples[0]['description'] ?? $voiceSamples[0]['scenario'] ?? 'AI assisting citizen with government services' }}</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 rounded-full bg-green-400 mr-2 animate-pulse"></div>
                                    <span class="text-green-400 text-sm font-medium">Live Recording</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Waveform Visualization -->
                        <div class="mb-8 p-6 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.05);">
                            <div class="flex items-center justify-center h-24">
                                <!-- Simulated Waveform -->
                                <div class="flex items-center space-x-1">
                                    @for($i = 0; $i < 50; $i++)
                                    <div class="w-1 bg-white/20 rounded-full waveform-bar" style="height: {{ rand(8, 40) }}px; animation-delay: {{ $i * 0.1 }}s;"></div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        
                        <!-- Audio Player Controls -->
                        @if(isset($voiceSamples[0]['audio_file']))
                        <div class="mb-8">
                            <audio id="main-audio-player" class="w-full voip-audio-player" preload="metadata">
                                <source src="{{ asset($voiceSamples[0]['audio_file']) }}" type="audio/mpeg">
                            </audio>
                        </div>
                        @endif
                        
                        <!-- Demo Features -->
                        <div class="grid grid-cols-2 gap-6" id="current-demo-features">
                            <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                                <div class="text-slate-400 text-sm mb-2">Key Features</div>
                                <div class="space-y-1" id="demo-highlights">
                                    @if(isset($voiceSamples[0]['highlights']))
                                        @foreach(array_slice($voiceSamples[0]['highlights'], 0, 3) as $highlight)
                                        <div class="flex items-center text-sm text-white">
                                            <i class="uil uil-check text-xs mr-2" style="color: var(--voip-link);"></i>
                                            {{ $highlight }}
                                        </div>
                                        @endforeach
                                    @elseif(isset($voiceSamples[0]['tags']))
                                        @foreach(array_slice($voiceSamples[0]['tags'], 0, 3) as $tag)
                                        <div class="flex items-center text-sm text-white">
                                            <i class="uil uil-check text-xs mr-2" style="color: var(--voip-link);"></i>
                                            {{ $tag }}
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            
                            <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                                <div class="text-slate-400 text-sm mb-2">Call Metrics</div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Response Time</span>
                                        <span style="color: var(--voip-link);">0.3s</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Accuracy</span>
                                        <span style="color: var(--voip-link);">98.5%</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-white">Language</span>
                                        <span style="color: var(--voip-link);" id="demo-language">{{ isset($voiceSamples[0]['tags'][0]) ? $voiceSamples[0]['tags'][0] : 'English' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        <!-- Command Center CTA -->
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <div class="max-w-4xl mx-auto p-8 rounded-2xl border border-white/20" style="background: linear-gradient(135deg, rgba(12, 27, 39, 0.8) 0%, rgba(22, 47, 58, 0.6) 100%); backdrop-filter: blur(15px);">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mr-4" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <i class="uil uil-rocket text-xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Launch Your AI Command Center</h3>
                </div>
                <p class="text-slate-300 mb-8 text-lg">Experience these powerful voice capabilities in your own business environment.</p>
                
                <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center">
                    <a href="{{ route('demo.booking') }}" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="voice-dashboard-demo">
                        <i class="uil uil-desktop text-xl mr-3"></i>
                        Get Full Dashboard Access
                    </a>
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="voice-dashboard-call">
                        <i class="uil uil-phone text-xl mr-3"></i>
                        Call: +971 4 864 7245
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Waveform Animation */
.waveform-bar {
    animation: waveform 2s ease-in-out infinite alternate;
}

@keyframes waveform {
    0% { opacity: 0.3; transform: scaleY(0.3); }
    100% { opacity: 1; transform: scaleY(1); }
}

/* Dashboard Interactions */
.demo-selector.active-demo {
    border-color: var(--voip-link) !important;
    transform: translateX(4px);
}

.demo-selector:hover {
    transform: translateX(2px);
}

/* Audio Player Styling */
.voip-audio-player {
    accent-color: var(--voip-link);
    border-radius: 12px;
    background: rgba(30, 192, 141, 0.1);
}
</style>

<script>
// Voice Dashboard Interactive Controller
document.addEventListener('DOMContentLoaded', function() {
    const demoSelectors = document.querySelectorAll('.demo-selector');
    const audioPlayer = document.getElementById('main-audio-player');
    const currentTitle = document.getElementById('current-demo-title');
    const currentScenario = document.getElementById('current-demo-scenario');
    const demoLanguage = document.getElementById('demo-language');
    const demoHighlights = document.getElementById('demo-highlights');
    
    // Voice samples data from PHP (simplified for demo)
    const voiceSamples = @json($voiceSamples ?? []);
    
    // Demo selector interactions
    demoSelectors.forEach((selector, index) => {
        selector.addEventListener('click', function() {
            // Update active state
            demoSelectors.forEach(s => {
                s.classList.remove('active-demo');
                s.style.background = 'rgba(30, 192, 141, 0.05)';
                s.querySelector('.play-icon').className = 'uil uil-pause text-white text-sm play-icon';
                s.querySelector('.w-8').style.background = 'rgba(255, 255, 255, 0.1)';
            });
            
            // Set current as active
            this.classList.add('active-demo');
            this.style.background = 'rgba(30, 192, 141, 0.2)';
            this.querySelector('.play-icon').className = 'uil uil-play text-white text-sm play-icon';
            this.querySelector('.w-8').style.background = 'var(--voip-link)';
            
            // Update main player content
            if (voiceSamples[index]) {
                const sample = voiceSamples[index];
                currentTitle.textContent = sample.title || 'Voice Sample';
                currentScenario.textContent = sample.description || sample.scenario || 'Call Scenario';
                demoLanguage.textContent = (sample.tags && sample.tags[0]) || sample.language || 'English';
                
                // Update audio source
                if (sample.audio_file && audioPlayer) {
                    audioPlayer.src = `/assets/${sample.audio_file}`;
                    audioPlayer.load();
                }
                
                // Update highlights
                if (demoHighlights) {
                    demoHighlights.innerHTML = '';
                    const highlights = sample.highlights || sample.tags || [];
                    highlights.slice(0, 3).forEach(highlight => {
                        const div = document.createElement('div');
                        div.className = 'flex items-center text-sm text-white';
                        div.innerHTML = `<i class="uil uil-check text-xs mr-2" style="color: var(--voip-link);"></i>${highlight}`;
                        demoHighlights.appendChild(div);
                    });
                }
            }
        });
    });
    
    // Waveform animation on audio play
    if (audioPlayer) {
        const waveformBars = document.querySelectorAll('.waveform-bar');
        
        audioPlayer.addEventListener('play', function() {
            waveformBars.forEach(bar => {
                bar.style.animationPlayState = 'running';
                bar.style.opacity = '1';
            });
        });
        
        audioPlayer.addEventListener('pause', function() {
            waveformBars.forEach(bar => {
                bar.style.animationPlayState = 'paused';
                bar.style.opacity = '0.3';
            });
        });
    }
    
    // Track demo interactions
    demoSelectors.forEach((selector, index) => {
        selector.addEventListener('click', function() {
            console.log(`Demo selected: ${index + 1}`);
        });
    });
});
</script>