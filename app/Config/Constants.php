<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code


//constante para el archivo de no acceso a los directorios del files_uploads
define('FILE_ERROR_403','<!DOCTYPE html><html><head><title>403 Forbidden</title></head><body><p>Directory access is forbidden.</p></body></html>');
define('FILE_HTACCESS_403','<FilesMatch ".*">
    Order Deny,Allow
    Deny from all
</FilesMatch>
');

define('EXTENSIONES_FILES_IMG', 'png|jpg|jpeg|gif|tiff');
define('EXTENSIONES_FILES_PDF', 'pdf');
define('EXTENSIONES_FILES_ATI', 'png|jpg|jpeg|gif|tiff|pdf');
define('EXTENSIONES_FILES_ALL', 'png|jpg|jpeg|gif|tiff|pdf|doc|docx|xls|xlsx|ppt|pptx');
define('MAX_FILESIZE', 15000000);
define('RUTA_PDF_TEMP','files_usr/temp/');
define('RUTA_PDF_PED','files_usr/ped/');
define('RUTA_QR_FILES','files_usr/qr_generados');
define('RUTA_QR_FILES_PERFIL','files_usr/qr_generados/');

define('RUTA_PLANTILLA_GAFETE','assets/docs/plantilla-gafete.pdf');
define('RUTA_PLANTILLA_GAFETE_SE','assets/docs/02-plantilla-gafete-se.pdf');
define('RUTA_PLANTILLA_CONSTANCIA_DC3','assets/docs/01-formato_dc3.pdf');

/**
 * definimos las constantes para los logotipos
 */
define('RUTA_LOGO_CIVIKA_PDF','assets/imgs/logos/logo_civika_pdf.png');
define('RUTA_SELLO_CIVIKA_PDF','assets/imgs/logos/sello_civika_negro.png');
/**
 * constantes para los perfiles de usuario
 */
define('PERFIL_ADMIN',2);
define('PERFIL_INSTRUCTOR',3);
define('PERFIL_ALUMNO',4);
define('PERFIL_ADMINRRHH',5);

/**
 * constantes para los estatus de proceso
 */
define('ESTATUS_EN_CAPTURA',1);
define('ESTATUS_ENVIADA',2);
define('ESTATUS_OBSERVACIONES',3);
define('ESTATUS_FINALIZADA',4);

/**
 * constantes para las evaluaciones
 */
define('EVALUACION_DIAGNOSTICA',1);
define('EVALUACION_CUESTIONARIO_INSTRUMENTO',2);
define('EVALUACION_ENTREGABLE',3);
define('EVALUACION_MODULO',4);

/**
 * constantes para la clasificacion de juicio
 */
define('JUICIO_AUN_NO_CALIFICADO',1);
define('JUICIO_CALIFICADO',2);
define('JUICIO_OPTIMO',3);
define('JUICIO_ALTO_POTENCIAL',4);
define('JUICIO_ALTO_DESEMPENO',5);

/**
 * constantes para las opciones de pregunta
 */
define('OPCION_VERDADERO_FALSO',1);
define('OPCION_UNICA_OPCION',2);
define('OPCION_OPCION_MULTIPLE',3);
define('OPCION_IMAGEN_UNICA_OPCION',4);
define('OPCION_IMAGEN_OPCION_MULTIPLE',5);
define('OPCION_SECUENCIAL',6);
define('OPCION_RELACIONAL',7);

/**
 * constantes para los archivos del expediente
 */
define('EXPEDIENTE_FICHA_REGISTRO',1);
define('EXPEDIENTE_INSTRUMENTO_EVA',2);
define('EXPEDIENTE_CERTIFICADO_EC',3);
define('EXPEDIENTE_CERTIFICADO_EC_SC',4);

/**
 * constantes para el expediente de perfil
 */
define('EXPEDIENTE_FOTO_PERFIL',1);
define('EXPEDIENTE_FOTO_CERTIFICADO',2);
define('EXPEDIENTE_FOTO_INE_ANVERSO',3);
define('EXPEDIENTE_FOTO_INE_REVERSO',4);
define('EXPEDIENTE_FOTO_CEDULA_ANVERSO',5);
define('EXPEDIENTE_FOTO_CEDULA_REVERSO',6);
define('EXPEDIENTE_CURP',7);
define('EXPEDIENTE_FIRMA_DIGITAL',8);

/**
 * CONSTANTES PARA LOS INSTRUMENTOS DE EVALUACION
 */
define('INSTRUMENTO_GUIA_OBSERVACION',1);
define('INSTRUMENTO_LISTA_COTEJO',2);
define('INSTRUMENTO_CUESTIONARIO',3);
define('INSTRUMENTO_PREGUNTAS_ABIERTAS',4);

define('VERSION_LIBERADA','18.24.23');