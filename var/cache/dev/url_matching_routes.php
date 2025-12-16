<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'app_accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/choix' => [[['_route' => 'app_choix', '_controller' => 'App\\Controller\\ChoixController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/creer/haie' => [[['_route' => 'app_creer_haie', '_controller' => 'App\\Controller\\CreerHaieController::index'], null, null, null, false, false, null]],
        '/devis' => [[['_route' => 'app_devis_index', '_controller' => 'App\\Controller\\DevisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/devis/new' => [[['_route' => 'app_devis_new', '_controller' => 'App\\Controller\\DevisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forms' => [[['_route' => 'app_forms_index', '_controller' => 'App\\Controller\\FormsPageController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/haie/creer' => [[['_route' => 'app_haie_creer', '_controller' => 'App\\Controller\\HaieController::haie_creer'], null, null, null, false, false, null]],
        '/mesure' => [[['_route' => 'app_mesure', '_controller' => 'App\\Controller\\MesureController::index'], null, null, null, false, false, null]],
        '/modifier/haie' => [[['_route' => 'app_modifier_haie', '_controller' => 'App\\Controller\\ModifierHaieController::index'], null, null, null, false, false, null]],
        '/tailler' => [[['_route' => 'app_tailler_index', '_controller' => 'App\\Controller\\TaillerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/tailler/new' => [[['_route' => 'app_tailler_new', '_controller' => 'App\\Controller\\TaillerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voir/haie' => [[['_route' => 'app_voir_haie', '_controller' => 'App\\Controller\\VoirHaieController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:227)'
                        .'|/edit(*:240)'
                        .'|(*:248)'
                    .')'
                    .'|lient/([^/]++)(?'
                        .'|(*:274)'
                        .'|/edit(*:287)'
                        .'|(*:295)'
                    .')'
                .')'
                .'|/devis/([^/]++)(?'
                    .'|(*:323)'
                    .'|/edit(*:336)'
                    .'|(*:344)'
                .')'
                .'|/haie/(?'
                    .'|([^/]++)(*:370)'
                    .'|modifier/([^/]++)(*:395)'
                    .'|supprimer/([^/]++)(*:421)'
                .')'
                .'|/tailler/([^/]++)(?'
                    .'|(*:450)'
                    .'|/edit(*:463)'
                    .'|(*:471)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        295 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_devis_show', '_controller' => 'App\\Controller\\DevisController::show'], ['devi'], ['GET' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_devis_edit', '_controller' => 'App\\Controller\\DevisController::edit'], ['devi'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        344 => [[['_route' => 'app_devis_delete', '_controller' => 'App\\Controller\\DevisController::delete'], ['devi'], ['POST' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_haie_voir', '_controller' => 'App\\Controller\\HaieController::haie_voir'], ['code'], null, null, false, true, null]],
        395 => [[['_route' => 'app_haie_modifier', '_controller' => 'App\\Controller\\HaieController::modifier_haie'], ['code'], null, null, false, true, null]],
        421 => [[['_route' => 'app_haie_supprimer', '_controller' => 'App\\Controller\\HaieController::supprimer_haie'], ['code'], null, null, false, true, null]],
        450 => [[['_route' => 'app_tailler_show', '_controller' => 'App\\Controller\\TaillerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        463 => [[['_route' => 'app_tailler_edit', '_controller' => 'App\\Controller\\TaillerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        471 => [
            [['_route' => 'app_tailler_delete', '_controller' => 'App\\Controller\\TaillerController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
