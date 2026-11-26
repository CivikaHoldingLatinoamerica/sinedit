<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DemoController extends BaseController
{

    function __construct(){
        
    }

    public function demo() : ResponseInterface{
        try{
            //cargamos o instanciamos el modelo de cat_estados
            $response['success'] = true;
			$response['msg'] = array('');
			$response['data'] = [];
            return $this->response->setStatusCode(200)->setJSON($response);
        }catch(\Throwable $e){
            log_message('error','***** CatalogosController->demo');
            log_message('error',$e->getMessage());
            log_message('error',$e->getTraceAsString());
            $response['success'] = false;
			$response['msg'][] = lang('Errors.weHitASnag');
            return $this->response->setStatusCode(500)->setJSON($response);
        }
    }

    

}
