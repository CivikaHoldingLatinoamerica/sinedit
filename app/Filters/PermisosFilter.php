<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class PermisosFilter implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
     {
          //implementamos lo del permiso requerido desde la ruta del api
          (array)$perfil = $arguments;
          if(!$perfil){
               //como no se definio el permiso como argumento quiere decir que dejamos pasar la peticion
               return;
          }

          //como se definio la funcion de los permisos del auth helper solo mandamos a llamarla con el permiso en si
          //la funcion ya toma de la sesion los perfiles y permisos
          if(!perfilOperacion($perfil)){
               return service('response')->setJSON([
                    'success' => false,
                    'msg' => [lang('Errors.pagePermissionReq')]
               ])->setStatusCode(403);
          }
     }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
