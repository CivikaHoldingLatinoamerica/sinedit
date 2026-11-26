<?php

use CodeIgniter\Router\RouteCollection;

/**
 * agrupacion de rutas para la parte del backend
 * @var RouteCollection $routes
 */

$routes->group('api',['namespace' => 'App\Controllers\Api'],function($routes){

     $routes->post('demo','DemoController::demo');

     // Override 404 SOLO para el API
     $routes->add('(:any)',function() {
          return service('response')->setJSON([
               'success' => false,
               'msg' => lang('Errors.pageNotFound')
          ])->setStatusCode(404);
     });

});