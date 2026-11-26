<?php

class ValidacionesHelper {

     public static function isValidRegex($campo,$regla){
		$validacion = true;
		if(!preg_match($regla,$campo)){
			$validacion = false;
		}
		return $validacion;
	}

}