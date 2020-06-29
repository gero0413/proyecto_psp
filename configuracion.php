<?php


$carpeta_actual =  explode('/', $_SERVER['REQUEST_URI'])[1];
$pag_interna = 'http://' . $_SERVER['HTTP_HOST'] . '/' .$carpeta_actual. '/';


@define('ROOT', $pag_interna);
@define("RAIZ", __DIR__ . "/");
@define("APP", RAIZ . "app/");
@define("CONTROLLERS", APP . "controllers/");
@define("MODELS", APP . "models/");
@define("VIEWS", APP . "views/");
@define("SYSTEMS", RAIZ . "systems/");

CONST VENDOR = ROOT . "src/vendor/";
CONST LIB = ROOT . "src/lib/";


/**
 * Se crean las constantes de conexion a la base de datos
 */
CONST DB_HOST = "sql132.main-hosting.eu";
CONST DB_USER = "u219029939_poligran";
CONST DB_PASS = "#cuervo2017";
CONST DB_NAME = "u219029939_poligran";