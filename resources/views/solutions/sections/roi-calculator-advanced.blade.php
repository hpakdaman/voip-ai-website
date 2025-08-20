@php
$sectionData = $data['section'] ?? [];
$calculatorData = $data['advanced_calculator'] ?? [];
@endphp

<!-- Advanced ROI Calculator Section -->
<section id="roi-calculator-advanced" class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <div class="absolute inset-0">
        <!-- Calculator Background -->
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, transparent 70%), radial-gradient(ellipse at left, rgba(29, 120, 97, 0.05) 0%, transparent 50%);"></div>
        <!-- Grid Pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(30, 192, 141, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(30, 192, 141, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1); backdrop-filter: blur(10px);">
                <i class="uil uil-calculator text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['badge'] ?? 'Advanced ROI Calculator' }}</span>
            </div>

            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                {{ $sectionData['title'] ?? 'Calculate Your' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'Monthly Savings' }}</span>
            </h2>

            <p class="text-slate-300 text-xl leading-relaxed">
                {{ $sectionData['description'] ?? 'See exactly how much money Sawtic AI will save your business every month' }}
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-stretch">
            <!-- Calculator Input -->
            <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                <div class="p-8 rounded-2xl border border-white/10 h-full flex flex-col" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <h3 class="text-2xl font-bold text-white mb-6">Your Business Details</h3>

                    <div class="space-y-6" id="advanced-roi-calculator">
                        <!-- Monthly Calls -->
                        <div>
                            <label class="block text-white font-medium mb-2">Monthly Incoming Calls</label>
                            <input type="range" id="monthly-calls" 
                                   min="{{ $calculatorData['calls']['min'] ?? 50 }}" 
                                   max="{{ $calculatorData['calls']['max'] ?? 1000 }}" 
                                   value="{{ $calculatorData['calls']['default'] ?? 200 }}" 
                                   class="w-full voip-slider">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>{{ $calculatorData['calls']['min'] ?? 50 }}</span>
                                <span id="calls-value" class="font-semibold text-white">{{ $calculatorData['calls']['default'] ?? 200 }}</span>
                                <span>{{ $calculatorData['calls']['max'] ?? 1000 }}+</span>
                            </div>
                        </div>

                        <!-- Average Transaction Value -->
                        <div>
                            <label class="block text-white font-medium mb-2">{{ $calculatorData['value']['label'] ?? 'Average Transaction Value (AED)' }}</label>
                            <input type="range" id="avg-transaction" 
                                   min="{{ $calculatorData['value']['min'] ?? 500 }}" 
                                   max="{{ $calculatorData['value']['max'] ?? 10000 }}" 
                                   value="{{ $calculatorData['value']['default'] ?? 2000 }}" 
                                   step="{{ $calculatorData['value']['step'] ?? 100 }}" 
                                   class="w-full voip-slider">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>{{ $calculatorData['value']['min'] ?? 500 }}</span>
                                <span id="transaction-value" class="font-semibold text-white">{{ $calculatorData['value']['default'] ?? 2000 }} AED</span>
                                <span>{{ $calculatorData['value']['max'] ?? 10000 }}+</span>
                            </div>
                        </div>

                        <!-- Current Miss Rate -->
                        <div>
                            <label class="block text-white font-medium mb-2">Calls Currently Missed (%)</label>
                            <input type="range" id="miss-rate" min="10" max="80" value="{{ $calculatorData['miss_rate'] ?? 35 }}" class="w-full voip-slider">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>10%</span>
                                <span id="miss-rate-value" class="font-semibold text-white">{{ $calculatorData['miss_rate'] ?? 35 }}%</span>
                                <span>80%</span>
                            </div>
                        </div>

                        <!-- Conversion Rate -->
                        <div>
                            <label class="block text-white font-medium mb-2">{{ $calculatorData['conversion']['label'] ?? 'Conversion Rate (%)' }}</label>
                            <input type="range" id="conversion-rate" min="1" max="30" value="{{ $calculatorData['conversion']['default'] ?? 8 }}" class="w-full voip-slider">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>1%</span>
                                <span id="conversion-value" class="font-semibold text-white">{{ $calculatorData['conversion']['default'] ?? 8 }}%</span>
                                <span>30%</span>
                            </div>
                        </div>

                        <!-- Sawtic Cost -->
                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="text-center">
                                <div class="text-slate-400 text-sm">Monthly Sawtic Cost</div>
                                <div class="text-2xl font-bold text-white">999 AED</div>
                                <div class="text-slate-400 text-xs">All-inclusive pricing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Results Display -->
            <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
                <div class="p-8 rounded-2xl border border-white/10 h-full flex flex-col" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(22, 47, 58, 0.4) 100%);">
                    <h3 class="text-2xl font-bold text-white mb-6">Your Potential Savings</h3>

                    <!-- Key Metrics -->
                    <div class="space-y-4 mb-6 flex-1">
                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="text-slate-400 text-sm">Calls Recovered Monthly</div>
                            <div id="calls-recovered" class="text-3xl font-bold text-white">70</div>
                            <div class="text-slate-400 text-xs">Previously missed opportunities</div>
                        </div>

                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="text-slate-400 text-sm">Additional Monthly Revenue</div>
                            <div id="additional-revenue" class="text-3xl font-bold" style="color: var(--voip-link);">11,200 AED</div>
                            <div class="text-slate-400 text-xs">From recovered calls</div>
                        </div>

                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="text-slate-400 text-sm">Net Monthly Profit</div>
                            <div id="net-profit" class="text-3xl font-bold" style="color: var(--voip-link);">10,201 AED</div>
                            <div class="text-slate-400 text-xs">After Sawtic costs</div>
                        </div>

                        <div class="p-4 rounded-xl border-2" style="border-color: var(--voip-link); background: rgba(30, 192, 141, 0.2);">
                            <div class="text-center">
                                <div class="text-slate-300 text-sm">Annual ROI</div>
                                <div id="annual-roi" class="text-4xl font-bold" style="color: var(--voip-link);">10.2x</div>
                                <div class="text-slate-300 text-xs">Return on investment</div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="mt-auto">
                        <a href="/contact-us" class="block w-full text-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="advanced-roi-contact">
                            <i class="uil uil-rocket text-xl mr-3"></i>
                            Start Saving Today
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Disclaimer -->
        <div class="text-center mt-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <p class="text-slate-400 text-sm max-w-2xl mx-auto">
                * Calculations based on industry averages and Sawtic AI's 95% call capture rate. Actual results may vary based on your specific business model and market conditions.
            </p>
        </div>
    </div>
