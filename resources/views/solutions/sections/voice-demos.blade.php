@php
$sectionData = $data['section'] ?? [];
$demos = $data['demos'] ?? [];
$metadata = $data['metadata'] ?? [];
@endphp

<!-- Voice Demos Section - Enhanced Interactive Slider -->
<section id="voice-demos" class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <!-- Audio Wave Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: linear-gradient(45deg, rgba(30, 192, 141, 0.05) 0%, transparent 50%), radial-gradient(ellipse at center, rgba(29, 120, 97, 0.08) 0%, transparent 70%);"></div>
        <!-- Sound Wave Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: repeating-linear-gradient(90deg, rgba(30, 192, 141, 0.3) 0px, rgba(30, 192, 141, 0.3) 2px, transparent 2px, transparent 20px);"></div>
    </div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-microphone text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['badge'] ?? 'Voice Demonstrations' }}</span>
            </div>

            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $sectionData['title'] ?? 'Hear Your AI Agent' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'Handle Real Calls' }}</span>
            </h2>

            <p class="text-slate-300 text-xl leading-relaxed">
                {{ $sectionData['description'] ?? 'Listen to actual conversations between clients and your AI agent across different scenarios.' }}
            </p>
        </div>

        <!-- Enhanced Voice Demos Slider -->
        <div class="relative wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <!-- Navigation Arrows (Hidden on Mobile) -->
            <button id="demosPrevBtn" 
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hidden md:flex"
                    style="background-color: var(--voip-primary); box-shadow: 0 4px 15px rgba(30, 192, 141, 0.3);"
                    onmouseover="this.style.backgroundColor='var(--voip-link)'; this.style.boxShadow='0 6px 20px rgba(30, 192, 141, 0.4)'"
                    onmouseout="this.style.backgroundColor='var(--voip-primary)'; this.style.boxShadow='0 4px 15px rgba(30, 192, 141, 0.3)'">
                <i class="uil uil-angle-left text-xl text-white"></i>
            </button>
            
            <button id="demosNextBtn" 
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 z-20 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hidden md:flex"
                    style="background-color: var(--voip-primary); box-shadow: 0 4px 15px rgba(30, 192, 141, 0.3);"
                    onmouseover="this.style.backgroundColor='var(--voip-link)'; this.style.boxShadow='0 6px 20px rgba(30, 192, 141, 0.4)'"
                    onmouseout="this.style.backgroundColor='var(--voip-primary)'; this.style.boxShadow='0 4px 15px rgba(30, 192, 141, 0.3)'">
                <i class="uil uil-angle-right text-xl text-white"></i>
            </button>

            <!-- Slider Wrapper -->
            <div class="overflow-hidden mx-0 md:mx-12 pt-8 pb-4">
                <div id="demosSlider" class="flex transition-transform duration-500 ease-in-out">
                    @foreach($demos as $index => $demo)
                    <div class="demo-card w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                        <div class="group relative rounded-2xl border border-white/10 p-5 h-auto flex flex-col transition-all duration-500 hover:scale-105 hover:border-white/30"
                             style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.4) 100%); backdrop-filter: blur(10px); box-shadow: 0 8px 25px rgba(0,0,0,0.3);"
                             onmouseover="this.style.boxShadow='0 15px 40px rgba(30, 192, 141, 0.2)'"
                             onmouseout="this.style.boxShadow='0 8px 25px rgba(0,0,0,0.3)'">
                            
                            <!-- Demo Header -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-14 h-14 rounded-2xl flex items-center justify-center"
                                     style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 15px rgba(30, 192, 141, 0.3);">
                                    <i class="{{ $demo['icon'] ?? 'uil uil-microphone' }} text-2xl text-white"></i>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs px-3 py-1 rounded-full text-white font-medium"
                                          style="background-color: rgba(30, 192, 141, 0.2); border: 1px solid rgba(30, 192, 141, 0.3);">
                                        {{ $demo['duration'] ?? '2:00' }}
                                    </span>
                                    <div class="text-xs text-slate-400 mt-2">{{ ucwords(str_replace('_', ' ', $demo['type'] ?? 'Demo')) }}</div>
                                </div>
                            </div>

                            <!-- Demo Content -->
                            <div class="mb-4">
                                <h4 class="text-lg font-bold text-white mb-2 leading-tight">{{ $demo['title'] ?? 'Demo Title' }}</h4>
                                <p class="text-sm text-slate-300 mb-2 leading-relaxed">
                                    {{ $demo['description'] ?? 'Demo description showcasing AI capabilities' }}
                                </p>
                                <div class="p-2 rounded-lg mb-3" style="background-color: rgba(12, 27, 39, 0.6); border: 1px solid rgba(30, 192, 141, 0.2);">
                                    <p class="text-xs text-slate-400">
                                        <strong style="color: var(--voip-link);">Scenario:</strong> {{ $demo['scenario'] ?? 'Demo scenario' }}
                                    </p>
                                </div>
                            </div>

                            <!-- Key Features Tags -->
                            @if(isset($demo['key_points']) && is_array($demo['key_points']))
                            <div class="mb-4">
                                <h6 class="text-xs font-semibold text-white/80 mb-2 uppercase tracking-wide">What You'll Hear:</h6>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(array_slice($demo['key_points'], 0, 3) as $feature)
                                    <span class="text-xs px-3 py-1 rounded-full border text-white/90"
                                          style="background-color: rgba(30, 192, 141, 0.1); border-color: rgba(30, 192, 141, 0.3);">
                                        {{ $feature }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <!-- Enhanced Audio Player -->
                            <div class="mt-auto flex-shrink-0">
                                <div class="p-4 rounded-xl border border-white/10"
                                     style="background: linear-gradient(135deg, rgba(12, 27, 39, 0.8) 0%, rgba(22, 47, 58, 0.6) 100%);">
                                    <!-- Player Controls Row -->
                                    <div class="flex items-center justify-between mb-3">
                                        <button class="demo-play-btn w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 group aspect-square"
                                                style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 4px 15px rgba(30, 192, 141, 0.3);"
                                                data-audio="{{ asset('assets/audio/solutions/' . (request()->segment(2) ?? 'sample') . '/' . ($demo['audio_file'] ?? 'demo.mp3')) }}"
                                                data-demo-id="{{ $demo['id'] ?? $index }}"
                                                onmouseover="this.style.transform='scale(1.1)'"
                                                onmouseout="this.style.transform='scale(1)'">
                                            <i class="uil uil-play text-white text-lg group-hover:scale-110 transition-transform"></i>
                                        </button>
                                        
                                        <div class="flex-1 mx-4">
                                            <!-- Progress Bar -->
                                            <div class="audio-progress-container cursor-pointer">
                                                <div class="w-full h-2 rounded-full" style="background-color: rgba(255,255,255,0.2);">
                                                    <div class="audio-progress h-2 rounded-full w-0 transition-all duration-300"
                                                         style="background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%);"></div>
                                                </div>
                                            </div>
                                            <!-- Time Display -->
                                            <div class="flex justify-between text-xs text-white/70 mt-2">
                                                <span class="audio-current">0:00</span>
                                                <span class="audio-duration">{{ $demo['duration'] ?? '2:00' }}</span>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-center space-x-2">
                                            <!-- Volume Control -->
                                            <button class="audio-volume-btn w-8 h-8 rounded-lg flex items-center justify-center transition-all duration-300"
                                                    onmouseover="this.style.backgroundColor='rgba(255,255,255,0.1)'"
                                                    onmouseout="this.style.backgroundColor='transparent'">
                                                <i class="uil uil-volume-up text-white/70 text-sm"></i>
                                            </button>
                                            <!-- Download Button -->
                                            <button class="demo-download-btn w-8 h-8 rounded-lg flex items-center justify-center transition-all duration-300"
                                                    data-audio="{{ asset('assets/audio/solutions/' . (request()->segment(2) ?? 'sample') . '/' . ($demo['audio_file'] ?? 'demo.mp3')) }}"
                                                    onmouseover="this.style.backgroundColor='rgba(30, 192, 141, 0.2)'"
                                                    onmouseout="this.style.backgroundColor='transparent'"
                                                    title="Download Demo">
                                                <i class="uil uil-download-alt text-white/70 text-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class="flex items-center justify-between pt-3 border-t border-white/10">
                                        <button class="transcript-btn text-xs text-slate-400 hover:text-white transition-colors flex items-center"
                                                data-demo-id="{{ $index }}">
                                            <i class="uil uil-document-layout-left text-xs mr-2"></i>View Transcript
                                        </button>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                                            <span class="text-xs text-slate-400">Live Recording</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Progress Indicators -->
            <div class="flex justify-center mt-8 space-x-3" id="indicatorsContainer">
                @php
                    $totalSlides = ceil(count($demos) / 3); // Desktop: 3 cards per slide
                @endphp
                @for($i = 0; $i < $totalSlides; $i++)
                <button class="demo-indicator w-3 h-3 rounded-full transition-all duration-300 {{ $i === 0 ? 'active' : '' }}"
                        style="background-color: {{ $i === 0 ? 'var(--voip-link)' : 'rgba(255,255,255,0.3)' }};"
                        data-slide="{{ $i }}"
                        onmouseover="if(!this.classList.contains('active')) this.style.backgroundColor='rgba(255,255,255,0.5)'"
                        onmouseout="if(!this.classList.contains('active')) this.style.backgroundColor='rgba(255,255,255,0.3)'">
                </button>
                @endfor
            </div>
        </div>

        <!-- Custom Demo CTA -->
        @if(!empty($demos))
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
            <div class="max-w-4xl mx-auto p-8 rounded-2xl border border-white/10"
                style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.08) 0%, rgba(22, 47, 58, 0.4) 100%); backdrop-filter: blur(15px);">
                <h3 class="text-2xl font-bold text-white mb-4">Want a Custom Demo for Your Business?</h3>
                <p class="text-slate-300 mb-6">We'll create a personalized voice demo using your actual business scenarios and industry-specific requirements</p>
                
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="{{ route('contact-us') }}"
                        class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105"
                        style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);"
                        data-cta-track="voice-demos-custom-demo">
                        <i class="uil uil-microphone text-lg mr-3"></i>
                        Request Custom Demo
                    </a>
                    <a href="tel:+97148647245"
                        class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white border-2 transition-all duration-300 hover:bg-white/10"
                        style="border-color: var(--voip-link); color: var(--voip-link);"
                        data-cta-track="voice-demos-call">
                        <i class="uil uil-phone text-lg mr-3"></i>
                        Call: +971 4 864 7245
                    </a>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Hidden Audio Player -->
    <audio id="demoAudioPlayer" preload="none"></audio>
