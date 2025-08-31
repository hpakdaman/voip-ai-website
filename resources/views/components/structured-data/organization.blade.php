{{-- Organization Schema Markup for Sawtic --}}
@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Sawtic",
    "alternateName": "Sawtic AI",
    "description": "Leading AI call center solutions provider in Dubai, UAE. Advanced virtual assistants, automated customer service, and intelligent communication technology for businesses.",
    "url": "https://sawtic.com",
    "logo": "https://sawtic.com/assets/images/sawtic-logo-darken-green-min.svg",
    "image": "https://sawtic.com/assets/images/corporate/experience-wall.webp",
    "telephone": "+971-4-864-7245",
    "email": "dubai@sawtic.com",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Suite 1401, Gate Building, Dubai International Financial Centre (DIFC)",
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "postalCode": "P.O. Box 74777",
        "addressCountry": "AE"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.276987",
        "longitude": "55.296249"
    },
    "foundingDate": "2020",
    "numberOfEmployees": "11-50",
    "industry": "Artificial Intelligence, Call Centers, Business Automation",
    "keywords": "AI call center, virtual assistants, automated customer service, Dubai AI solutions, UAE call center technology",
    "areaServed": [
        {
            "@type": "Country",
            "name": "United Arab Emirates"
        },
        {
            "@type": "Place",
            "name": "Middle East"
        },
        {
            "@type": "Place", 
            "name": "MENA Region"
        }
    ],
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "25.276987",
            "longitude": "55.296249"
        },
        "geoRadius": "5000000"
    },
    "contactPoint": [
        {
            "@type": "ContactPoint",
            "telephone": "+971-4-864-7245",
            "contactType": "customer service",
            "areaServed": "AE",
            "availableLanguage": ["English", "Arabic"]
        },
        {
            "@type": "ContactPoint",
            "email": "dubai@sawtic.com",
            "contactType": "customer service",
            "areaServed": "AE",
            "availableLanguage": ["English", "Arabic"]
        }
    ],
    "sameAs": [
        "https://www.linkedin.com/company/sawtic",
        "https://twitter.com/sawtic"
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "AI Call Center Solutions",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "AI Virtual Assistants",
                    "description": "Intelligent AI-powered virtual assistants for customer service and sales"
                }
            },
            {
                "@type": "Offer", 
                "itemOffered": {
                    "@type": "Service",
                    "name": "Automated Call Center Solutions",
                    "description": "Complete automated call center infrastructure with AI agents"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Multi-language AI Support",
                    "description": "AI customer service supporting English and Arabic languages"
                }
            }
        ]
    }
}
</script>
@endpush