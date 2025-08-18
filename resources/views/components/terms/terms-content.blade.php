@php
$termsData = json_decode(file_get_contents(resource_path('data/terms/terms-sections.json')), true);
$sections = $termsData['sections'] ?? [];
$footerNotice = $termsData['footer_notice'] ?? [];
@endphp

<!-- Comprehensive Terms Content Section -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-document-info text-xl mr-3" style="color: var(--voip-link);"></i>
                <span class="text-slate-300 font-medium">Legal Framework</span>
            </div>
            <h2 class="text-5xl font-bold text-white mb-6">{{ $termsData['section']['title'] ?? 'Terms & Conditions' }}</h2>
            <p class="text-slate-300 max-w-3xl mx-auto text-lg">{{ $termsData['section']['description'] ?? 'Complete legal framework governing our services' }}</p>
        </div>

        <!-- Terms Sections Grid -->
        <div class="grid lg:grid-cols-1 gap-8 max-w-6xl mx-auto">
            @foreach($sections as $index => $section)
            <div id="{{ $section['id'] }}" class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $section['delay'] ?? ($index * 0.1 + 0.2) }}s">
                <!-- Section Card -->
                <div class="relative p-8 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/20" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(10px);">
                    
                    <!-- Section Header -->
                    <div class="flex items-start mb-6">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center mr-4" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $section['icon'] ?? 'uil-file-alt' }} text-white text-xl"></i>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-opacity-90 transition-all duration-300">
                                {{ $section['title'] }}
                            </h3>
                        </div>
                    </div>

                    <!-- Section Content -->
                    <div class="prose prose-invert max-w-none">
                        @if(isset($section['content']) && is_array($section['content']))
                            @foreach($section['content'] as $paragraph)
                            <p class="text-slate-300 leading-relaxed mb-4 text-lg">{{ $paragraph }}</p>
                            @endforeach
                        @endif
                    </div>

                    <!-- Hover Effect -->
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity duration-500" style="background: linear-gradient(135deg, var(--voip-link) 0%, var(--voip-primary) 100%);"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer Notice Section -->
        @if(!empty($footerNotice))
        <div class="mt-20 text-center wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
            <div class="max-w-4xl mx-auto p-8 rounded-2xl border border-white/20" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(20px);">
                
                <!-- Title -->
                <div class="flex items-center justify-center mb-4">
                    <i class="uil uil-question-circle text-3xl mr-3" style="color: var(--voip-link);"></i>
                    <h3 class="text-2xl font-bold text-white">{{ $footerNotice['title'] ?? 'Questions or Concerns?' }}</h3>
                </div>

                <!-- Description -->
                <p class="text-slate-300 text-lg mb-6">{{ $footerNotice['description'] ?? 'Contact us for any questions about these terms.' }}</p>

                <!-- Contact Information -->
                @if(isset($footerNotice['contact']))
                <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <!-- Email -->
                    <div class="text-center">
                        <i class="uil uil-envelope text-2xl mb-2" style="color: var(--voip-link);"></i>
                        <p class="text-white font-semibold">Email</p>
                        <a href="mailto:{{ $footerNotice['contact']['email'] }}" class="text-slate-300 hover:text-white transition-colors">{{ $footerNotice['contact']['email'] }}</a>
                    </div>
                    
                    <!-- Phone -->
                    <div class="text-center">
                        <i class="uil uil-phone text-2xl mb-2" style="color: var(--voip-link);"></i>
                        <p class="text-white font-semibold">Phone</p>
                        <a href="tel:{{ $footerNotice['contact']['phone'] }}" class="text-slate-300 hover:text-white transition-colors">{{ $footerNotice['contact']['phone'] }}</a>
                    </div>
                    
                    <!-- Address -->
                    <div class="text-center">
                        <i class="uil uil-map-marker text-2xl mb-2" style="color: var(--voip-link);"></i>
                        <p class="text-white font-semibold">Address</p>
                        <p class="text-slate-300 text-sm">{{ $footerNotice['contact']['address'] }}</p>
                    </div>
                </div>
                @endif

                <!-- Last Review -->
                <div class="pt-4 border-t border-white/10">
                    <p class="text-slate-400 text-sm">{{ $footerNotice['last_review'] ?? 'Terms last updated: January 14, 2025' }}</p>
                </div>

            </div>
        </div>
        @endif

    </div>
</section>