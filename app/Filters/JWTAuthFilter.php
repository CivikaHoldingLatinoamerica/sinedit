<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTAuthFilter implements FilterInterface
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
        $authHeader = $request->getHeaderLine('Authorization');
        
        //verificamos que contenga el header de autorizacion para la peticion
        if (!$authHeader || !preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            return Services::response()
                ->setJSON([
                    'success' => false,
                    'msg' => [lang('Errors.tokenInvalid')]
                ])
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }

        try{
            //logica para la validacion del token JWT
            $token = $matches[1]; //obtenemos el token

            $decode = JWT::decode($token,new Key(getenv('JWT_KEY'),'HS256'));
            //una vez decodificado no hacemos nada, pero veremos la forma de mandarlo o de utilizarlo decodificado para que se pueda obtener el id usuario
            //probamos mandandolo a la sesion pára recuperarlo ahi en caso de ser necesario
            session()->set('usuarioLogeado',$decode);
        }catch(ExpiredException $e){
            return Services::response()
                ->setJSON([
                    'success' => false,
                    'msg' => [lang('Errors.tokenUnauthorized')]
                ])
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
        }catch(\Exception $e){
            return Services::response()
                ->setJSON([
                    'success' => false,
                    'msg' => [lang('Errors.tokenInvalid')]
                ])
                ->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
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
