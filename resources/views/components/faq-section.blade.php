@php
try {
    $faqData = json_decode(file_get_contents(resource_path('data/faqs.json')), true);
    $faqs = $faqData['faqs'] ?? [];
} catch (Exception $e) {
    // Fallback data in case JSON file cannot be read
    $faqs = [
        [
            'id' => 1,
            'question' => 'How quickly can I get started with your VoIP AI solution?',
            'answer' => 'You can get started within 24-48 hours. Our team provides complete setup, integration with your existing systems, and training for your staff to ensure a smooth transition.',
            'delay' => '0.1s'
        ],
        [
            'id' => 2,
            'question' => 'Is the AI solution compatible with UAE regulations?',
            'answer' => 'Yes, our VoIP AI solution is fully compliant with UAE TRA (Telecommunications and Digital Government Regulatory Authority) regulations and meets all local data protection requirements.',
            'delay' => '0.2s'
        ],
        [
            'id' => 3,
            'question' => 'Can the AI handle multiple languages including Arabic?',
            'answer' => 'Absolutely! Our AI supports over 50 languages including Arabic, English, and other regional languages. It can seamlessly switch between languages during conversations.',
            'delay' => '0.3s'
        ],
        [
            'id' => 4,
            'question' => 'What happens if the AI cannot handle a customer query?',
            'answer' => 'Our AI is designed with intelligent escalation. When it encounters complex queries beyond its scope, it seamlessly transfers the call to human agents with complete conversation context.',
            'delay' => '0.4s'
        ],
        [
            'id' => 5,
            'question' => 'Do you offer 24/7 technical support for UAE businesses?',
            'answer' => 'Yes, we provide round-the-clock technical support with local UAE support staff who understand regional business needs and can assist in Arabic and English.',
            'delay' => '0.5s'
        ],
        [
            'id' => 6,
            'question' => 'Can I integrate this with my existing CRM and business tools?',
            'answer' => 'Our VoIP AI solution integrates with 200+ popular business tools including Salesforce, HubSpot, Microsoft Teams, WhatsApp Business, and local UAE business platforms.',
            'delay' => '0.6s'
        ]
    ];
}

// Sort by priority if available
usort($faqs, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp

<!-- FAQ Section Start -->
<section class="relative py-16" style="background-color: var(--voip-bg);" id="faq">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #162f3a, #0c1b27); opacity: 0.8;"></div>
    <div class="container relative z-1">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h6 class="text-base font-medium uppercase mb-2 wow animate__animated animate__fadeInUp" style="color: var(--voip-link);" data-wow-delay="0.1s">Support Center</h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold text-white wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                Frequently Asked Questions
            </h3>
            <p class="text-slate-300 max-w-xl mx-auto wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                Get answers to the most common questions about our AI VoIP solutions for UAE businesses
            </p>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            @foreach($faqs as $index => $faq)
            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{ $faq['delay'] }}">
                <div class="border border-dashed border-white/30 rounded-xl duration-500 premium-card faq-card accordion-card" data-faq-id="faq-{{ $faq['id'] ?? $index }}">
                    <!-- Question Header (Always Visible) -->
                    <div class="faq-header p-8 cursor-pointer flex items-center justify-between" onclick="toggleFaq(this)">
                        <div class="flex items-center flex-1">
                            <i class="uil uil-question-circle text-2xl me-4 flex-shrink-0" style="color: var(--voip-link);"></i>
                            <h5 class="text-lg font-semibold text-white pr-4">{{ $faq['question'] }}</h5>
                        </div>
                        <i class="uil uil-angle-down text-xl transition-transform duration-300 flex-shrink-0" style="color: var(--voip-link);"></i>
                    </div>
                    
                    <!-- Answer Content (Collapsible) -->
                    <div class="faq-content overflow-hidden transition-all duration-500 ease-in-out" style="max-height: 0;">
                        <div class="px-8 pb-8">
                            <div class="flex">
                                <div class="w-8 me-4 flex-shrink-0"></div> <!-- Spacer to align with icon -->
                                <p class="text-slate-300">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="grid grid-cols-1 mt-12">
            <div class="text-center">
                <div class="wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
                    <h5 class="text-xl font-semibold text-white mb-4">
                        Still have questions?
                    </h5>
                    <p class="text-slate-300 mb-6">
                        Our UAE-based experts are ready to help you understand how our AI VoIP solution can transform your business
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-center justify-center">
                        <a href="{{ url('/contact-us') }}" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center text-white rounded-md hover:scale-105 transition-all hover-voip-button" style="background-color: var(--voip-primary);">
                            Contact Support
                        </a>
                        <a href="tel:+971-4-XXX-XXXX" class="py-3 px-8 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center border-2 rounded-md transition-all hover:text-white hover:scale-105" style="border-color: var(--voip-primary); color: var(--voip-primary);" onmouseover="this.style.backgroundColor='var(--voip-primary)'" onmouseout="this.style.backgroundColor='transparent'">
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Accordion JavaScript -->
<script>
function toggleFaq(headerElement) {
    const card = headerElement.closest('.accordion-card');
    const content = card.querySelector('.faq-content');
    const arrow = headerElement.querySelector('.uil-angle-down');
    const isOpen = card.classList.contains('faq-open');
    
    if (isOpen) {
        // Close the FAQ
        content.style.maxHeight = '0';
        arrow.style.transform = 'rotate(0deg)';
        card.classList.remove('faq-open');
    } else {
        // Close all other FAQs first (single accordion behavior)
        document.querySelectorAll('.accordion-card.faq-open').forEach(openCard => {
            if (openCard !== card) {
                const openContent = openCard.querySelector('.faq-content');
                const openArrow = openCard.querySelector('.uil-angle-down');
                
                // Close the open FAQ
                openContent.style.maxHeight = '0';
                openArrow.style.transform = 'rotate(0deg)';
                openCard.classList.remove('faq-open');
            }
        });
        
        // Open this FAQ
        content.style.maxHeight = content.scrollHeight + 'px';
        arrow.style.transform = 'rotate(180deg)';
        card.classList.add('faq-open');
        
        // Auto-adjust height after transition in case content changes
        setTimeout(() => {
            if (card.classList.contains('faq-open')) {
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        }, 500);
    }
}

// Optional: Auto-open first FAQ on page load
document.addEventListener('DOMContentLoaded', function() {
    // Uncomment the line below to auto-open the first FAQ
    // const firstFaq = document.querySelector('.faq-header');
    // if (firstFaq) toggleFaq(firstFaq);
});
</script>
<!-- FAQ Section End -->