{{-- Service Schema Markup for AI Call Center Solutions --}}
@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $serviceName ?? 'AI Call Center Solutions' }}",
    "description": "{{ $serviceDescription ?? 'Advanced AI-powered call center solutions for businesses in Dubai and UAE. Automated customer service, intelligent virtual assistants, and multilingual support.' }}",
    "provider": {
        "@type": "Organization",
        "name": "Sawtic",
        "url": "https://sawtic.com",
        "telephone": "+971-4-864-7245",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Suite 1401, Gate Building, DIFC",
            "addressLocality": "Dubai",
            "addressCountry": "AE"
        }
    },
    "areaServed": [
        {
            "@type": "Country",
            "name": "United Arab Emirates"
        },
        {
            "@type": "Place",
            "name": "Dubai"
        },
        {
            "@type": "Place", 
            "name": "Middle East"
        }
    ],
    "availableChannel": {
        "@type": "ServiceChannel",
        "serviceUrl": "{{ $serviceUrl ?? 'https://sawtic.com' }}",
        "serviceName": "Online AI Call Center Platform",
        "availableLanguage": ["English", "Arabic"]
    },
    "category": "Artificial Intelligence, Call Center Technology, Business Automation",
    "serviceType": "AI Call Center Solutions",
    "hoursAvailable": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday", 
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
    },
    "offers": {
        "@type": "Offer",
        "priceCurrency": "AED",
        "price": "{{ $startingPrice ?? '99' }}",
        "priceSpecification": {
            "@type": "UnitPriceSpecification",
            "price": "{{ $startingPrice ?? '99' }}",
            "priceCurrency": "AED",
            "unitText": "per month"
        },
        "availability": "https://schema.org/InStock",
        "validFrom": "2024-01-01"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "{{ $reviewCount ?? '127' }}",
        "bestRating": "5",
        "worstRating": "1"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "AI Call Center Service Plans",
        "itemListElement": [
            {
                "@type": "Offer",
                "name": "Starter Plan",
                "price": "99",
                "priceCurrency": "AED"
            },
            {
                "@type": "Offer", 
                "name": "Professional Plan",
                "price": "299",
                "priceCurrency": "AED"
            },
            {
                "@type": "Offer",
                "name": "Enterprise Plan",
                "price": "799",
                "priceCurrency": "AED"
            }
        ]
    }
}
</script>
@endpush