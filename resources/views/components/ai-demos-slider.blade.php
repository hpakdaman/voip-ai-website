@php
try {
    $data = json_decode(file_get_contents(resource_path('data/ai-demos.json')), true);
    $sectionData = $data['section'] ?? [];
    $demos = $data['demos'] ?? [];
    $metadata = $data['metadata'] ?? [];
} catch (Exception $e) {
    $sectionData = ['title' => 'AI Voice Demos', 'subtitle' => 'Experience Real AI Conversations'];
    $demos = [];
    $metadata = ['audio_base_path' => '/assets/audio/demos/'];
}

// Sort by priority
usort($demos, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- AI Demos Slider Section -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0" style="background: linear-gradient(135deg, #162f3a 0%, #0c1b27 50%, #162f3a 100%); opacity: 0.9;"></div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" 
                style="color: var(--voip-link);" data-wow-delay="0.1s">
                {{ $sectionData['subtitle'] ?? 'Experience Real AI Conversations' }}
            </h6>
            <h3 class="mb-4 md:text-4xl md:leading-normal text-3xl leading-normal font-semibold text-white wow animate__animated animate__fadeInUp" 
                data-wow-delay="0.2s">
                {{ $sectionData['title'] ?? 'AI Voice Demos' }}
            </h3>
            <p class="text-slate-300 max-w-xl mx-auto wow animate__animated animate__fadeInUp" 
               data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'Listen to authentic AI-powered customer interactions across different industries' }}
            </p>
        </div>

        <!-- Demos Slider Container -->
        <div class="relative wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <!-- Navigation Arrows (Hidden on Mobile) -->
            <button id="demosPrevBtn" 
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hidden md:flex"
                    style="background-color: var(--voip-primary);"
                    onmouseover="this.style.backgroundColor='var(--voip-link)'; this.style.boxShadow='0 0 20px rgba(30, 192, 141, 0.3)'"
                    onmouseout="this.style.backgroundColor='var(--voip-primary)'; this.style.boxShadow='none'">
                <i class="uil uil-angle-left text-xl text-white"></i>
            </button>
            
            <button id="demosNextBtn" 
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 z-20 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hidden md:flex"
                    style="background-color: var(--voip-primary);"
                    onmouseover="this.style.backgroundColor='var(--voip-link)'; this.style.boxShadow='0 0 20px rgba(30, 192, 141, 0.3)'"
                    onmouseout="this.style.backgroundColor='var(--voip-primary)'; this.style.boxShadow='none'">
                <i class="uil uil-angle-right text-xl text-white"></i>
            </button>

            <!-- Slider Wrapper -->
            <div class="overflow-hidden mx-0 md:mx-12 pt-8 pb-4">
                <div id="demosSlider" class="flex transition-transform duration-500 ease-in-out">
                    @foreach($demos as $index => $demo)
                    <div class="demo-card w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-3">
                        <div class="group relative rounded-2xl border border-dashed border-white/20 p-6 h-full transition-all duration-500"
                             style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.3) 100%);"
                             onmouseover="this.style.borderColor='var(--voip-link)'; this.style.boxShadow='0 10px 30px rgba(30, 192, 141, 0.15)'"
                             onmouseout="this.style.borderColor='rgba(255,255,255,0.2)'; this.style.boxShadow='none'">
                            
                            <!-- Demo Header -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-12 h-12 rounded-lg flex items-center justify-center"
                                     style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                    <i class="{{ $demo['icon'] ?? 'uil uil-microphone' }} text-xl text-white"></i>
                                </div>
                                <span class="text-xs px-2 py-1 rounded-full text-white/80"
                                      style="background-color: rgba(30, 192, 141, 0.2);">
                                    {{ $demo['duration'] ?? '2:00' }}
                                </span>
                            </div>

                            <!-- Demo Content -->
                            <div class="mb-4">
                                <h4 class="text-lg font-semibold text-white mb-2">{{ $demo['title'] ?? 'Demo Title' }}</h4>
                                <p class="text-sm font-medium mb-2" style="color: var(--voip-link);">
                                    {{ $demo['business_type'] ?? 'Business Type' }}
                                </p>
                                <p class="text-sm text-slate-300 mb-3">
                                    {{ $demo['description'] ?? 'Demo description' }}
                                </p>
                                <p class="text-xs text-slate-400 mb-4">
                                    <strong>Scenario:</strong> {{ $demo['scenario'] ?? 'Demo scenario' }}
                                </p>
                            </div>

                            <!-- Features List -->
                            @if(isset($demo['features']) && is_array($demo['features']))
                            <div class="mb-4">
                                <h6 class="text-xs font-medium text-white/70 mb-2 uppercase">Key Features</h6>
                                <div class="flex flex-wrap gap-1">
                                    @foreach(array_slice($demo['features'], 0, 3) as $feature)
                                    <span class="text-xs px-2 py-1 rounded border border-white/10 text-white/80">
                                        {{ $feature }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <!-- Audio Player -->
                            <div class="mt-auto">
                                <div class="flex items-center justify-between p-3 rounded-lg"
                                     style="background-color: rgba(22, 47, 58, 0.5);">
                                    <button class="demo-play-btn w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300"
                                            style="background-color: var(--voip-primary);"
                                            data-audio="{{ ($metadata['audio_base_path'] ?? '/assets/audio/demos/') . ($demo['audio_file'] ?? 'demo.mp3') }}"
                                            data-demo-id="{{ $demo['id'] ?? $index }}"
                                            onmouseover="this.style.backgroundColor='var(--voip-link)'"
                                            onmouseout="this.style.backgroundColor='var(--voip-primary)'">
                                        <i class="uil uil-play text-white"></i>
                                    </button>
                                    
                                    <div class="flex-1 mx-3">
                                        <div class="audio-progress-container">
                                            <div class="w-full h-1 rounded-full" style="background-color: rgba(255,255,255,0.2);">
                                                <div class="audio-progress h-1 rounded-full w-0 transition-all duration-300"
                                                     style="background-color: var(--voip-link);"></div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between text-xs text-white/60 mt-1">
                                            <span class="audio-current">0:00</span>
                                            <span class="audio-duration">{{ $demo['duration'] ?? '2:00' }}</span>
                                        </div>
                                    </div>
                                    
                                    <button class="audio-volume-btn w-8 h-8 rounded flex items-center justify-center transition-all duration-300"
                                            onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)'"
                                            onmouseout="this.style.backgroundColor='transparent'">
                                        <i class="uil uil-volume-up text-white/70 text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Progress Indicators -->
            <div class="flex justify-center mt-8 space-x-2" id="indicatorsContainer">
                @for($i = 0; $i < count($demos); $i++)
                <button class="demo-indicator w-3 h-3 rounded-full transition-all duration-300 {{ $i === 0 ? 'active' : '' }}"
                        style="background-color: {{ $i === 0 ? 'var(--voip-link)' : 'rgba(255,255,255,0.3)' }}; display: {{ $i < ceil(count($demos) / 3) ? 'block' : 'none' }};"
                        data-slide="{{ $i }}"
                        onmouseover="if(!this.classList.contains('active')) this.style.backgroundColor='rgba(255,255,255,0.5)'"
                        onmouseout="if(!this.classList.contains('active')) this.style.backgroundColor='rgba(255,255,255,0.3)'">
                </button>
                @endfor
            </div>
        </div>
    </div>

    <!-- Audio Player (Hidden) -->
    <audio id="demoAudioPlayer" preload="none"></audio>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('demosSlider');
    const prevBtn = document.getElementById('demosPrevBtn');
    const nextBtn = document.getElementById('demosNextBtn');
    const indicators = document.querySelectorAll('.demo-indicator');
    const totalCards = {{ count($demos) }};
    
    // Responsive cards visible logic
    function getCardsVisible() {
        if (window.innerWidth >= 1024) return 3; // lg and up - desktop
        if (window.innerWidth >= 768) return 2;  // md and up - tablet
        return 1; // mobile
    }
    
    let cardsVisible = getCardsVisible();
    let totalSlides = Math.ceil(totalCards / cardsVisible);
    let currentSlide = 0;
    let currentAudio = null;
    let currentPlayBtn = null;

    // Initialize audio player
    const audioPlayer = document.getElementById('demoAudioPlayer');

    // Slider navigation
    function updateSlider() {
        const translateX = -(currentSlide * (100 / cardsVisible));
        slider.style.transform = `translateX(${translateX}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
            indicator.style.backgroundColor = index === currentSlide ? 'var(--voip-link)' : 'rgba(255,255,255,0.3)';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }
    
    // Update indicators visibility
    function updateIndicators() {
        indicators.forEach((indicator, index) => {
            indicator.style.display = index < totalSlides ? 'block' : 'none';
        });
    }

    // Handle responsive changes
    function handleResize() {
        const newCardsVisible = getCardsVisible();
        if (newCardsVisible !== cardsVisible) {
            cardsVisible = newCardsVisible;
            totalSlides = Math.ceil(totalCards / cardsVisible);
            currentSlide = Math.min(currentSlide, totalSlides - 1);
            updateIndicators();
            updateSlider();
        }
    }

    // Initialize indicators
    updateIndicators();

    // Event listeners for navigation
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Indicator clicks
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });

    // Handle window resize
    window.addEventListener('resize', handleResize);

    // Audio functionality
    function stopCurrentAudio() {
        if (currentAudio) {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
            currentPlayBtn.innerHTML = '<i class="uil uil-play text-white"></i>';
            currentAudio = null;
            currentPlayBtn = null;
        }
    }

    function updateAudioProgress() {
        if (currentAudio && currentPlayBtn) {
            const card = currentPlayBtn.closest('.demo-card');
            const progressBar = card.querySelector('.audio-progress');
            const currentTimeSpan = card.querySelector('.audio-current');
            
            if (audioPlayer.duration) {
                const progress = (audioPlayer.currentTime / audioPlayer.duration) * 100;
                progressBar.style.width = progress + '%';
                
                const minutes = Math.floor(audioPlayer.currentTime / 60);
                const seconds = Math.floor(audioPlayer.currentTime % 60);
                currentTimeSpan.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
            }
        }
    }

    // Audio event listeners
    audioPlayer.addEventListener('timeupdate', updateAudioProgress);
    audioPlayer.addEventListener('ended', () => {
        if (currentPlayBtn) {
            currentPlayBtn.innerHTML = '<i class="uil uil-play text-white"></i>';
            const card = currentPlayBtn.closest('.demo-card');
            const progressBar = card.querySelector('.audio-progress');
            progressBar.style.width = '0%';
            const currentTimeSpan = card.querySelector('.audio-current');
            currentTimeSpan.textContent = '0:00';
        }
        currentAudio = null;
        currentPlayBtn = null;
    });

    // Play button functionality
    document.querySelectorAll('.demo-play-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const audioSrc = this.getAttribute('data-audio');
            
            if (currentAudio === audioSrc && !audioPlayer.paused) {
                // Pause current audio
                audioPlayer.pause();
                this.innerHTML = '<i class="uil uil-play text-white"></i>';
                currentAudio = null;
                currentPlayBtn = null;
            } else {
                // Stop any current audio
                stopCurrentAudio();
                
                // Play new audio
                audioPlayer.src = audioSrc;
                audioPlayer.play().catch(e => {
                    console.log('Audio play failed:', e);
                    // Fallback: show message that audio is not available
                    alert('Demo audio not available. This is a sample implementation.');
                });
                
                this.innerHTML = '<i class="uil uil-pause text-white"></i>';
                currentAudio = audioSrc;
                currentPlayBtn = this;
            }
        });
    });

    // Volume control (placeholder)
    document.querySelectorAll('.audio-volume-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Toggle mute/unmute
            audioPlayer.muted = !audioPlayer.muted;
            const icon = this.querySelector('i');
            icon.className = audioPlayer.muted ? 'uil uil-volume-mute text-white/70 text-sm' : 'uil uil-volume-up text-white/70 text-sm';
        });
    });

    // Auto-slide (optional)
    let autoSlideInterval;
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            if (!currentAudio) { // Only auto-slide if no audio is playing
                nextSlide();
            }
        }, 8000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Start auto-slide
    startAutoSlide();

    // Pause auto-slide on hover
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);

    // Touch/Swipe functionality for mobile
    let startX = 0;
    let startY = 0;
    let isDragging = false;
    let currentX = 0;
    let initialTransform = 0;

    function handleTouchStart(e) {
        const touch = e.touches[0];
        startX = touch.clientX;
        startY = touch.clientY;
        isDragging = true;
        
        // Get current transform value
        const transform = slider.style.transform.match(/translateX\(([^)]+)\)/);
        initialTransform = transform ? parseFloat(transform[1]) : 0;
        
        // Stop auto-slide during touch
        stopAutoSlide();
        
        // Remove transition during drag
        slider.style.transition = 'none';
    }

    function handleTouchMove(e) {
        if (!isDragging) return;
        
        e.preventDefault(); // Prevent scrolling
        const touch = e.touches[0];
        currentX = touch.clientX;
        const diffX = currentX - startX;
        const diffY = Math.abs(touch.clientY - startY);
        
        // Only handle horizontal swipes (prevent conflicts with vertical scrolling)
        if (diffY < 50) {
            const newTransform = initialTransform + (diffX / window.innerWidth * 100);
            slider.style.transform = `translateX(${newTransform}%)`;
        }
    }

    function handleTouchEnd(e) {
        if (!isDragging) return;
        
        isDragging = false;
        const diffX = currentX - startX;
        const threshold = 50; // Minimum swipe distance
        
        // Restore transition
        slider.style.transition = 'transform 500ms ease-in-out';
        
        // Determine swipe direction and trigger slide
        if (Math.abs(diffX) > threshold) {
            if (diffX > 0 && currentSlide > 0) {
                // Swipe right - go to previous slide
                prevSlide();
            } else if (diffX < 0 && currentSlide < totalSlides - 1) {
                // Swipe left - go to next slide
                nextSlide();
            } else {
                // Snap back to current slide
                updateSlider();
            }
        } else {
            // Snap back to current slide
            updateSlider();
        }
        
        // Restart auto-slide
        startAutoSlide();
    }

    // Add touch event listeners to slider
    slider.addEventListener('touchstart', handleTouchStart, { passive: false });
    slider.addEventListener('touchmove', handleTouchMove, { passive: false });
    slider.addEventListener('touchend', handleTouchEnd, { passive: false });

    // Prevent context menu on long press
    slider.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
});
</script>