@php
$sectionData = $data['section'] ?? [];
$calculatorData = $data['calculator'] ?? [];
@endphp

<!-- ROI Calculator Section -->
<section class="relative py-24" style="background-color: var(--voip-dark-bg);">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-4xl mx-auto mb-16 wow animate__animated animate__fadeInUp">
            <div class="inline-flex items-center px-6 py-3 rounded-full border border-white/20 mb-6" style="background: rgba(30, 192, 141, 0.1);">
                <i class="uil uil-calculator text-lg mr-3" style="color: var(--voip-link);"></i>
                <span class="text-white font-medium">{{ $sectionData['badge'] ?? 'ROI Calculator' }}</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">
                {{ $sectionData['title'] ?? 'Calculate Your' }}
                <span style="color: var(--voip-link);">{{ $sectionData['highlighted'] ?? 'Potential Savings' }}</span>
            </h2>
            
            @if(isset($sectionData['description']))
            <p class="text-slate-300 text-xl leading-relaxed">{{ $sectionData['description'] }}</p>
            @endif
        </div>
        
        <!-- ROI Calculator -->
        <div class="max-w-4xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Calculator Inputs -->
                <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.1s">
                    <div class="h-full p-8 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.4) 100%);">
                        <h3 class="text-2xl font-bold text-white mb-6">Your Business Details</h3>
                        
                        <div class="space-y-6" id="roi-calculator">
                            <!-- Calls per Day -->
                            <div>
                                <label class="block text-white font-medium mb-2">Average calls per day</label>
                                <input type="range" 
                                       id="callsPerDay" 
                                       min="{{ $calculatorData['min_calls'] ?? 10 }}" 
                                       max="{{ $calculatorData['max_calls'] ?? 200 }}" 
                                       value="{{ $calculatorData['default_calls'] ?? 50 }}" 
                                       class="w-full voip-slider">
                                <div class="flex justify-between text-slate-400 text-sm mt-1">
                                    <span>{{ $calculatorData['min_calls'] ?? 10 }}</span>
                                    <span id="callsValue" class="font-bold text-white">{{ $calculatorData['default_calls'] ?? 50 }}</span>
                                    <span>{{ $calculatorData['max_calls'] ?? 200 }}</span>
                                </div>
                            </div>
                            
                            <!-- Missed Calls Percentage -->
                            <div>
                                <label class="block text-white font-medium mb-2">Missed calls percentage</label>
                                <input type="range" 
                                       id="missedCalls" 
                                       min="5" 
                                       max="50" 
                                       value="{{ $calculatorData['default_missed'] ?? 25 }}" 
                                       class="w-full voip-slider">
                                <div class="flex justify-between text-slate-400 text-sm mt-1">
                                    <span>5%</span>
                                    <span id="missedValue" class="font-bold text-white">{{ $calculatorData['default_missed'] ?? 25 }}%</span>
                                    <span>50%</span>
                                </div>
                            </div>
                            
                            <!-- Average Deal Value -->
                            <div>
                                <label class="block text-white font-medium mb-2">Average deal value (AED)</label>
                                <input type="range" 
                                       id="dealValue" 
                                       min="{{ $calculatorData['min_deal'] ?? 500 }}" 
                                       max="{{ $calculatorData['max_deal'] ?? 10000 }}" 
                                       value="{{ $calculatorData['default_deal'] ?? 2000 }}" 
                                       step="100" 
                                       class="w-full voip-slider">
                                <div class="flex justify-between text-slate-400 text-sm mt-1">
                                    <span>{{ $calculatorData['min_deal'] ?? 500 }}</span>
                                    <span id="dealValueDisplay" class="font-bold text-white">{{ $calculatorData['default_deal'] ?? 2000 }}</span>
                                    <span>{{ $calculatorData['max_deal'] ?? 10000 }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Calculator Results -->
                <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.2s">
                    <div class="h-full p-8 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.2) 0%, rgba(22, 47, 58, 0.4) 100%);">
                        <h3 class="text-2xl font-bold text-white mb-6">Your Potential Savings</h3>
                        
                        <!-- Results Cards -->
                        <div class="space-y-6">
                            <!-- Monthly Missed Revenue -->
                            <div class="p-6 rounded-xl border border-white/20" style="background: rgba(239, 68, 68, 0.1);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-red-400 text-sm font-medium">Monthly Missed Revenue</p>
                                        <p class="text-red-200 text-xs">Without Sawtic AI</p>
                                    </div>
                                    <div class="text-right">
                                        <div id="missedRevenue" class="text-2xl font-bold text-red-400">AED 0</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Monthly Recovered Revenue -->
                            <div class="p-6 rounded-xl border border-white/20" style="background: rgba(30, 192, 141, 0.1);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium" style="color: var(--voip-link);">Monthly Recovered Revenue</p>
                                        <p class="text-slate-400 text-xs">With Sawtic AI (95% capture)</p>
                                    </div>
                                    <div class="text-right">
                                        <div id="recoveredRevenue" class="text-2xl font-bold" style="color: var(--voip-link);">AED 0</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Annual ROI -->
                            <div class="p-6 rounded-xl border-2" style="border-color: var(--voip-link); background: rgba(30, 192, 141, 0.05);">
                                <div class="text-center">
                                    <p class="text-white font-medium mb-2">Annual ROI</p>
                                    <div id="annualROI" class="text-4xl font-bold mb-2" style="color: var(--voip-link);">0x</div>
                                    <p class="text-slate-400 text-sm">Return on Investment</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <div class="mt-8">
                            <a href="/contact-us" class="block w-full text-center px-8 py-4 rounded-2xl font-bold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%); box-shadow: 0 15px 40px rgba(30, 192, 141, 0.4);" data-cta-track="roi-calculator-contact">
                                <i class="uil uil-calendar-alt text-xl mr-3"></i>
                                Start Saving Today
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Info -->
        <div class="text-center mt-16 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
            <div class="max-w-2xl mx-auto">
                <p class="text-slate-400 text-sm">
                    * Calculations based on industry averages. Actual results may vary. 
                    {{ $calculatorData['disclaimer'] ?? 'Sawtic AI typically achieves 95% call capture rate.' }}
                </p>
            </div>
        </div>
    </div>
</section>

<script>
// ROI Calculator Logic
document.addEventListener('DOMContentLoaded', function() {
    const callsPerDaySlider = document.getElementById('callsPerDay');
    const missedCallsSlider = document.getElementById('missedCalls');
    const dealValueSlider = document.getElementById('dealValue');
    
    const callsValue = document.getElementById('callsValue');
    const missedValue = document.getElementById('missedValue');
    const dealValueDisplay = document.getElementById('dealValueDisplay');
    
    const missedRevenue = document.getElementById('missedRevenue');
    const recoveredRevenue = document.getElementById('recoveredRevenue');
    const annualROI = document.getElementById('annualROI');
    
    const sawtiqCost = 999; // Monthly cost in AED
    
    function updateCalculation() {
        const dailyCalls = parseInt(callsPerDaySlider.value);
        const missedPercent = parseInt(missedCallsSlider.value);
        const avgDeal = parseInt(dealValueSlider.value);
        
        // Update display values
        callsValue.textContent = dailyCalls;
        missedValue.textContent = missedPercent + '%';
        dealValueDisplay.textContent = avgDeal;
        
        // Calculate missed calls per month
        const dailyMissed = (dailyCalls * missedPercent) / 100;
        const monthlyMissed = dailyMissed * 30;
        
        // Calculate missed revenue
        const monthlyMissedRevenue = monthlyMissed * avgDeal;
        const recoveredRevenue95 = monthlyMissedRevenue * 0.95; // 95% capture rate
        
        // Calculate annual ROI
        const annualSavings = recoveredRevenue95 * 12;
        const annualCost = sawtiqCost * 12;
        const roi = annualSavings / annualCost;
        
        // Update displays
        missedRevenue.textContent = 'AED ' + monthlyMissedRevenue.toLocaleString();
        document.getElementById('recoveredRevenue').textContent = 'AED ' + recoveredRevenue95.toLocaleString();
        annualROI.textContent = roi.toFixed(1) + 'x';
    }
    
    // Add event listeners
    callsPerDaySlider.addEventListener('input', updateCalculation);
    missedCallsSlider.addEventListener('input', updateCalculation);
    dealValueSlider.addEventListener('input', updateCalculation);
    
    // Initial calculation
    updateCalculation();
});
</script>