<?php

class General {

    public function __construct() {
    }

    function limpiarCadena($cadena) {
        return preg_replace(array('/[^a-zA-Z0-9\-<>]/', '/[\-]+/', '/<{^>*>/'), " ", $cadena);
    }
}