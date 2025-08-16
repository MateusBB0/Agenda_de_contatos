<?php 
namespace Controller;
class Connection{
    public static $connection;

    public static function getConn(){
        self::$connection = new \PDO("mysql:host=localhost;dbname=agenda", "root", "");
        if (isset(self::$connection)) {
            return self::$connection;
        }else{
            echo "Banco de Dados não conectado!!";
        }
    }

}
