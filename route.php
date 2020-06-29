<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '0');


require_once("./configuracion.php");
include("./autoload.php");
spl_autoload_register('__autoload');

$PARAMS = array_merge($_GET, $_POST);

/**
 * validamos si la clase existe
 */

$class = isset($PARAMS['route']) ? $PARAMS['route'] : FALSE;
if (class_exists($class, true)) {
    $index = new $class();
    if (isset($PARAMS['funcion']) && method_exists($index, $PARAMS['funcion'])) {
        $index->$PARAMS['funcion']($PARAMS);
    } else {
        $index->index($PARAMS);
    }
} else {
    require(VIEWS . '/errors/404.php');
}
