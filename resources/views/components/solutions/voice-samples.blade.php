@php
$voiceSamplesData = json_decode(file_get_contents(resource_path('data/solutions/real-estate/voice-demos.json')), true);
$sectionData = $voiceSamplesData['section'] ?? [];
$demos = $voiceSamplesData['demos'] ?? [];
@endphp

<!-- Voice Samples Section -->
<section id="voice-samples" class="relative py-24" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0">
        <!-- Audio Wave Background -->
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
                {{ $sectionData['description'] ?? 'Listen to actual conversations between prospects and your AI agent across different real estate scenarios.' }}
            </p>
        </div>
        
        <!-- Voice Demo Grid -->
        <div class="grid lg:grid-cols-2 gap-8 mb-16">
            @foreach($demos as $index => $demo)
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ ($index * 0.2 + 0.2) }}s">
                <!-- Demo Card -->
                <div class="p-8 rounded-2xl border border-white/10 transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <!-- Demo Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil {{ $demo['icon'] ?? 'uil-phone' }} text-2xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">{{ $demo['title'] ?? 'Demo Title' }}</h3>
                                <p class="text-slate-400 text-sm">{{ $demo['scenario'] ?? 'Demo scenario' }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm text-slate-400">Duration</div>
                            <div class="text-white font-semibold">{{ $demo['duration'] ?? '0:45' }}</div>
                        </div>
                    </div>
                    
                    <!-- Demo Description -->
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">{{ $demo['description'] ?? 'Demo description' }}</p>
                    
                    <!-- Audio Player -->
                    <div class="voice-demo-player mb-6">
                        <audio controls class="w-full" data-demo-type="{{ $demo['type'] ?? 'general' }}">
                            <source src="{{ asset('assets/audio/solutions/real-estate/' . ($demo['audio_file'] ?? 'demo.mp3')) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    
                    <!-- Key Points -->
                    <div class="space-y-3 mb-6">
                        <h4 class="text-white font-semibold text-sm">What You'll Hear:</h4>
                        <ul class="space-y-2">
                            @foreach($demo['key_points'] ?? [] as $point)
                            <li class="flex items-start text-sm text-slate-300">
                                <i class="uil uil-check text-xs mr-2 mt-1" style="color: var(--voip-link);"></i>
                                {{ $point }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Demo Actions -->
                    <div class="flex items-center justify-between pt-4 border-t border-white/10">
                        <div class="flex items-center space-x-4">
                            <button class="text-sm text-slate-400 hover:text-white transition-colors">
                                <i class="uil uil-transcript text-xs mr-1"></i>View Transcript
                            </button>
                            <button class="text-sm text-slate-400 hover:text-white transition-colors">
                                <i class="uil uil-download-alt text-xs mr-1"></i>Download
                            </button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                            <span class="text-xs text-slate-400">Live Recording</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Custom Demo Request -->
        <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
            <div class="max-w-3xl mx-auto p-8 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                <h3 class="text-2xl font-bold text-white mb-4">Want a Custom Demo for Your Listings?</h3>
                <p class="text-slate-300 mb-6">We'll create a personalized voice demo using your actual property listings and scenarios</p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact-us" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 10px 30px rgba(30, 192, 141, 0.3);" data-cta-track="voice-samples-custom-demo">
                        <i class="uil uil-microphone text-lg mr-3"></i>
                        Request Custom Demo
                    </a>
                    <a href="tel:+97148647245" class="inline-flex items-center px-8 py-4 rounded-xl font-semibold text-white border-2 transition-all duration-300 hover:bg-white/10" style="border-color: var(--voip-link); color: var(--voip-link);" data-cta-track="voice-samples-call">
                        <i class="uil uil-phone text-lg mr-3"></i>
                        Call: +971 4 864 7245
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Enhanced Audio Player Styling */
.voice-demo-player audio {
    width: 100%;
    height: 50px;
    border-radius: 12px;
    background: rgba(30, 192, 141, 0.1);
    outline: none;
    border: 1px solid rgba(30, 192, 141, 0.2);
}

.voice-demo-player audio::-webkit-media-controls-panel {
    background-color: rgba(12, 27, 39, 0.9);
    border-radius: 12px;
}

.voice-demo-player audio::-webkit-media-controls-play-button {
    background-color: var(--voip-primary);
    border-radius: 50%;
    margin-left: 10px;
}

.voice-demo-player audio::-webkit-media-controls-current-time-display,
.voice-demo-player audio::-webkit-media-controls-time-remaining-display {
    color: white;
    text-shadow: none;
    font-size: 12px;
}

.voice-demo-player audio::-webkit-media-controls-timeline {
    background-color: rgba(30, 192, 141, 0.3);
    border-radius: 25px;
    margin: 0 10px;
}

.voice-demo-player audio::-webkit-media-controls-volume-slider {
    background-color: rgba(30, 192, 141, 0.3);
    border-radius: 25px;
}

/* Demo Card Hover Effects */
.demo-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(30, 192, 141, 0.2);
}

/* Transcript Modal Styling (if implemented) */
.transcript-modal {
    background: rgba(12, 27, 39, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(30, 192, 141, 0.2);
}
</style>

<script>
// Audio Player Enhancements
document.addEventListener('DOMContentLoaded', function() {
    const audioElements = document.querySelectorAll('.voice-demo-player audio');
    
    audioElements.forEach(audio => {
        // Track play events
        audio.addEventListener('play', function() {
            console.log('Demo played:', this.dataset.demoType);
            
            // Pause other audio elements
            audioElements.forEach(otherAudio => {
                if (otherAudio !== this && !otherAudio.paused) {
                    otherAudio.pause();
                }
            });
        });
        
        // Track completion
        audio.addEventListener('ended', function() {
            console.log('Demo completed:', this.dataset.demoType);
        });
    });
});
</script>