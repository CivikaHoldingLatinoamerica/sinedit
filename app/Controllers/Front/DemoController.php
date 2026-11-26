<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DemoController extends BaseController
{

    private $env;
    function __construct(){
        $this->env = getenv('CI_ENVIRONMENT');
    }
    
    public function demo() : ResponseInterface | string
    {
        try{
            echo 'FUNCION DEMO DE VISTAS CONTROLLER';exit;
        }catch(\Exception $e){
            log_message('error','***** DemoController->demo');
            log_message('error','ERROR: {message} - FILE: {file}  LINE: {line}',['message' => $e->getMessage(),'file' => $e->getFile(),'line' => $e->getLine()]);
            return view('errors/500');
        }
    }
    
}
