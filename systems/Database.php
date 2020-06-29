<?php


class Database {

    static private $_conexion;
    private $_host;
    private $_user;
    private $_pass;
    private $_dbName;
    private $_cursor;

    public function __construct() {
        $this->_host = DB_HOST;
        $this->_user = DB_USER;
        $this->_pass = DB_PASS;
        $this->_dbName = DB_NAME;
    }

    private function conexion() {
        try {
            self::$_conexion = new PDO("mysql:host=$this->_host;dbname=$this->_dbName", $this->_user, $this->_pass);
            self::$_conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Fallo la conexion " . $e->getMessage();
        }
    }

    function querySimple($sql){
        $this->_cursor = self::$_conexion->query($sql, PDO::FETCH_ASSOC);
        return $this->_cursor;
    }

}