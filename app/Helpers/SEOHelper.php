<?php

namespace App\Helpers;

class SEOHelper
{
    /**
     * Generate JSON-LD structured data for the website
     */
    public static function generateStructuredData($type = 'website', $data = [])
    {
        $baseData = [
            '@context' => 'https://schema.org',
        ];

        switch ($type) {
            case 'website':
                return array_merge($baseData, [
                    '@type' => 'WebSite',
                    'name' => 'Sawtic - AI Call Center Solutions UAE',
                    'alternateName' => 'Sawtic AI',
                    'description' => 'Leading AI call center and virtual assistant solutions in UAE. Advanced AI voice technology for business automation, customer service, and intelligent communication.',
                    'url' => url('/'),
                    'logo' => url('/assets/images/logo-light.png'),
                    'sameAs' => [
                        'https://linkedin.com/company/sawtic',
                        'https://twitter.com/sawticai',
                        'https://facebook.com/sawticai'
                    ],
                    'potentialAction' => [
                        '@type' => 'SearchAction',
                        'target' => url('/?search={search_term_string}'),
                        'query-input' => 'required name=search_term_string'
                    ]
                ]);

            case 'organization':
                return array_merge($baseData, [
                    '@type' => 'Organization',
                    'name' => 'Sawtic',
                    'legalName' => 'Sawtic Technologies LLC',
                    'description' => 'AI call center and intelligent communication solutions provider in UAE',
                    'url' => url('/'),
                    'logo' => url('/assets/images/logo-light.png'),
                    'foundingDate' => '2023',
                    'founders' => [
                        [
                            '@type' => 'Person',
                            'name' => 'Sawtic Founders'
                        ]
                    ],
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => 'Suite 1401, Gate Building, Dubai International Financial Centre (DIFC)',
                        'addressLocality' => 'Dubai',
                        'addressCountry' => 'AE',
                        'postalCode' => 'P.O. Box 74777'
                    ],
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'telephone' => '+971-4-864-7245',
                        'contactType' => 'customer service',
                        'email' => 'dubai@sawtic.com',
                        'availableLanguage' => ['English', 'Arabic']
                    ],
                    'sameAs' => [
                        'https://linkedin.com/company/sawtic',
                        'https://twitter.com/sawticai'
                    ]
                ]);

            case 'service':
                return array_merge($baseData, [
                    '@type' => 'Service',
                    'name' => $data['name'] ?? 'AI Call Center Solutions',
                    'description' => $data['description'] ?? 'Advanced AI-powered call center and virtual assistant services',
                    'provider' => [
                        '@type' => 'Organization',
                        'name' => 'Sawtic',
                        'url' => url('/')
                    ],
                    'areaServed' => [
                        [
                            '@type' => 'Country',
                            'name' => 'United Arab Emirates'
                        ],
                        [
                            '@type' => 'Country', 
                            'name' => 'Saudi Arabia'
                        ]
                    ],
                    'serviceType' => 'AI Call Center Solutions',
                    'offers' => [
                        '@type' => 'Offer',
                        'availability' => 'https://schema.org/InStock',
                        'price' => 'Contact for pricing',
                        'priceCurrency' => 'AED'
                    ]
                ]);

            case 'breadcrumbs':
                $breadcrumbs = $data['breadcrumbs'] ?? [];
                $listItems = [];
                
                foreach ($breadcrumbs as $index => $breadcrumb) {
                    $listItems[] = [
                        '@type' => 'ListItem',
                        'position' => $index + 1,
                        'name' => $breadcrumb['name'],
                        'item' => $breadcrumb['url']
                    ];
                }

                return array_merge($baseData, [
                    '@type' => 'BreadcrumbList',
                    'itemListElement' => $listItems
                ]);
        }

        return $baseData;
    }

    /**
     * Generate meta tags for pages
     */
    public static function generateMetaTags($page = 'home', $customData = [])
    {
        $defaults = [
            'title' => 'Sawtic | AI Call Center Solutions UAE - Dubai Business Automation',
            'description' => 'Leading AI call center solutions in UAE. Advanced virtual assistants, automated customer service, and intelligent communication technology for Dubai businesses.',
            'keywords' => 'AI call center UAE, virtual assistant Dubai, AI customer service, business automation Dubai, intelligent communication UAE, voice AI technology',
            'image' => url('/assets/images/og-image.jpg'),
            'url' => url()->current()
        ];

        $metaData = array_merge($defaults, $customData);

        return [
            // Basic Meta Tags
            'title' => $metaData['title'],
            'description' => $metaData['description'],
            'keywords' => $metaData['keywords'],
            
            // Open Graph Tags
            'og:title' => $metaData['title'],
            'og:description' => $metaData['description'],
            'og:image' => $metaData['image'],
            'og:url' => $metaData['url'],
            'og:type' => 'website',
            'og:site_name' => 'Sawtic',
            'og:locale' => 'en_US',
            'og:locale:alternate' => 'ar_AE',
            
            // Twitter Card Tags
            'twitter:card' => 'summary_large_image',
            'twitter:title' => $metaData['title'],
            'twitter:description' => $metaData['description'],
            'twitter:image' => $metaData['image'],
            'twitter:site' => '@sawticai',
            
            // Additional SEO Tags
            'robots' => 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1',
            'canonical' => $metaData['url'],
            'author' => 'Sawtic Technologies',
            'publisher' => 'Sawtic',
            'language' => 'en',
            'geo.region' => 'AE-DU',
            'geo.placename' => 'Dubai, UAE',
            'geo.position' => '25.276987;55.296249',
            'ICBM' => '25.276987, 55.296249'
        ];
    }

    /**
     * Generate hreflang tags for multilingual support
     */
    public static function generateHreflangTags($currentUrl)
    {
        return [
            'en' => $currentUrl,
            'ar' => str_replace('://sawtic.com', '://ar.sawtic.com', $currentUrl),
            'x-default' => $currentUrl
        ];
    }
}