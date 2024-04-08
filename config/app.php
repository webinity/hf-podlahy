<?php

use Webinity\Framework\Services\CorsService;
use Webinity\Framework\Services\DibiService;
use Webinity\Framework\Services\RoutesService;
use Webinity\Framework\Services\TranslationService;
use Webinity\Framework\Services\TwigService;

return [
    'site_url' => 'http://mysite', // <== Set this to your site for CORS to work properly
    /**
     * App paths
     */
    'base_path' => __DIR__ . '/../',
    'lang_path' => __DIR__ . '/../resources/lang',  // <== Path to lang directory.
    'assets_folder' => '/assets', // <== Path to public assets directory

    /**
     * Multilanguage
     *
     * Set default settings for locales.
     */
    'default_locale' => 'cs',
    'fallback_locale' => 'cs',


    /*
     * Services
     *
     * Services listed in this array will be loaded.
     */
    'services' => [
        /*
         * Core, do not edit these unless you know what you're doing.
         */
        TwigService::class,
        TranslationService::class,
        // DibiService::class,
        CorsService::class,

        //...
        RoutesService::class // Make sure this is last service
    ],

    /**
     * Routes
     *
     * Route files listed in this array will be loaded
     */
    'routes' => [
        __DIR__ . '/../routes/web.php',
        __DIR__ . '/../routes/api.php',
        __DIR__ . '/../routes/core.php',
    ]
];