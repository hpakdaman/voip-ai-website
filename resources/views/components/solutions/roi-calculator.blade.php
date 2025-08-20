<!-- ROI Calculator Section -->
<section id="roi-calculator" class="relative py-24" style="background-color: var(--voip-dark-bg);">
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
                <span class="text-white font-medium">ROI Calculator</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                Calculate Your
                <span style="color: var(--voip-link);">Monthly Savings</span>
            </h2>
            
            <p class="text-slate-300 text-xl leading-relaxed">
                See exactly how much money Sawtic AI will save your real estate business every month
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Calculator Input -->
            <div class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.2s">
                <div class="p-8 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.1) 0%, rgba(22, 47, 58, 0.3) 100%);">
                    <h3 class="text-2xl font-bold text-white mb-6">Your Business Details</h3>
                    
                    <div class="space-y-6">
                        <!-- Monthly Leads -->
                        <div>
                            <label class="block text-white font-medium mb-2">Monthly Incoming Calls</label>
                            <input type="range" id="monthly-calls" min="50" max="1000" value="200" class="w-full roi-slider" style="accent-color: var(--voip-link);">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>50</span>
                                <span id="calls-value" class="font-semibold text-white">200</span>
                                <span>1000+</span>
                            </div>
                        </div>
                        
                        <!-- Average Commission -->
                        <div>
                            <label class="block text-white font-medium mb-2">Average Commission per Sale (AED)</label>
                            <input type="range" id="avg-commission" min="10000" max="200000" value="50000" step="5000" class="w-full roi-slider" style="accent-color: var(--voip-link);">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>10K</span>
                                <span id="commission-value" class="font-semibold text-white">50,000 AED</span>
                                <span>200K+</span>
                            </div>
                        </div>
                        
                        <!-- Current Miss Rate -->
                        <div>
                            <label class="block text-white font-medium mb-2">Calls Currently Missed (%)</label>
                            <input type="range" id="miss-rate" min="10" max="80" value="35" class="w-full roi-slider" style="accent-color: var(--voip-link);">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>10%</span>
                                <span id="miss-rate-value" class="font-semibold text-white">35%</span>
                                <span>80%</span>
                            </div>
                        </div>
                        
                        <!-- Conversion Rate -->
                        <div>
                            <label class="block text-white font-medium mb-2">Lead to Sale Conversion Rate (%)</label>
                            <input type="range" id="conversion-rate" min="1" max="20" value="8" class="w-full roi-slider" style="accent-color: var(--voip-link);">
                            <div class="flex justify-between text-sm text-slate-400 mt-1">
                                <span>1%</span>
                                <span id="conversion-value" class="font-semibold text-white">8%</span>
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Results Display -->
            <div class="wow animate__animated animate__fadeInRight" data-wow-delay="0.4s">
                <div class="p-8 rounded-2xl border border-white/10" style="background: linear-gradient(135deg, rgba(30, 192, 141, 0.15) 0%, rgba(22, 47, 58, 0.4) 100%);">
                    <h3 class="text-2xl font-bold text-white mb-6">Your Potential Savings</h3>
                    
                    <!-- Key Metrics -->
                    <div class="space-y-6 mb-8">
                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="text-slate-400 text-sm">Calls Recovered Monthly</div>
                            <div class="text-2xl font-bold text-white" id="recovered-calls">70</div>
                        </div>
                        
                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.1);">
                            <div class="text-slate-400 text-sm">Additional Sales Monthly</div>
                            <div class="text-2xl font-bold text-white" id="additional-sales">5.6</div>
                        </div>
                        
                        <div class="p-6 rounded-xl border-2 border-green-400/30" style="background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(30, 192, 141, 0.1) 100%);">
                            <div class="text-green-400 text-sm font-medium">Monthly Revenue Increase</div>
                            <div class="text-4xl font-bold text-white" id="revenue-increase">280,000 AED</div>
                        </div>
                        
                        <div class="p-4 rounded-xl border border-white/10" style="background: rgba(30, 192, 141, 0.05);">
                            <div class="text-slate-400 text-sm">Sawtic AI Cost</div>
                            <div class="text-xl font-bold text-white">2,999 AED/month</div>
                        </div>
                    </div>
                    
                    <!-- ROI Summary -->
                    <div class="p-6 rounded-xl border border-white/10 mb-6" style="background: linear-gradient(135deg, var(--voip-primary) 0%, var(--voip-link) 100%);">
                        <div class="text-center">
                            <div class="text-white text-sm opacity-90">Your ROI</div>
                            <div class="text-4xl font-bold text-white" id="roi-percentage">9,333%</div>
                            <div class="text-white text-sm opacity-90">Return on Investment</div>
                        </div>
                    </div>
                    
                    <!-- CTA Button -->
                    <a href="/contact-us" class="w-full inline-flex items-center justify-center px-8 py-4 rounded-xl font-semibold text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%); box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);" data-cta-track="roi-calculator-get-started">
                        <i class="uil uil-rocket text-lg mr-3"></i>
                        Start Saving Today
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Bottom Disclaimer -->
        <div class="text-center mt-12 wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
            <p class="text-slate-400 text-sm">
                * Calculations based on industry averages and actual client results. Individual results may vary.
            </p>
        </div>
    </div>
