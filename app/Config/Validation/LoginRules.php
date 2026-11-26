<?php

namespace App\Config\Validation;

class LoginRules{

     public static array $usuariosPorCorreo = [
          'correo' => [
               'rules' => 'required|valid_email'
          ]
     ];
     public static array $mailRecoveryPass = [
          'usuario' => [
               'rules' => 'required',
          ]
     ];

     public static array $iniciarSesion = [
          'usuario' => [
               'rules' => 'required|is_not_unique[usuario.usuario]',
               'errors' => [
                    'is_not_unique' => 'Error, no existe el usuario "{value}" en el sistema, favor de verificarlo'
               ]
          ],
          'password' => [
               'label' => 'contraseña',
               'rules' => 'required'
          ]
     ];

}