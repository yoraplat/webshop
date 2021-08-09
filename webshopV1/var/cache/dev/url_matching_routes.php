<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthenticationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthenticationController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontEnd\\HomeController::index'], null, null, null, false, false, null]],
        '/products/load' => [[['_route' => 'products_load', '_controller' => 'App\\Controller\\FrontEnd\\HomeController::load'], null, null, null, false, false, null]],
        '/cart/add' => [[['_route' => 'add_product_to_cart', '_controller' => 'App\\Controller\\FrontEnd\\ProductController::add'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\FrontEnd\\ProfileController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\FrontEnd\\ProfileController::cart'], null, null, null, false, false, null]],
        '/orders' => [[['_route' => 'orders', '_controller' => 'App\\Controller\\FrontEnd\\ProfileController::orders'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/product/([^/]++)(*:185)'
                .'|/([^/]++)(?'
                    .'|(*:205)'
                    .'|/(?'
                        .'|pro(?'
                            .'|duct(?'
                                .'|s/load(*:236)'
                                .'|/([^/]++)(*:253)'
                            .')'
                            .'|file(*:266)'
                        .')'
                        .'|cart(?'
                            .'|/add(*:286)'
                            .'|(*:294)'
                        .')'
                        .'|orders(*:309)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'product', '_controller' => 'App\\Controller\\FrontEnd\\ProductController::index'], ['id'], null, null, false, true, null]],
        205 => [[['_route' => 'front_end_home', '_controller' => 'App\\Controller\\FrontEnd\\HomeController::index'], ['_locale'], null, null, true, true, null]],
        236 => [[['_route' => 'front_end_products_load', '_controller' => 'App\\Controller\\FrontEnd\\HomeController::load'], ['_locale'], null, null, false, false, null]],
        253 => [[['_route' => 'front_end_product', '_controller' => 'App\\Controller\\FrontEnd\\ProductController::index'], ['_locale', 'id'], null, null, false, true, null]],
        266 => [[['_route' => 'front_end_profile', '_controller' => 'App\\Controller\\FrontEnd\\ProfileController::index'], ['_locale'], null, null, false, false, null]],
        286 => [[['_route' => 'front_end_add_product_to_cart', '_controller' => 'App\\Controller\\FrontEnd\\ProductController::add'], ['_locale'], null, null, false, false, null]],
        294 => [[['_route' => 'front_end_cart', '_controller' => 'App\\Controller\\FrontEnd\\ProfileController::cart'], ['_locale'], null, null, false, false, null]],
        309 => [
            [['_route' => 'front_end_orders', '_controller' => 'App\\Controller\\FrontEnd\\ProfileController::orders'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