</section>

<style>
/* Enhanced Slider Styles */
.demo-card:hover .demo-play-btn {
    box-shadow: 0 6px 20px rgba(30, 192, 141, 0.5) !important;
}

.demo-indicator.active {
    width: 24px;
    border-radius: 12px;
}

.audio-progress-container {
    position: relative;
}

.audio-progress-container:hover {
    cursor: pointer;
}

@media (max-width: 768px) {
    .demo-card {
        width: 100% !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Voice Demos Slider with Mobile Support
    const slider = document.getElementById('demosSlider');
    const prevBtn = document.getElementById('demosPrevBtn');
    const nextBtn = document.getElementById('demosNextBtn');
    const indicators = document.querySelectorAll('.demo-indicator');
    const totalCards = {{ count($demos) }};
    
    // Responsive cards logic
    function getCardsVisible() {
        if (window.innerWidth >= 1024) return 3; // Desktop
        if (window.innerWidth >= 768) return 2;  // Tablet
        return 1; // Mobile
    }
    
    let cardsVisible = getCardsVisible();
    let totalSlides = Math.ceil(totalCards / cardsVisible);
    let currentSlide = 0;
    let currentAudio = null;
    let currentPlayBtn = null;

    const audioPlayer = document.getElementById('demoAudioPlayer');

    // Enhanced Audio Controls
    function stopCurrentAudio() {
        if (currentAudio && currentPlayBtn) {
            audioPlayer.pause();
            audioPlayer.currentTime = 0;
            currentPlayBtn.innerHTML = '<i class="uil uil-play text-white text-lg group-hover:scale-110 transition-transform"></i>';
            updateProgressBar(currentPlayBtn, 0);
            currentAudio = null;
            currentPlayBtn = null;
        }
    }

    function updateProgressBar(playBtn, progress) {
        const card = playBtn.closest('.demo-card');
        const progressBar = card.querySelector('.audio-progress');
        const currentTimeSpan = card.querySelector('.audio-current');
        
        progressBar.style.width = progress + '%';
        
        if (audioPlayer.currentTime) {
            const minutes = Math.floor(audioPlayer.currentTime / 60);
            const seconds = Math.floor(audioPlayer.currentTime % 60);
            currentTimeSpan.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
        }
    }

    // Audio Event Listeners
    audioPlayer.addEventListener('timeupdate', () => {
        if (currentPlayBtn && audioPlayer.duration) {
            const progress = (audioPlayer.currentTime / audioPlayer.duration) * 100;
            updateProgressBar(currentPlayBtn, progress);
        }
    });

    audioPlayer.addEventListener('ended', () => {
        if (currentPlayBtn) {
            currentPlayBtn.innerHTML = '<i class="uil uil-play text-white text-lg group-hover:scale-110 transition-transform"></i>';
            updateProgressBar(currentPlayBtn, 0);
        }
        currentAudio = null;
        currentPlayBtn = null;
    });

    // Enhanced Play Button Functionality
    document.querySelectorAll('.demo-play-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const audioSrc = this.getAttribute('data-audio');
            
            if (currentAudio === audioSrc && !audioPlayer.paused) {
                audioPlayer.pause();
                this.innerHTML = '<i class="uil uil-play text-white text-lg group-hover:scale-110 transition-transform"></i>';
                currentAudio = null;
                currentPlayBtn = null;
            } else {
                stopCurrentAudio();
                
                audioPlayer.src = audioSrc;
                audioPlayer.play().catch(e => {
                    console.log('Audio play failed:', e);
                    // Show user-friendly message
                    const card = this.closest('.demo-card');
                    const title = card.querySelector('h4').textContent;
                    alert(`Demo audio for "${title}" is being prepared. Please try again in a moment.`);
                });
                
                this.innerHTML = '<i class="uil uil-pause text-white text-lg group-hover:scale-110 transition-transform"></i>';
                currentAudio = audioSrc;
                currentPlayBtn = this;
            }
        });
    });

    // Progress Bar Click to Seek
    document.querySelectorAll('.audio-progress-container').forEach(container => {
        container.addEventListener('click', function(e) {
            if (currentPlayBtn && audioPlayer.duration) {
                const rect = this.getBoundingClientRect();
                const clickX = e.clientX - rect.left;
                const percentage = clickX / rect.width;
                audioPlayer.currentTime = percentage * audioPlayer.duration;
            }
        });
    });

    // Download Functionality
    document.querySelectorAll('.demo-download-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const audioSrc = this.getAttribute('data-audio');
            const link = document.createElement('a');
            link.href = audioSrc;
            link.download = audioSrc.split('/').pop();
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    });

    // Volume Control
    document.querySelectorAll('.audio-volume-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            audioPlayer.muted = !audioPlayer.muted;
            const icon = this.querySelector('i');
            icon.className = audioPlayer.muted ? 
                'uil uil-volume-mute text-white/70 text-sm' : 
                'uil uil-volume-up text-white/70 text-sm';
        });
    });

    // Transcript Functionality (Placeholder)
    document.querySelectorAll('.transcript-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const demoId = this.getAttribute('data-demo-id');
            alert('Transcript feature coming soon for Demo ' + (parseInt(demoId) + 1));
        });
    });

    // Slider Navigation
    function updateSlider() {
        const translateX = -(currentSlide * (100 / cardsVisible));
        slider.style.transform = `translateX(${translateX}%)`;
        
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

    // Navigation Event Listeners
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });

    // Responsive Handler
    function handleResize() {
        const newCardsVisible = getCardsVisible();
        if (newCardsVisible !== cardsVisible) {
            cardsVisible = newCardsVisible;
            totalSlides = Math.ceil(totalCards / cardsVisible);
            currentSlide = Math.min(currentSlide, totalSlides - 1);
            updateSlider();
        }
    }

    window.addEventListener('resize', handleResize);

    // Touch/Swipe Support
    let startX = 0;
    let currentX = 0;
    let isDragging = false;

    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
    });

    slider.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        currentX = e.touches[0].clientX;
        e.preventDefault();
    });

    slider.addEventListener('touchend', () => {
        if (!isDragging) return;
        isDragging = false;
        
        const diffX = startX - currentX;
        const threshold = 50;
        
        if (Math.abs(diffX) > threshold) {
            if (diffX > 0 && currentSlide < totalSlides - 1) {
                nextSlide();
            } else if (diffX < 0 && currentSlide > 0) {
                prevSlide();
            }
        }
    });

    // Auto-slide (optional)
    let autoSlideInterval;
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            if (!currentAudio) nextSlide();
        }, 10000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Auto-slide controls
    startAutoSlide();
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);
});
</script>