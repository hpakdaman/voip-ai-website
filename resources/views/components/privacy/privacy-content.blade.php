@php
$privacyData = json_decode(file_get_contents(resource_path('data/privacy/privacy-sections.json')), true);
$sections = $privacyData['sections'] ?? [];
$contactInfo = $privacyData['contact_info'] ?? [];
@endphp

<!-- Comprehensive Privacy Policy Content Section -->
<section class="relative py-20" style="background-color: var(--voip-bg);">
    <div class="container relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-shield-plus text-xl mr-3" style="color: var(--voip-link);"></i>
                <span class="text-slate-300 font-medium">Privacy Framework</span>
            </div>
            <h2 class="text-5xl font-bold text-white mb-6">{{ $privacyData['section']['title'] ?? 'Privacy Protection Framework' }}</h2>
            <p class="text-slate-300 max-w-3xl mx-auto text-lg">{{ $privacyData['section']['description'] ?? 'Complete data protection policies governing our services' }}</p>
        </div>

        <!-- Privacy Sections Grid -->
        <div class="grid lg:grid-cols-1 gap-8 max-w-6xl mx-auto">
            @foreach($sections as $index => $section)
            <div id="{{ $section['id'] }}" class="group relative wow animate__animated animate__fadeInUp" data-wow-delay="{{ $section['delay'] ?? ($index * 0.1 + 0.2) }}s">
                <!-- Section Card -->
                <div class="relative p-8 rounded-2xl border border-white/10 transition-all duration-500 hover:border-white/20 hover:shadow-2xl" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.05) 0%, rgba(22, 47, 58, 0.1) 100%); backdrop-filter: blur(10px);">
                    
                    <!-- Section Header -->
                    <div class="flex items-start mb-6">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center mr-4" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                            <i class="{{ $section['icon'] ?? 'uil-file-shield-alt' }} text-white text-xl"></i>
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
                            <div class="mb-4">
                                @if(str_starts_with($paragraph, '**') && str_contains($paragraph, ':**'))
                                    @php
                                        // Parse bold headings with descriptions
                                        preg_match('/\*\*(.*?)\*\*:\s*(.*)/', $paragraph, $matches);
                                        $heading = $matches[1] ?? '';
                                        $description = $matches[2] ?? $paragraph;
                                    @endphp
                                    <h4 class="text-lg font-semibold mb-2" style="color: var(--voip-link);">{{ $heading }}</h4>
                                    <p class="text-slate-300 leading-relaxed text-base">{{ $description }}</p>
                                @else
                                    <p class="text-slate-300 leading-relaxed text-base">{{ $paragraph }}</p>
                                @endif
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Hover Effect -->
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity duration-500" style="background: linear-gradient(135deg, var(--voip-link) 0%, var(--voip-primary) 100%);"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Contact & Rights Section -->
        @if(!empty($contactInfo))
        <div class="mt-20 wow animate__animated animate__fadeInUp" data-wow-delay="1.4s">
            <div class="max-w-5xl mx-auto">
                
                <!-- Header -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                        <i class="uil uil-user-circle text-xl mr-3" style="color: var(--voip-link);"></i>
                        <span class="text-slate-300 font-medium">Data Protection Officer</span>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-4">{{ $contactInfo['title'] ?? 'Privacy Questions & Requests' }}</h3>
                    <p class="text-slate-300 text-lg max-w-2xl mx-auto">{{ $contactInfo['description'] ?? 'Contact our Data Protection Officer for privacy-related inquiries.' }}</p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8">
                    
                    <!-- DPO Contact Card -->
                    @if(isset($contactInfo['dpo']))
                    <div class="lg:col-span-2">
                        <div class="relative p-8 rounded-2xl border border-white/20" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(20px);">
                            <h4 class="text-xl font-bold text-white mb-6">Contact Information</h4>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Email -->
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                        <i class="uil uil-envelope text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold text-sm">Email DPO</p>
                                        <a href="mailto:{{ $contactInfo['dpo']['email'] }}" class="text-slate-300 hover:text-white transition-colors">{{ $contactInfo['dpo']['email'] }}</a>
                                    </div>
                                </div>
                                
                                <!-- Phone -->
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                        <i class="uil uil-phone text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold text-sm">Call Direct</p>
                                        <a href="tel:{{ $contactInfo['dpo']['phone'] }}" class="text-slate-300 hover:text-white transition-colors">{{ $contactInfo['dpo']['phone'] }}</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Address -->
                            <div class="mt-6 pt-6 border-t border-white/10">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 rounded-lg flex items-center justify-center mt-1" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                        <i class="uil uil-map-marker text-white"></i>
                                    </div>
                                    <div>
                                        <p class="text-white font-semibold text-sm mb-1">Office Address</p>
                                        <p class="text-slate-300 text-sm">{{ $contactInfo['dpo']['address'] }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Response Time -->
                            <div class="mt-6 p-4 rounded-lg" style="background: rgba(30, 192, 141, 0.1);">
                                <p class="text-slate-300 text-sm"><strong class="text-white">Response Time:</strong> {{ $contactInfo['dpo']['response_time'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Rights Portal & Complaints -->
                    <div class="space-y-6">
                        <!-- Rights Portal -->
                        @if(isset($contactInfo['rights_portal']))
                        <div class="relative p-6 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(15px);">
                            <div class="flex items-center mb-4">
                                <i class="uil uil-web-grid text-2xl mr-3" style="color: var(--voip-link);"></i>
                                <h4 class="text-lg font-semibold text-white">Online Portal</h4>
                            </div>
                            <p class="text-slate-300 text-sm mb-4">{{ $contactInfo['rights_portal'] }}</p>
                            <a href="/privacy-portal" class="inline-flex items-center px-4 py-2 rounded-lg font-medium text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="uil uil-external-link-alt mr-2"></i>
                                Visit Portal
                            </a>
                        </div>
                        @endif

                        <!-- Complaint Authorities -->
                        @if(isset($contactInfo['complaint_authority']))
                        <div class="relative p-6 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%); backdrop-filter: blur(15px);">
                            <div class="flex items-center mb-4">
                                <i class="uil uil-gavel text-2xl mr-3" style="color: var(--voip-link);"></i>
                                <h4 class="text-lg font-semibold text-white">Complaint Authorities</h4>
                            </div>
                            <div class="space-y-3">
                                <div>
                                    <p class="text-white font-semibold text-sm">UAE</p>
                                    <p class="text-slate-300 text-xs">{{ $contactInfo['complaint_authority']['uae'] }}</p>
                                </div>
                                <div>
                                    <p class="text-white font-semibold text-sm">Australia</p>
                                    <p class="text-slate-300 text-xs">{{ $contactInfo['complaint_authority']['australia'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        @endif

    </div>
</section>