<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'Sawtic | AI Call Center Solutions UAE - Dubai Business Automation',
            'titleBefore'  => false,
            'description'  => 'Leading AI call center solutions in UAE. Advanced virtual assistants, automated customer service, and intelligent communication technology for Dubai businesses.',
            'separator'    => ' | ',
            'keywords'     => ['AI call center UAE', 'virtual assistant Dubai', 'AI customer service', 'business automation Dubai', 'intelligent communication UAE', 'voice AI technology'],
            'canonical'    => 'current',
            'robots'       => 'index,follow',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Sawtic | AI Call Center Solutions UAE - Dubai Business Automation',
            'description' => 'Leading AI call center solutions in UAE. Advanced virtual assistants, automated customer service, and intelligent communication technology for Dubai businesses.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'Sawtic',
            'images'      => ['/assets/images/logo-light.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@sawticai',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Sawtic | AI Call Center Solutions UAE - Dubai Business Automation',
            'description' => 'Leading AI call center solutions in UAE. Advanced virtual assistants, automated customer service, and intelligent communication technology for Dubai businesses.',
            'url'         => 'current',
            'type'        => 'WebPage',
            'images'      => ['/assets/images/logo-light.png'],
        ],
    ],
];
