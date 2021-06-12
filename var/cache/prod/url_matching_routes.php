<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/ad' => [[['_route' => 'ad', '_controller' => 'App\\Controller\\AdController::index'], null, null, null, false, false, null]],
        '/ad/search' => [[['_route' => 'ad_search', '_controller' => 'App\\Controller\\AdController::checkData'], null, null, null, false, false, null]],
        '/booking/results' => [[['_route' => 'ad_results', '_controller' => 'App\\Controller\\AdController::results'], null, null, null, false, false, null]],
        '/ad/create' => [[['_route' => 'ad_create', '_controller' => 'App\\Controller\\AdController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\HomeController::mentions'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'security_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ad/([^/]++)(*:19)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        19 => [
            [['_route' => 'ad_show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
