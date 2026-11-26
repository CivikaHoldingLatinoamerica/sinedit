<?php

use CodeIgniter\Router\RouteCollection;

/**
 * rutas para pruebas
 * @var RouteCollection $routes
 */
$routes->group('development',function($routes){

     $routes->post('remove-route',function(){
          echo  'Ruta demo api';exit;
     });
     
     $routes->add('(:any)',function() {
          return service('response')->setJSON([
               'success' => false,
               'msg' => lang('Errors.pageNotFound')
          ])->setStatusCode(404);
     });

});