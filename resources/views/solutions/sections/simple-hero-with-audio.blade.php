@php
$heroData = $data['section'] ?? [];
$voiceDemo = $data['voice_demo'] ?? [];
@endphp

<!-- Simple Hero Section with Audio -->
<section class="relative py-20 overflow-hidden" style="background-color: var(--voip-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 opacity-10" style="background: radial-gradient(circle at 30% 50%, var(--voip-link) 0%, transparent 50%);"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Industry Badge -->
            @if(isset($heroData['industry_badge']))
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-8 wow animate__animated animate__fadeInUp" style="background: rgba(30, 192, 141, 0.1);" data-wow-delay="0.1s">
                <i class="uil uil-shield-check text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $heroData['industry_badge'] }}</span>
            </div>
            @endif
            
            <!-- Main Headlines -->
            <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $heroData['main_title'] ?? 'Transform Your Services with' }}
                <span style="color: var(--voip-link);">{{ $heroData['highlighted_word'] ?? 'AI Agents' }}</span>
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl text-slate-300 mb-8 leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $heroData['subtitle'] ?? 'Intelligent AI solutions that work 24/7 for your organization' }}
            </p>
            
            <!-- Description -->
            @if(isset($heroData['description']))
            <p class="text-lg text-slate-400 mb-10 leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                {{ $heroData['description'] }}
            </p>
            @endif
            
            <!-- Audio Demo Player -->
            @if(!empty($voiceDemo))
            <div class="max-w-2xl mx-auto mb-10 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                <div class="p-6 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(29, 120, 97, 0.1) 100%); backdrop-filter: blur(15px);">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-left">
                            <h6 class="text-white font-semibold mb-1">{{ $voiceDemo['title'] ?? '🎧 Live AI Demo' }}</h6>
                            <p class="text-slate-200 text-sm">{{ $voiceDemo['description'] ?? 'Hear our AI in action' }}</p>
                        </div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="uil uil-headphones text-xl text-white"></i>
                        </div>
                    </div>
                    
                    <!-- Audio Player Controls -->
                    <div class="voice-demo-player">
                        <!-- Hidden Audio Element -->
                        <audio id="simple-hero-audio" preload="metadata" style="display: none;">
                            <source src="{{ asset('assets/audio/solutions/government/' . ($voiceDemo['audio_file'] ?? 'demo.mp3')) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        
                        <!-- Custom Play Button Interface -->
                        <div class="flex items-center space-x-4">
                            <!-- Play/Pause Button -->
                            <button id="simple-play-btn" class="w-14 h-14 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.4);">
                                <i id="simple-play-icon" class="uil uil-play text-xl text-white ml-1"></i>
                                <i id="simple-pause-icon" class="uil uil-pause text-xl text-white hidden"></i>
                            </button>
                            
                            <!-- Progress Area -->
                            <div class="flex-1">
                                <div id="simple-progress-container" class="w-full h-2 rounded-full mb-2 cursor-pointer" style="background: rgba(255, 255, 255, 0.2);">
                                    <div id="simple-progress-bar" class="h-full rounded-full transition-all duration-300" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: 0%;"></div>
                                </div>
                                <div class="flex items-center justify-between text-slate-300 text-sm">
                                    <span id="simple-current-time">0:00</span>
                                    <span id="simple-total-time">{{ $voiceDemo['duration'] ?? '--:--' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            
            <!-- CTA Buttons -->
            <div class="flex flex-wrap gap-4 items-center justify-center wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                <a href="{{ route('demo.booking') }}" class="py-4 px-8 inline-block font-semibold tracking-wide border duration-500 text-base text-center text-white rounded-md hover:shadow-lg transition-all hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); border-color: var(--voip-primary);">
                    {{ $heroData['cta']['primary'] ?? 'Get Started Now' }}
                </a>
                <a href="#voice-demos" class="py-4 px-8 inline-block font-semibold tracking-wide border border-white/20 duration-500 text-base text-center text-white rounded-md hover:bg-white/10 transition-all">
                    {{ $heroData['cta']['secondary'] ?? 'See More Demos' }}
                </a>
            </div>
            
            <!-- Trust Stats -->
            @if(isset($heroData['stats']))
            <div class="flex flex-wrap items-center justify-center gap-8 mt-12 text-slate-400 wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                @foreach($heroData['stats'] as $stat)
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-white mr-2">{{ $stat['number'] ?? '' }}</span>
                    <span class="text-sm">{{ $stat['label'] ?? '' }}</span>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const audio = document.getElementById('simple-hero-audio');
    const playBtn = document.getElementById('simple-play-btn');
    const playIcon = document.getElementById('simple-play-icon');
    const pauseIcon = document.getElementById('simple-pause-icon');
    const progressContainer = document.getElementById('simple-progress-container');
    const progressBar = document.getElementById('simple-progress-bar');
    const currentTimeSpan = document.getElementById('simple-current-time');
    const totalTimeSpan = document.getElementById('simple-total-time');
    
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
        const rect = progressContainer.getBoundingClientRect();
        const percent = (e.clientX - rect.left) / rect.width;
        audio.currentTime = percent * audio.duration;
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