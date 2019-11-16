<?php

// on définit un tableau 
$routes = [];

// on ajoute un tableau dans le tableau, c'est ce qu'attend la méthode addRoutes d'altorouter
// https://altorouter.com/usage/mapping-routes.html
// === on ajoute une route
$routes[] = [
    'GET',
    '/',
    [
        'controller' => $controllersNamespace . 'MainController',
        'method' => 'home',
    ],
    'main-home'
];

$routes[] = [
    'POST',
    '/signin',
    [
        'controller' => $controllersNamespace . 'SecurityController',
        'method' => 'signInPostAction'
    ]
];

$routes[] = [
    'GET',
    '/signin',
    [
        'controller' => $controllersNamespace . 'SecurityController',
        'method' => 'signInAction'
    ]
];
