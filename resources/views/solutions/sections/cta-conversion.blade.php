@php
$sectionData = $data['section'] ?? [];
$ctaButtons = $data['cta_buttons'] ?? [];
$benefits = $data['benefits'] ?? [];
$guarantee = $data['guarantee'] ?? '';
$socialProof = $data['social_proof'] ?? '';
$bgImage = $data['bg_image'] ?? 'assets/images/no-image.svg';
$altText = $data['alt_text'] ?? 'CTA Background';
@endphp

<!-- Strong Conversion CTA Section -->
<section class="relative py-24" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0">
        <!-- Background Image -->
        <img src="{{ asset($bgImage) }}" alt="{{ $altText }}"
            class="w-full h-full object-cover opacity-20">
        <!-- Conversion-focused background overlay -->
        <div class="absolute inset-0"
            style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(29, 120, 97, 0.1) 50%, transparent 100%);">
        </div>
    </div>

    <div class="container relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Urgency Header -->
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-8"
                style="background: rgba(239, 239, 239, 0.1); border-color: rgba(239, 239, 239, 0.3);">
                <i class="uil uil-clock text-lg mr-3"></i>
                <span class="text-white font-medium">Limited Time: Free Setup Worth AED 5,000</span>
            </div>

            <!-- Main CTA -->
            <h2 class="text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                {{ $sectionData['title'] ?? 'Ready to Transform' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'Your Business?' }}</span>
            </h2>

            <p class="text-slate-300 text-2xl mb-12 leading-relaxed">
                {{ $sectionData['description'] ?? 'Transform your business communication today' }}
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap gap-4 sm:gap-6 items-center justify-center mb-16">
                @if(!empty($ctaButtons))
                    @foreach($ctaButtons as $button)
                    <a href="{{ $button['url'] ?? '#' }}"
                        @if($button['style'] === 'primary')
                        class="inline-flex items-center px-12 py-6 rounded-2xl font-bold text-white text-xl transition-all duration-300 hover:scale-105"
                        style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);"
                        @else
                        class="inline-flex items-center px-12 py-6 rounded-2xl font-bold text-white border-2 text-xl transition-all duration-300 hover:bg-white/10"
                        style="border-color: var(--voip-link); color: var(--voip-link);"
                        @endif
                        data-cta-track="{{ $button['tracking'] ?? 'cta-click' }}">
                        <i class="uil {{ $button['icon'] ?? 'uil-arrow-right' }} text-2xl mr-4"></i>
                        {{ $button['text'] ?? 'Learn More' }}
                    </a>
                    @endforeach
                @endif
            </div>

            <!-- Benefits List -->
            @if(!empty($benefits))
            <div class="max-w-3xl mx-auto mb-12">
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($benefits as $benefit)
                    <li class="flex items-center text-white text-lg">
                        <i class="uil uil-check text-2xl mr-3" style="color: var(--voip-link);"></i>
                        {{ $benefit }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Guarantee -->
            @if($guarantee)
            <div class="max-w-2xl mx-auto p-6 rounded-2xl border border-green-400/30 mb-8"
                style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(29, 120, 97, 0.1) 100%);">
                <div class="flex items-center justify-center mb-4">
                    <i class="uil uil-shield-check text-3xl text-green-400 mr-3"></i>
                    <h3 class="text-xl font-bold text-white">Guarantee</h3>
                </div>
                <p class="text-slate-300 text-center">{{ $guarantee }}</p>
            </div>
            @endif

            <!-- Social Proof -->
            @if($socialProof)
            <div class="text-center">
                <p class="text-slate-400 text-lg">{{ $socialProof }}</p>
            </div>
            @endif
        </div>
    </div>
</section>
