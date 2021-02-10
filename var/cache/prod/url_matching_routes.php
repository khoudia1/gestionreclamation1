<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reclamer' => [[['_route' => 'reclamer_index', '_controller' => 'App\\Controller\\ReclamerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamer/etudiant' => [[['_route' => 'reclamer_index_etudiant', '_controller' => 'App\\Controller\\ReclamerController::indexEtudiant'], null, ['GET' => 0], null, false, false, null]],
        '/reclamer/new' => [[['_route' => 'reclamer_new', '_controller' => 'App\\Controller\\ReclamerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reclamer/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'reclamer_show', '_controller' => 'App\\Controller\\ReclamerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'reclamer_edit', '_controller' => 'App\\Controller\\ReclamerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [
            [['_route' => 'reclamer_delete', '_controller' => 'App\\Controller\\ReclamerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
