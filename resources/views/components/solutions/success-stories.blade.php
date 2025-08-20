@php
// Dynamically determine industry from URL path
$currentPath = request()->path();
$industry = 'real-estate'; // Default fallback
$industryName = 'Real Estate Pros';
$industryIcon = 'uil-building';

if (str_contains($currentPath, 'spa-massage')) {
    $industry = 'spa-massage';
    $industryName = 'Spa & Wellness Centers';
    $industryIcon = 'uil-spa';
} elseif (str_contains($currentPath, 'real-estate')) {
    $industry = 'real-estate';
    $industryName = 'Real Estate Pros';
    $industryIcon = 'uil-building';
}
@endphp

<!-- Success Stories & Testimonials -->
<section class="relative py-24" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1);">
                <i class="{{ $industryIcon }} text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">Success Stories</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                Real Results from
                <span style="color: var(--voip-link);">UAE {{ $industryName }}</span>
            </h2>
        </div>
        
        <!-- Testimonials Grid -->
        @php
        $testimonials = [];
        if ($industry === 'spa-massage') {
            $testimonials = [
                [
                    'quote' => 'Sawtic AI increased our bookings by 40%. We\'re now capturing appointments 24/7, even when we\'re with clients!',
                    'name' => 'Layla Al Zahra',
                    'company' => 'Serenity Spa Dubai',
                    'image' => 'assets/images/client/01.jpg'
                ],
                [
                    'quote' => 'The health screening feature is amazing. Our AI asks the right questions and ensures client safety before every treatment.',
                    'name' => 'Sarah Mitchell',
                    'company' => 'Wellness Oasis Spa',
                    'image' => 'assets/images/client/02.jpg'
                ],
                [
                    'quote' => 'Arabic language support helped us reach 30% more clients. Our booking rate increased dramatically!',
                    'name' => 'Ahmed Al Mansouri',
                    'company' => 'Luxury Spa & Wellness',
                    'image' => 'assets/images/client/03.jpg'
                ]
            ];
        } else {
            // Real estate testimonials
            $testimonials = [
                [
                    'quote' => 'Sawtic AI recovered 40% more leads for us. We closed 12 extra deals last month just from calls we would have missed!',
                    'name' => 'Ahmed Al Mansouri',
                    'company' => 'Dubai Properties Group',
                    'image' => 'assets/images/client/01.jpg'
                ],
                [
                    'quote' => 'The Arabic language support helped us reach 30% more clients. ROI was 15x in the first 3 months!',
                    'name' => 'Sarah Johnson',
                    'company' => 'Marina Bay Realty',
                    'image' => 'assets/images/client/02.jpg'
                ],
                [
                    'quote' => '24/7 lead capture changed our business. We\'re getting qualified leads even while sleeping!',
                    'name' => 'Mohammad Hassan',
                    'company' => 'DIFC Real Estate',
                    'image' => 'assets/images/client/03.jpg'
                ]
            ];
        }
        @endphp
        
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            @foreach($testimonials as $testimonial)
            <div class="p-8 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                <div class="text-4xl mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-slate-300 text-lg leading-relaxed mb-6">"{{ $testimonial['quote'] }}"</p>
                <div class="flex items-center">
                    <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full mr-4 object-cover">
                    <div>
                        <h4 class="text-white font-semibold">{{ $testimonial['name'] }}</h4>
                        <p class="text-slate-400 text-sm">{{ $testimonial['company'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>