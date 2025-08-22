@php
$heroData = $data['section'] ?? [];
$voiceDemo = $data['voice_demo'] ?? [];
@endphp

<!-- Modern Hero Section -->
<section class="relative py-24 overflow-hidden" style="background: linear-gradient(135deg, var(--voip-dark-bg) 0%, #0f172a 50%, var(--voip-dark-bg) 100%);">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <!-- Animated gradient orbs -->
        <div class="absolute top-20 left-10 w-72 h-72 opacity-20 rounded-full blur-3xl animate-pulse" style="background: radial-gradient(circle, var(--voip-link) 0%, transparent 70%);"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 opacity-15 rounded-full blur-3xl animate-pulse" style="background: radial-gradient(circle, var(--voip-primary) 0%, transparent 70%); animation-delay: 1s;"></div>
        <!-- Grid pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 25px 25px, rgba(30, 192, 141, 0.3) 2px, transparent 0), radial-gradient(circle at 75px 75px, rgba(30, 192, 141, 0.2) 1px, transparent 0); background-size: 100px 100px;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            <!-- Content Column - 7 columns -->
            <div class="lg:col-span-7">
                <!-- Industry Badge -->
                @if(isset($heroData['industry_badge']))
                <div class="inline-flex items-center px-6 py-3 rounded-full border mb-8 wow animate__animated animate__fadeInUp" 
                     style="background: rgba(30, 192, 141, 0.1); border-color: rgba(30, 192, 141, 0.3); backdrop-filter: blur(10px);" 
                     data-wow-delay="0.1s">
                    <i class="uil uil-shield-check text-lg mr-3" style="color: var(--voip-link);"></i>
                    <span class="text-white font-medium">{{ $heroData['industry_badge'] }}</span>
                </div>
                @endif
                
                <!-- Main Headlines -->
                <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    {{ $heroData['main_title'] ?? 'Transform Your Services with' }}
                    <span class="relative">
                        <span style="color: var(--voip-link);">{{ $heroData['highlighted_word'] ?? 'AI Agents' }}</span>
                        <!-- Underline animation -->
                        <div class="absolute bottom-2 left-0 w-full h-1 rounded-full animate-pulse" style="background: linear-gradient(90deg, var(--voip-primary), var(--voip-link));"></div>
                    </span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl text-slate-300 mb-10 leading-relaxed max-w-2xl wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    {{ $heroData['subtitle'] ?? 'Intelligent AI solutions that work 24/7 for your organization' }}
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 items-center mb-10 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ route('demo.booking') }}" class="group py-4 px-8 inline-flex items-center font-semibold tracking-wide duration-500 text-base text-white rounded-xl transition-all hover:scale-105" 
                       style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.3);">
                        <span>{{ $heroData['cta']['primary'] ?? 'Get Started Now' }}</span>
                        <i class="uil uil-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#voice-demos" class="py-4 px-8 inline-flex items-center font-semibold tracking-wide border duration-500 text-base text-white rounded-xl hover:bg-white/10 transition-all" 
                       style="border-color: rgba(30, 192, 141, 0.3);">
                        <i class="uil uil-play-circle mr-2"></i>
                        <span>{{ $heroData['cta']['secondary'] ?? 'Watch Demo' }}</span>
                    </a>
                </div>
                
                <!-- Trust Stats -->
                @if(isset($heroData['stats']))
                <div class="grid grid-cols-3 gap-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    @foreach($heroData['stats'] as $stat)
                    <div class="text-center p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.05); backdrop-filter: blur(10px);">
                        <div class="text-3xl font-bold text-white mb-1">{{ $stat['number'] ?? '' }}</div>
                        <div class="text-sm text-slate-400">{{ $stat['label'] ?? '' }}</div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            
            <!-- Audio Demo Column - 5 columns -->
            <div class="lg:col-span-5">
                @if(!empty($voiceDemo))
                <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
                    <!-- Demo Card -->
                    <div class="relative p-8 rounded-3xl border shadow-2xl" 
                         style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(15, 23, 42, 0.8) 100%); 
                                border-color: rgba(30, 192, 141, 0.3); 
                                backdrop-filter: blur(20px);
                                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3), 0 0 40px rgba(30, 192, 141, 0.1);">
                        
                        <!-- Floating elements -->
                        <div class="absolute top-4 right-4 w-3 h-3 rounded-full animate-ping" style="background: var(--voip-link);"></div>
                        <div class="absolute top-4 right-4 w-3 h-3 rounded-full" style="background: var(--voip-link);"></div>
                        
                        <!-- Demo Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                    <i class="uil uil-headphones text-xl text-white"></i>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Live AI Demo</div>
                                    <div class="text-slate-400 text-sm">Real conversation</div>
                                </div>
                            </div>
                            <div class="px-3 py-1 rounded-full text-xs font-medium" style="background: rgba(34, 197, 94, 0.2); color: #22c55e;">
                                ● LIVE
                            </div>
                        </div>
                        
                        <!-- Demo Title -->
                        <h3 class="text-xl font-bold text-white mb-2">{{ $voiceDemo['title'] ?? 'AI Demo' }}</h3>
                        <p class="text-slate-300 text-sm mb-6">{{ $voiceDemo['description'] ?? 'Listen to our AI in action' }}</p>
                        
                        <!-- Audio Player -->
                        <div class="voice-demo-player">
                            <!-- Hidden Audio Element -->
                            <audio id="modern-hero-audio" preload="metadata" style="display: none;">
                                <source src="{{ asset('assets/audio/solutions/government/' . ($voiceDemo['audio_file'] ?? 'demo.mp3')) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            
                            <!-- Player Interface -->
                            <div class="p-4 rounded-2xl" style="background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(30, 192, 141, 0.2);">
                                <div class="flex items-center space-x-4">
                                    <!-- Play Button -->
                                    <button id="modern-play-btn" class="w-16 h-16 rounded-2xl flex items-center justify-center transition-all duration-300 hover:scale-110 group" 
                                            style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.4);">
                                        <i id="modern-play-icon" class="uil uil-play text-2xl text-white ml-1 group-hover:scale-110 transition-transform duration-300"></i>
                                        <i id="modern-pause-icon" class="uil uil-pause text-2xl text-white hidden group-hover:scale-110 transition-transform duration-300"></i>
                                    </button>
                                    
                                    <!-- Progress Section -->
                                    <div class="flex-1">
                                        <!-- Progress Bar -->
                                        <div id="modern-progress-container" class="w-full h-2 rounded-full mb-3 cursor-pointer hover:h-3 transition-all duration-200" style="background: rgba(255, 255, 255, 0.2);">
                                            <div id="modern-progress-bar" class="h-full rounded-full transition-all duration-300" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: 0%;"></div>
                                        </div>
                                        
                                        <!-- Time Display -->
                                        <div class="flex items-center justify-between">
                                            <span id="modern-current-time" class="text-white text-sm font-medium">0:00</span>
                                            <div class="flex items-center space-x-2">
                                                <div class="flex items-center space-x-1">
                                                    <div class="w-1 h-3 rounded-full animate-pulse" style="background: var(--voip-link);"></div>
                                                    <div class="w-1 h-2 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.2s;"></div>
                                                    <div class="w-1 h-4 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.4s;"></div>
                                                    <div class="w-1 h-3 rounded-full animate-pulse" style="background: var(--voip-link); animation-delay: 0.6s;"></div>
                                                </div>
                                                <span id="modern-total-time" class="text-slate-300 text-sm">{{ $voiceDemo['duration'] ?? '--:--' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const audio = document.getElementById('modern-hero-audio');
    const playBtn = document.getElementById('modern-play-btn');
    const playIcon = document.getElementById('modern-play-icon');
    const pauseIcon = document.getElementById('modern-pause-icon');
    const progressContainer = document.getElementById('modern-progress-container');
    const progressBar = document.getElementById('modern-progress-bar');
    const currentTimeSpan = document.getElementById('modern-current-time');
    const totalTimeSpan = document.getElementById('modern-total-time');
    
    if (!audio || !playBtn) return;
    
    // Play/Pause functionality
    playBtn.addEventListener('click', function() {
        if (audio.paused) {
            audio.play();
            playIcon.classList.add('hidden');
            pauseIcon.classList.remove('hidden');
        } else {
            audio.pause();
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
        }
    });
    
    // Update progress
    audio.addEventListener('timeupdate', function() {
        const progress = (audio.currentTime / audio.duration) * 100;
        progressBar.style.width = progress + '%';
        currentTimeSpan.textContent = formatTime(audio.currentTime);
    });
    
    // Set total time
    audio.addEventListener('loadedmetadata', function() {
        totalTimeSpan.textContent = formatTime(audio.duration);
    });
    
    // Click to seek
    progressContainer.addEventListener('click', function(e) {
        if (audio.duration && !isNaN(audio.duration)) {
            const rect = progressContainer.getBoundingClientRect();
            const percent = (e.clientX - rect.left) / rect.width;
            audio.currentTime = percent * audio.duration;
        }
    });
    
    // Reset when ended
    audio.addEventListener('ended', function() {
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
        progressBar.style.width = '0%';
        currentTimeSpan.textContent = '0:00';
    });
    
    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return mins + ':' + (secs < 10 ? '0' : '') + secs;
    }
});
</script>