</section>

<script>
// Advanced ROI Calculator Logic
document.addEventListener('DOMContentLoaded', function() {
    const monthlyCallsSlider = document.getElementById('monthly-calls');
    const avgTransactionSlider = document.getElementById('avg-transaction');
    const missRateSlider = document.getElementById('miss-rate');
    const conversionRateSlider = document.getElementById('conversion-rate');
    
    const callsValue = document.getElementById('calls-value');
    const transactionValue = document.getElementById('transaction-value');
    const missRateValue = document.getElementById('miss-rate-value');
    const conversionValue = document.getElementById('conversion-value');
    
    const callsRecovered = document.getElementById('calls-recovered');
    const additionalRevenue = document.getElementById('additional-revenue');
    const netProfit = document.getElementById('net-profit');
    const annualROI = document.getElementById('annual-roi');
    
    const sawtiqCost = 999; // Monthly cost in AED
    
    function updateAdvancedCalculation() {
        const monthlyCalls = parseInt(monthlyCallsSlider.value);
        const avgTransaction = parseInt(avgTransactionSlider.value);
        const missRate = parseInt(missRateSlider.value);
        const conversionRate = parseInt(conversionRateSlider.value);
        
        // Update display values
        callsValue.textContent = monthlyCalls;
        transactionValue.textContent = avgTransaction + ' AED';
        missRateValue.textContent = missRate + '%';
        conversionValue.textContent = conversionRate + '%';
        
        // Calculate recovered calls
        const missedCalls = (monthlyCalls * missRate) / 100;
        const recoveredCalls = Math.round(missedCalls * 0.95); // 95% recovery rate
        
        // Calculate additional revenue
        const additionalConversions = (recoveredCalls * conversionRate) / 100;
        const monthlyAdditionalRevenue = Math.round(additionalConversions * avgTransaction);
        
        // Calculate net profit and ROI
        const monthlyNetProfit = monthlyAdditionalRevenue - sawtiqCost;
        const annualNetProfit = monthlyNetProfit * 12;
        const annualCost = sawtiqCost * 12;
        const roi = annualNetProfit / annualCost;
        
        // Update displays
        callsRecovered.textContent = recoveredCalls;
        additionalRevenue.textContent = monthlyAdditionalRevenue.toLocaleString() + ' AED';
        netProfit.textContent = monthlyNetProfit.toLocaleString() + ' AED';
        annualROI.textContent = roi.toFixed(1) + 'x';
    }
    
    // Add event listeners
    monthlyCallsSlider.addEventListener('input', updateAdvancedCalculation);
    avgTransactionSlider.addEventListener('input', updateAdvancedCalculation);
    missRateSlider.addEventListener('input', updateAdvancedCalculation);
    conversionRateSlider.addEventListener('input', updateAdvancedCalculation);
    
    // Initial calculation
    updateAdvancedCalculation();
});
</script>