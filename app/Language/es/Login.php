<?php

return [
     'success' => 'Bienvenido(a) al sistema {usuario}',
     'usuario' => [
          'inactivo' => 'Su cuenta, actualmente se encuentra eliminada/desactivada, no podrá iniciar sesión actualmente, contacte al administrador',
          'inexistente' => 'Error, no existe el usuario {usuario} en el sistema',
          'correoInexistente' => 'Error, no existe algún usuario asociado al correo {correo} o fue dado de baja del sistema, favor de validar',
          'multipleUsuario' => 'Se encontró en el sistema que existe más de un usuario con este correo registrado, seleccione uno para realizar el reestablecimiento de la contraseña',
          'password' => [
               'asigno' => 'Se le asignó una contraseña nueva en el Sistema, revise de favor su correo electrónico donde encontrará la nueva contraseña',
               'incorrecto' => 'La contraseña es incorrecta favor de verificarla',
               'vencido' => 'Su contraseña ha expirado. Se ha creado una nueva contraseña y será enviada al correo asociado a su cuenta: {correo}',
               'cambiado' => 'Se cambio la constraseña del usuario {usuario} con exito',
               'cambiadoGeneral' => 'Se cambió la contraseña del usuario correctamente',
               'cambiadoMigracion' => 'Por actualización y politicas de seguridad, se cambio su contraseña y podrá consultarla en su correo electrónico {correo}. Si no lo encuentra en la bandeja de entrada, consulte en spam o correos no deseados',
               'cambiadoOlvido' => 'Se le asigno una contraseña temporal en el sistema, está se envio por correo electrónico con las instrucciones para recuperar su acceso',
               'noCambiado' => 'No fue posible actualizar la contraseña en el sistema, favor de intentar más tarde',
               'cambiadoVencimiento' => 'Se cambió la contraseña del usuario correctamente por vencimiento',
               'errorCambio' => 'Ocurrio un error al tratar de cambiar la contraseña del usuario por vencimiento',
          ],
          'notificaciones' => [
               'regenerarPasswordOlvidado' => 'Estimado usuario(a) <b>{usuario}</b>, con base a su solicitud recuperar contraseña por situación de olvido, se le manda una contraseña temporal, ingrese al portal del <a href="{baseURL}login">Sistema SICTAN</a> e ingrese la siguiente contraseña: <br><br>{nuevoPass}<br><br> Favor de ingresar y cambie la contraseña por una que recuerde <br><br> En caso de que no lo haya solicitado, de click <a href="{urlCancelarCambioPass}">aquí</a> para cancelar el procedimiento e ingrese al sistema con la de siempre',
               'regenerarPasswordMigracion' => 'Estimado usuario(a) <b>{usuario}</b><br> <br>Derivado de las actualizaciones y normativas de seguridad del sistema, se le está generando una nueva contraseña aleatoria, ingrese al portal del <a href="{baseURL}login">Sistema SICTAN</a> e ingrese la siguiente contraseña: <br><br>{nuevoPass}<br><br> Una vez ingresado, desde su perfil puede cambiar la contraseña por una que recuerde o dejarlo con la que generó el sistema.'
          ]
     ]
];

?>