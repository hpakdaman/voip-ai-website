@php
    $section = $data['section'] ?? [];
    $serviceCategories = $section['service_categories'] ?? [];
    $integrationBenefits = $section['integration_benefits'] ?? [];
@endphp

<section class="relative py-16 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-slate-900/50 to-transparent"></div>
    
    <div class="container relative">
        <div class="grid grid-cols-1 pb-12 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white">
                {{ $section['headline'] ?? '' }}
            </h3>
            <p class="text-slate-300 max-w-xl mx-auto">
                {{ $section['subheadline'] ?? '' }}
            </p>
        </div>

        <!-- Service Categories Matrix -->
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-8 mb-12">
            @foreach($serviceCategories as $index => $category)
                <div class="service-matrix-card group">
                    <!-- Department Header -->
                    <div class="department-header p-6 rounded-t-2xl border-b-4 border-{{ $category['color'] ?? 'blue' }}-400 bg-gradient-to-r from-slate-800 to-slate-700 group-hover:from-slate-700 group-hover:to-slate-600 transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="department-icon w-12 h-12 rounded-xl flex items-center justify-center" style="background: rgba(30, 192, 141, 0.2); color: var(--voip-link);">
                                @switch($category['department'] ?? '')
                                    @case('Municipal Services')
                                        <i class="uil-building text-xl"></i>
                                        @break
                                    @case('Business Services') 
                                        <i class="uil-briefcase text-xl"></i>
                                        @break
                                    @case('Public Safety')
                                        <i class="uil-shield-check text-xl"></i>
                                        @break
                                    @case('Citizen Services')
                                        <i class="uil-users-alt text-xl"></i>
                                        @break
                                    @default
                                        <i class="uil-setting text-xl"></i>
                                @endswitch
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-white">
                                    {{ $category['department'] ?? '' }}
                                </h4>
                                <div class="flex items-center space-x-2 mt-1">
                                    <div class="w-2 h-2 rounded-full animate-pulse" style="background: var(--voip-link);"></div>
                                    <span class="text-sm font-medium" style="color: var(--voip-link);">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services List -->
                    <div class="services-container bg-slate-800/50 backdrop-blur-sm rounded-b-2xl border border-slate-700 border-t-0 overflow-hidden">
                        @foreach($category['services'] ?? [] as $serviceIndex => $service)
                            <div class="service-row p-4 border-b border-slate-600 last:border-b-0 hover:bg-slate-700/50 transition-colors duration-200 group/service">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="service-indicator w-3 h-3 rounded-full group-hover/service:animate-pulse" style="background: var(--voip-link);"></div>
                                        <span class="font-medium text-white">
                                            {{ $service['name'] ?? '' }}
                                        </span>
                                        @if($service['complexity'] === 'critical')
                                            <span class="px-2 py-1 bg-red-500/20 text-red-400 text-xs rounded-full border border-red-500/30">
                                                Critical
                                            </span>
                                        @elseif($service['complexity'] === 'high')
                                            <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 text-xs rounded-full border border-yellow-500/30">
                                                High
                                            </span>
                                        @else
                                            <span class="px-2 py-1 text-xs rounded-full" style="background: rgba(30, 192, 141, 0.2); color: var(--voip-link); border: 1px solid rgba(30, 192, 141, 0.3);">
                                                {{ ucfirst($service['complexity'] ?? 'standard') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        <div class="text-sm font-medium text-slate-300">
                                            {{ $service['volume'] ?? '' }}
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-slate-400">
                                        AI Impact: <span class="font-medium" style="color: var(--voip-link);">{{ $service['ai_impact'] ?? '' }}</span>
                                    </div>
                                    
                                    <!-- AI Enhancement Indicator -->
                                    <div class="ai-indicator flex items-center space-x-1">
                                        <div class="w-1 h-4 rounded-full opacity-100" style="background: var(--voip-link);"></div>
                                        <div class="w-1 h-4 rounded-full opacity-75" style="background: var(--voip-link);"></div>
                                        <div class="w-1 h-4 rounded-full opacity-50" style="background: var(--voip-link);"></div>
                                        <div class="w-1 h-4 rounded-full opacity-25" style="background: var(--voip-link);"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Integration Benefits -->
        @if(!empty($integrationBenefits))
            <div class="integration-benefits">
                <div class="text-center mb-8">
                    <h4 class="text-2xl font-semibold text-white mb-2">
                        System Integration Benefits
                    </h4>
                    <p class="text-slate-300">
                        How our AI creates seamless government service experiences
                    </p>
                </div>
                
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-8">
                    @foreach($integrationBenefits as $benefit)
                        <div class="benefit-card p-6 rounded-2xl bg-gradient-to-br from-slate-800 to-slate-900 border border-slate-600 hover:border-slate-500 transition-all duration-300 group">
                            <div class="benefit-icon w-12 h-12 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 text-white" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                                <i class="{{ $benefit['icon'] ?? 'uil-cog' }} text-xl"></i>
                            </div>
                            
                            <h5 class="text-lg font-semibold text-white mb-3">
                                {{ $benefit['title'] ?? '' }}
                            </h5>
                            
                            <p class="text-slate-400 text-sm leading-relaxed">
                                {{ $benefit['description'] ?? '' }}
                            </p>
                            
                            <div class="mt-4 flex items-center space-x-2">
                                <div class="flex-1 h-1 bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full transform transition-transform duration-1000 group-hover:translate-x-0" style="width: 85%; transform: translateX(-100%); background: linear-gradient(90deg, var(--voip-primary) 0%, var(--voip-link) 100%);"></div>
                                </div>
                                <span class="text-xs text-slate-400">Active</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>