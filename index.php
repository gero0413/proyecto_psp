<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '0');

require_once("./configuracion.php");
include("./autoload.php");
spl_autoload_register('__autoload');

$general = new General();
$_POST = array_map('$this->general->limpiarCadena', $_POST);
$_GET = array_map('$this->general->limpiarCadena', $_GET);

$PARAMS = array_merge($_POST, $_GET);
$pagina_route = ROOT . "route.php";

$class = isset($PARAMS['pagprin']) ? $PARAMS['pagprin'] : FALSE;
if (class_exists($class, true)) {
    $load_class = new $class();
    if (method_exists($load_class, 'login')) {
        $load_class->login($PARAMS);
    } else {
        include(VIEWS . "login.php");
    }
} else {
    $titulo = "Login";
    $class ="bg-gradient-primary";
    include(VIEWS . "login.php");
}
