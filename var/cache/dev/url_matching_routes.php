<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'landing_page', '_controller' => 'App\\Controller\\MainController::landingPage'], null, null, null, false, false, null]],
        '/weather' => [[['_route' => 'get_weather', '_controller' => 'App\\Controller\\MainController::getWeather'], null, null, null, false, false, null]],
        '/countries' => [[['_route' => 'get_countries', '_controller' => 'App\\Controller\\MainController::getCountries'], null, null, null, false, false, null]],
        '/about-us' => [[['_route' => 'about_us', '_controller' => 'App\\Controller\\MainController::aboutUs'], null, null, null, false, false, null]],
        '/choose-your-plan' => [[['_route' => 'choose_plan', '_controller' => 'App\\Controller\\MainController::choosePlan'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
