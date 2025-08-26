@php
// Handle multiple data structures for different solution pages
$heroData = $data['section'] ?? $data['hero'] ?? [];
$voiceDemo = $data['voice_demo'] ?? [];
$demoAudio = $data['demo_audio'] ?? [];
$ctaButtons = $data['cta_buttons'] ?? [];

// Normalize audio demo data from different structures
$audioDemo = null;
if (!empty($demoAudio)) {
    // Spa-massage format
    $audioDemo = [
        'title' => $demoAudio['title'] ?? '🎧 Live AI Call Demo',
        'description' => $demoAudio['description'] ?? 'Real conversation with AI agent',
        'file_path' => $demoAudio['file_path'] ?? '',
        'duration' => $demoAudio['duration'] ?? '--:--'
    ];
} elseif (!empty($voiceDemo)) {
    // Healthcare/Real-estate format
    $audioDemo = [
        'title' => $voiceDemo['title'] ?? $heroData['demo_title'] ?? '🎧 Live AI Call Demo',
        'description' => $voiceDemo['description'] ?? $heroData['demo_description'] ?? 'Real conversation with AI agent',
        'file_path' => 'assets/audio/solutions/' . (str_contains(request()->path(), 'healthcare') ? 'healthcare' : (str_contains(request()->path(), 'real-estate') ? 'real-estate' : 'demo')) . '/' . ($voiceDemo['audio_file'] ?? 'demo.mp3'),
        'duration' => $voiceDemo['duration'] ?? '--:--'
    ];
}
@endphp

