<?php 

function encriptarPassword(string $password) : string{
     return password_hash($password,PASSWORD_BCRYPT);
}

function verificarPassword(string $passwordPlane, string $passwordEncrypt) : bool{
     return password_verify($passwordPlane,$passwordEncrypt);
}

function randomPass($longitud = 10){
	$randomCharsMinus = substr(
		str_shuffle(
			str_repeat($x='abcdefghijklmnopqrstuvwxyz', ceil($longitud/strlen($x)) )
			),1,$longitud
		);
	$randomCharsMayus = substr(
		str_shuffle(
			str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($longitud/strlen($x)) )
			),1,$longitud
		);

	$randomNumbers = substr(
		str_shuffle(
			str_repeat($x='0123456789', ceil($longitud/strlen($x)) )
			),1,$longitud
		);
	$randomSpecials = substr(
		str_shuffle(
			str_repeat($x='.=*@$!%*?&', ceil($longitud/strlen($x)) )
			),1,$longitud
		);
	$fullCadena = substr(
		str_shuffle(
			str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.=*@$!%*?&', ceil($longitud/strlen($x)) )
			),1,$longitud
		);
	$unCaracterCadaUno = substr($randomCharsMinus,0,1).substr($randomCharsMayus,0,1).substr($randomNumbers,0,1).substr($randomSpecials,0,1);
	$random = $unCaracterCadaUno.substr($fullCadena,0,$longitud-4);
	return str_shuffle($random);
}

if(!function_exists('perfilOperacion')){
	function perfilOperacion(array $perfiles) : bool{
		$perfilUsuarioSesion = session()->get('perfil_usuario');
		if(is_null($perfilUsuarioSesion)){
			return false;
		}
		$permiso = false;
		if(in_array($perfilUsuarioSesion,$perfiles)){
			$permiso = true;
		}
		return $permiso;
	}
}