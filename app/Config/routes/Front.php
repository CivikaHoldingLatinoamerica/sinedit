<?php

use CodeIgniter\Router\RouteCollection;

/**
 * agrupacion de rutas para la parte del backend
 * @var RouteCollection $routes
 */
//por integrar namespaces
$routes->group('/',['namespace' => 'App\Controllers\Front'],function($routes){

     $routes->get('','DemoController::demo');

});