<!-- Hero Section with Voice Demo -->
<section class="relative py-24 overflow-hidden" style="background-color: var(--voip-dark-bg);">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <!-- Animated gradient background -->
        <div class="absolute inset-0 opacity-20" style="background: radial-gradient(circle at 30% 50%, var(--voip-link) 0%, transparent 50%), radial-gradient(circle at 70% 20%, var(--voip-primary) 0%, transparent 50%);"></div>
        <!-- Tech pattern overlay -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 25px 25px, rgba(30, 192, 141, 0.3) 2px, transparent 0), radial-gradient(circle at 75px 75px, rgba(30, 192, 141, 0.2) 1px, transparent 0); background-size: 100px 100px;"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content Column -->
            <div class="order-2 lg:order-1">
                <!-- Industry Badge -->
                <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6 wow animate__animated animate__fadeInUp" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);" data-wow-delay="0.1s">
                    <i class="uil uil-phone text-lg mr-3" style="color: var(--voip-link);"></i>
                    <span class="text-white font-medium">{{ $heroData['badge'] ?? 'AI Call Center Solution' }}</span>
                </div>
                
                <!-- Main Headlines -->
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    {{ $heroData['title'] ?? 'Transform Your Business' }}
                    <span style="color: var(--voip-link);">{{ $heroData['highlighted'] ?? 'with AI Calls' }}</span>
                </h1>
                
                <p class="text-slate-300 text-xl mb-8 leading-relaxed wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    {{ $heroData['description'] ?? 'Professional AI agents that handle your calls 24/7, never miss leads, and provide exceptional customer service in Arabic and English.' }}
                </p>
                
                <!-- Key Benefits List -->
                @if(isset($heroData['benefits']))
                <ul class="space-y-4 mb-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                    @foreach($heroData['benefits'] as $benefit)
                    <li class="flex items-center text-slate-300">
                        <i class="uil uil-check text-xl mr-4" style="color: var(--voip-link);"></i>
                        {{ $benefit }}
                    </li>
                    @endforeach
                </ul>
                @endif
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-start mb-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="hero-call">
                        <i class="uil uil-phone text-xl mr-3"></i>
                        Call Now: +971 4 864 7245
                    </a>
                    <a href="{{ route('demo.booking') }}" class="inline-flex items-center px-8 py-4 rounded-2xl font-bold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="hero-demo">
                        <i class="uil uil-calendar-alt text-xl mr-3"></i>
                        Book Free Demo
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="flex items-center space-x-8 text-slate-400 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-white mr-2">500+</span>
                        <span class="text-sm">UAE Businesses</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-white mr-2">24/7</span>
                        <span class="text-sm">AI Support</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-white mr-2">95%</span>
                        <span class="text-sm">Lead Capture</span>
                    </div>
                </div>
            </div>
            
            <!-- Hero Image with Voice Demo Column -->
            <div class="order-1 lg:order-2">
                <div class="relative wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                    <!-- Main Hero Image -->
                    <div class="relative">
                        @php
                        $heroImages = $data['hero_images'] ?? [];
                        $defaultImage = 'assets/images/no-image.svg';
                        $heroImage = $heroImages['main'] ?? $defaultImage;
                        @endphp
                        <img data-lazy="{{ asset($heroImage) }}" 
                             alt="{{ $data['hero']['alt_text'] ?? 'AI Call Center Demo' }}" 
                             class="lazy-loading w-full h-[500px] lg:h-[600px] object-cover rounded-2xl shadow-2xl">
                        
                        <!-- Image Overlay -->
                        <div class=""></div>
                    </div>
                    
                    <!-- Floating Voice Demo Player -->
                    <div id="voice-demo" class="absolute bottom-8 left-8 right-8 p-6 rounded-2xl border-2" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(29, 120, 97, 0.1) 100%); border-color: rgba(30, 192, 141, 0.4); backdrop-filter: blur(15px); box-shadow: 0 12px 30px rgba(30, 192, 141, 0.2);">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <h6 class="text-white font-semibold mb-1">{{ $audioDemo['title'] ?? '🎧 Live AI Call Demo' }}</h6>
                                <p class="text-slate-200 text-sm">{{ $audioDemo['description'] ?? 'Real conversation with AI agent' }}</p>
                            </div>
                            <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 12px rgba(30, 192, 141, 0.4);">
                                <i class="uil uil-headphones text-xl text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Audio Player -->
                        @if($audioDemo && !empty($audioDemo['file_path']))
                        <div class="voice-demo-player">
                            <!-- Hidden Audio Element -->
                            <audio id="hero-demo-audio" preload="metadata" style="display: none;" data-demo-type="main-demo">
                                <source src="{{ asset($audioDemo['file_path']) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            
                            <!-- Custom Play Button Interface -->
                            <div class="flex items-center space-x-4">
                                <!-- Large Play/Pause Button -->
                                <button id="play-pause-btn" class="w-16 h-16 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110 focus:outline-none" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 8px 25px rgba(30, 192, 141, 0.4);">
                                    <i id="play-icon" class="uil uil-play text-2xl text-white ml-1"></i>
                                    <i id="pause-icon" class="uil uil-pause text-2xl text-white hidden"></i>
                                </button>
                                
                                <!-- Progress Area -->
                                <div class="flex-1">
                                    <!-- Progress Bar Container (Clickable) -->
                                    <div id="progress-container" class="w-full h-2 rounded-full mb-2 cursor-pointer" style="background: rgba(255, 255, 255, 0.2);">
                                        <div id="progress-bar" class="h-full rounded-full transition-all duration-300" style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%); width: 0%;"></div>
                                    </div>
                                    
                                    <!-- Time Display -->
                                    <div class="flex items-center justify-between text-slate-300 text-sm">
                                        <span id="current-time">0:00</span>
                                        <span id="total-time">{{ $audioDemo['duration'] ?? '--:--' }}</span>
                                    </div>
                                </div>
                                
                                <!-- Volume Control -->
                                <div class="flex items-center space-x-2">
                                    <!-- Volume Icon -->
                                    <button id="volume-btn" class="w-10 h-10 rounded-full flex items-center justify-center hover:bg-white/10 transition-colors" style="background: rgba(255, 255, 255, 0.1);">
                                        <i id="volume-icon" class="uil uil-volume text-lg text-white"></i>
                                    </button>
                                    
                                    <!-- Volume Slider (Hidden by default) -->
                                    <div id="volume-slider-container" class="hidden">
                                        <input type="range" id="volume-slider" min="0" max="100" value="100" class="w-20 h-1 rounded-full appearance-none cursor-pointer" style="background: rgba(255, 255, 255, 0.2);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Demo Actions -->
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-slate-400 text-xs">{{ $voiceDemo['duration'] ?? '45 seconds' }}</span>
                            <a href="#" class="text-white text-sm hover:text-green-400 transition-colors" style="color: var(--voip-link);">
                                <i class="uil uil-download-alt mr-1"></i>Download Demo
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Live Status Indicator -->
                <div class="absolute top-8 right-8 p-3 rounded-xl border border-white/20" style="background: rgba(12, 27, 39, 0.95); backdrop-filter: blur(10px);">
                    <div class="flex items-center">
                        <div class="w-2 h-2 rounded-full bg-green-400 mr-2 animate-pulse"></div>
                        <span class="text-white text-sm font-medium">AI Online</span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Audio Player JavaScript -->
