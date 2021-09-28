<?php
class Conn {
    public static $instance;

    private function __construct() {
        //
    }

    public static function getConexao() {
        if (!isset(self::$instance)) {
            // array -> caso tenha erro, lance na excessao e informe qual erro 
            self::$instance = new PDO('mysql:host=localhost;dbname=mycrud', 'root', '', 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        return self::$instance;
    }
    
}