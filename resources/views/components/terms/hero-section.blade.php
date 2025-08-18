@php
$heroData = json_decode(file_get_contents(resource_path('data/terms/hero.json')), true);
$sectionData = $heroData['section'] ?? [];
@endphp

<!-- Terms Hero Section - Professional Layout -->
<section class="relative min-h-[70vh] flex items-center pt-20" style="background-color: var(--voip-dark-bg);">
    <!-- Sophisticated Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute inset-0" style="background: linear-gradient(135deg, #0c1b27 0%, #162f3a 50%, #0c1b27 100%); opacity: 0.95;"></div>
        <!-- Subtle Legal Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(45deg, rgba(30, 192, 141, 0.1) 1px, transparent 1px), linear-gradient(-45deg, rgba(30, 192, 141, 0.1) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    
    <div class="container relative z-10 py-16">
        <div class="max-w-4xl mx-auto text-center">
            
            <!-- Legal Document Badge -->
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-8 wow animate__animated animate__fadeInDown" data-wow-delay="0.1s" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-gavel text-xl mr-3" style="color: var(--voip-link);"></i>
                <span class="text-slate-300 font-medium">{{ $sectionData['subtitle'] ?? 'Legal Agreement' }}</span>
            </div>

            <!-- Main Title -->
            <h1 class="text-6xl font-bold text-white mb-6 leading-tight wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ $sectionData['title'] ?? 'Terms of Service' }}
            </h1>

            <!-- Description -->
            <p class="text-slate-300 max-w-3xl mx-auto text-xl leading-relaxed mb-8 wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                {{ $sectionData['description'] ?? 'Comprehensive terms and conditions governing our VoIP AI services.' }}
            </p>

            <!-- Legal Info Cards -->
            <div class="grid md:grid-cols-2 gap-6 mt-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <!-- Last Updated -->
                <div class="relative p-6 rounded-2xl border border-white/10 transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(15px);">
                    <div class="flex items-center mb-3">
                        <i class="uil uil-calendar-alt text-2xl mr-3" style="color: var(--voip-link);"></i>
                        <h3 class="text-lg font-semibold text-white">Last Updated</h3>
                    </div>
                    <p class="text-slate-300">{{ $sectionData['last_updated'] ?? 'January 14, 2025' }}</p>
                </div>

                <!-- Effective Date -->
                <div class="relative p-6 rounded-2xl border border-white/10 transition-all duration-500" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(15px);">
                    <div class="flex items-center mb-3">
                        <i class="uil uil-check-circle text-2xl mr-3" style="color: var(--voip-link);"></i>
                        <h3 class="text-lg font-semibold text-white">Effective Date</h3>
                    </div>
                    <p class="text-slate-300">{{ $sectionData['effective_date'] ?? 'January 1, 2025' }}</p>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="mt-10 wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
                <p class="text-slate-400 mb-4">Quick Navigation:</p>
                <div class="flex flex-wrap gap-3 justify-center">
                    <a href="#acceptance" class="px-4 py-2 rounded-lg border border-white/20 text-sm text-slate-300 hover:border-white/40 hover:scale-105 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05);">Acceptance</a>
                    <a href="#data-privacy" class="px-4 py-2 rounded-lg border border-white/20 text-sm text-slate-300 hover:border-white/40 hover:scale-105 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05);">Data Privacy</a>
                    <a href="#ai-compliance" class="px-4 py-2 rounded-lg border border-white/20 text-sm text-slate-300 hover:border-white/40 hover:scale-105 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05);">AI Compliance</a>
                    <a href="#uae-regulations" class="px-4 py-2 rounded-lg border border-white/20 text-sm text-slate-300 hover:border-white/40 hover:scale-105 transition-all duration-300" style="background: rgba(30, 192, 141, 0.05);">UAE Regulations</a>
                </div>
            </div>

            <script>
                // Smooth scrolling for quick navigation links
                document.addEventListener('DOMContentLoaded', function() {
                    const quickNavLinks = document.querySelectorAll('a[href^="#"]');
                    quickNavLinks.forEach(link => {
                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                            const targetId = this.getAttribute('href').substring(1);
                            const targetElement = document.getElementById(targetId);
                            if (targetElement) {
                                targetElement.scrollIntoView({ 
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }
                        });
                    });
                });
            </script>

        </div>
    </div>
</section>