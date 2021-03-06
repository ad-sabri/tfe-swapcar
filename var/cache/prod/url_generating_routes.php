<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'ad' => [[], ['_controller' => 'App\\Controller\\AdController::index'], [], [['text', '/ad']], [], []],
    'ad_search' => [[], ['_controller' => 'App\\Controller\\AdController::checkData'], [], [['text', '/ad/search']], [], []],
    'ad_results' => [[], ['_controller' => 'App\\Controller\\AdController::results'], [], [['text', '/booking/results']], [], []],
    'ad_create' => [[], ['_controller' => 'App\\Controller\\AdController::create'], [], [['text', '/ad/create']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'mentions' => [[], ['_controller' => 'App\\Controller\\HomeController::mentions'], [], [['text', '/mentions']], [], []],
    'security_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'ad_show' => [['slug'], ['_controller' => 'App\\Controller\\AdController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/ad']], [], []],
];
