<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//las rutas del front debes ir en el routes/Front.php
if(file_exists(APPPATH. 'Config/routes/Devs.php')){
    require APPPATH.'Config/routes/Devs.php';
}

if(file_exists(APPPATH. 'Config/routes/Api.php')){
    require APPPATH.'Config/routes/Api.php';
}

if(file_exists(APPPATH. 'Config/routes/Front.php')){
    require APPPATH.'Config/routes/Front.php';
}


