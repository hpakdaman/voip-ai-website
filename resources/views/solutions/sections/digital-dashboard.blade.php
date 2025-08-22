@php
    $section = $data['section'] ?? [];
    $metrics = $section['dashboard_metrics'] ?? [];
    $liveServices = $section['live_services'] ?? [];
@endphp

<section class="relative py-16 bg-slate-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-slate-900 dark:text-white">
                {{ $section['headline'] ?? '' }}
            </h3>
            <p class="text-slate-400 dark:text-slate-300 max-w-xl mx-auto">
                {{ $section['subheadline'] ?? '' }}
            </p>
        </div>

        <!-- Metrics Dashboard Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 mb-12">
            @foreach($metrics as $category)
                <div class="dashboard-category-card p-6 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-slate-900 hover:shadow-xl transition-all duration-300">
                    <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-6 text-center">
                        {{ $category['category'] ?? '' }}
                    </h4>
                    
                    <div class="space-y-4">
                        @foreach($category['metrics'] ?? [] as $metric)
                            <div class="metric-item flex items-center justify-between p-4 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-lg cursor-pointer group" style="background: {{ $metric['trend'] === 'positive' ? 'rgba(30, 192, 141, 0.1)' : ($metric['trend'] === 'neutral' ? 'rgba(30, 192, 141, 0.05)' : 'rgba(239, 68, 68, 0.05)') }}; border: 1px solid {{ $metric['trend'] === 'positive' ? 'rgba(30, 192, 141, 0.2)' : ($metric['trend'] === 'neutral' ? 'rgba(30, 192, 141, 0.1)' : 'rgba(239, 68, 68, 0.2)') }};">
                                <div class="flex items-center space-x-3">
                                    <div class="metric-icon w-10 h-10 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" style="background: {{ $metric['trend'] === 'positive' ? 'rgba(30, 192, 141, 0.2)' : ($metric['trend'] === 'neutral' ? 'rgba(30, 192, 141, 0.15)' : 'rgba(239, 68, 68, 0.15)') }}; color: {{ $metric['trend'] === 'positive' ? 'var(--voip-link)' : ($metric['trend'] === 'neutral' ? 'var(--voip-primary)' : '#ef4444') }};">
                                        <i class="{{ $metric['icon'] ?? 'uil-chart-line' }} text-lg"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-slate-900 dark:text-white text-sm">
                                            {{ $metric['title'] ?? '' }}
                                        </div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400">
                                            @if($metric['trend'] === 'positive')
                                                <span style="color: var(--voip-link);">↗ {{ $metric['change'] ?? '' }}</span>
                                            @elseif($metric['trend'] === 'negative')
                                                <span class="text-red-500">↘ {{ $metric['change'] ?? '' }}</span>
                                            @else
                                                <span style="color: var(--voip-primary);">{{ $metric['change'] ?? '' }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-right">
                                    <div class="text-xl font-bold text-slate-900 dark:text-white">
                                        {{ $metric['value'] ?? '' }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Live Services Status -->
        @if(!empty($liveServices))
            <div class="bg-white dark:bg-slate-900 rounded-2xl border border-gray-200 dark:border-gray-700 p-6">
                <h4 class="text-xl font-semibold text-slate-900 dark:text-white mb-6 text-center">
                    Live Government Services Status
                </h4>
                
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                    @foreach($liveServices as $service)
                        <div class="service-status-item p-4 rounded-xl border border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-slate-800 flex items-center justify-between transition-all duration-300 hover:scale-105 hover:shadow-md cursor-pointer group">
                            <div class="flex items-center space-x-3">
                                <div class="status-indicator w-3 h-3 rounded-full animate-pulse" style="background: var(--voip-link); box-shadow: 0 0 10px rgba(30, 192, 141, 0.5);"></div>
                                <div>
                                    <div class="font-medium text-slate-900 dark:text-white">
                                        {{ $service['service'] ?? '' }}
                                    </div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400">
                                        {{ $service['requests_today'] ?? 0 }} requests today
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-right">
                                <div class="text-sm font-medium" style="color: var(--voip-link);">
                                    {{ $service['avg_response'] ?? '' }}
                                </div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">
                                    avg response
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-6 text-center">
                    <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full" style="background: rgba(30, 192, 141, 0.1); border: 1px solid rgba(30, 192, 141, 0.2);">
                        <div class="w-2 h-2 rounded-full animate-pulse" style="background: var(--voip-link);"></div>
                        <span class="text-sm font-medium" style="color: var(--voip-link);">
                            All Systems Operational - Serving Citizens 24/7
                        </span>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>