</section>

<style>
.roi-slider {
    -webkit-appearance: none;
    height: 8px;
    border-radius: 4px;
    background: rgba(30, 192, 141, 0.3);
    outline: none;
}

.roi-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--voip-link);
    cursor: pointer;
    box-shadow: 0 4px 8px rgba(30, 192, 141, 0.3);
}

.roi-slider::-moz-range-thumb {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--voip-link);
    cursor: pointer;
    border: none;
    box-shadow: 0 4px 8px rgba(30, 192, 141, 0.3);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all sliders
    const monthlyCallsSlider = document.getElementById('monthly-calls');
    const avgCommissionSlider = document.getElementById('avg-commission');
    const missRateSlider = document.getElementById('miss-rate');
    const conversionRateSlider = document.getElementById('conversion-rate');
    
    // Get display elements
    const callsValue = document.getElementById('calls-value');
    const commissionValue = document.getElementById('commission-value');
    const missRateValue = document.getElementById('miss-rate-value');
    const conversionValue = document.getElementById('conversion-value');
    
    // Get result elements
    const recoveredCalls = document.getElementById('recovered-calls');
    const additionalSales = document.getElementById('additional-sales');
    const revenueIncrease = document.getElementById('revenue-increase');
    const roiPercentage = document.getElementById('roi-percentage');
    
    function updateCalculations() {
        const calls = parseInt(monthlyCallsSlider.value);
        const commission = parseInt(avgCommissionSlider.value);
        const missRate = parseInt(missRateSlider.value) / 100;
        const conversionRate = parseInt(conversionRateSlider.value) / 100;
        
        // Update display values
        callsValue.textContent = calls;
        commissionValue.textContent = `${commission.toLocaleString()} AED`;
        missRateValue.textContent = `${Math.round(missRate * 100)}%`;
        conversionValue.textContent = `${Math.round(conversionRate * 100)}%`;
        
        // Calculate results
        const callsRecovered = Math.round(calls * missRate);
        const salesGenerated = callsRecovered * conversionRate;
        const monthlyRevenue = salesGenerated * commission;
        const sawticCost = 2999;
        const roi = ((monthlyRevenue - sawticCost) / sawticCost) * 100;
        
        // Update results
        recoveredCalls.textContent = callsRecovered;
        additionalSales.textContent = salesGenerated.toFixed(1);
        revenueIncrease.textContent = `${monthlyRevenue.toLocaleString()} AED`;
        roiPercentage.textContent = `${Math.round(roi).toLocaleString()}%`;
    }
    
    // Add event listeners
    monthlyCallsSlider.addEventListener('input', updateCalculations);
    avgCommissionSlider.addEventListener('input', updateCalculations);
    missRateSlider.addEventListener('input', updateCalculations);
    conversionRateSlider.addEventListener('input', updateCalculations);
    
    // Initial calculation
    updateCalculations();
});
</script>