@if($audioDemo && !empty($audioDemo['file_path']))
<script>
document.addEventListener('DOMContentLoaded', function() {
    const audio = document.getElementById('hero-demo-audio');
    const playPauseBtn = document.getElementById('play-pause-btn');
    const playIcon = document.getElementById('play-icon');
    const pauseIcon = document.getElementById('pause-icon');
    const progressBar = document.getElementById('progress-bar');
    const progressContainer = document.getElementById('progress-container');
    const currentTimeSpan = document.getElementById('current-time');
    const totalTimeSpan = document.getElementById('total-time');
    const volumeBtn = document.getElementById('volume-btn');
    const volumeIcon = document.getElementById('volume-icon');
    const volumeSliderContainer = document.getElementById('volume-slider-container');
    const volumeSlider = document.getElementById('volume-slider');
    
    if (!audio || !playPauseBtn) return;
    
    // Format time helper function
    function formatTime(seconds) {
        const mins = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return mins + ':' + (secs < 10 ? '0' + secs : secs);
    }
    
    // Update total time when metadata loads
    audio.addEventListener('loadedmetadata', function() {
        totalTimeSpan.textContent = formatTime(audio.duration);
    });
    
    // Play/Pause button click handler
    playPauseBtn.addEventListener('click', function() {
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
    
    // Update progress bar and time
    audio.addEventListener('timeupdate', function() {
        if (audio.duration) {
            const progress = (audio.currentTime / audio.duration) * 100;
            progressBar.style.width = progress + '%';
            currentTimeSpan.textContent = formatTime(audio.currentTime);
        }
    });
    
    // Reset when audio ends
    audio.addEventListener('ended', function() {
        playIcon.classList.remove('hidden');
        pauseIcon.classList.add('hidden');
        progressBar.style.width = '0%';
        currentTimeSpan.textContent = '0:00';
    });
    
    // Click on progress bar to seek
    progressContainer.addEventListener('click', function(e) {
        if (audio.duration) {
            const rect = progressContainer.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const containerWidth = rect.width;
            const seekTime = (clickX / containerWidth) * audio.duration;
            audio.currentTime = seekTime;
        }
    });
    
    // Volume control functionality
    volumeBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        volumeSliderContainer.classList.toggle('hidden');
    });
    
    // Volume slider change
    volumeSlider.addEventListener('input', function() {
        const volume = this.value / 100;
        audio.volume = volume;
        updateVolumeIcon(volume);
    });
    
    // Update volume icon based on level
    function updateVolumeIcon(volume) {
        if (volume === 0) {
            volumeIcon.className = 'uil uil-volume-mute text-lg text-white';
        } else if (volume < 0.5) {
            volumeIcon.className = 'uil uil-volume-down text-lg text-white';
        } else {
            volumeIcon.className = 'uil uil-volume text-lg text-white';
        }
    }
    
    // Volume button click to mute/unmute
    let previousVolume = 1;
    volumeBtn.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        if (audio.volume > 0) {
            previousVolume = audio.volume;
            audio.volume = 0;
            volumeSlider.value = 0;
        } else {
            audio.volume = previousVolume;
            volumeSlider.value = previousVolume * 100;
        }
        updateVolumeIcon(audio.volume);
    });
    
    // Hide volume slider when clicking outside
    document.addEventListener('click', function(e) {
        if (!volumeBtn.contains(e.target) && !volumeSliderContainer.contains(e.target)) {
            volumeSliderContainer.classList.add('hidden');
        }
    });
    
    // Initialize volume
    audio.volume = 1;
    updateVolumeIcon(1);
});
</script>
@endif