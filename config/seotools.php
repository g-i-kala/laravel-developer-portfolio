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
            'title'        => "Karo::Creative", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'Karo::Creative - Dashboard'
            'description'  => 'PHP, Laravel & Wordpress Developer Portfolio.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
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
            'title'       => 'Karo::Creative', // set false to total remove
            'description' => 'PHP, Laravel & Wordpress Developer Portfolio.', // set false to total remove
            'url'         => 'https://laravel-developer-portfolio-main-ip3rzu.laravel.cloud/', // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [
                env('APP_URL').'/storage/seo/kcd_og.jpg'
            ],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Karo::Creative', // set false to total remove
            'description' => 'PHP, Laravel & Wordpress Developer Portfolio.', // set false to total remove
            'url'         => 'https://laravel-developer-portfolio-main-ip3rzu.laravel.cloud/', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
