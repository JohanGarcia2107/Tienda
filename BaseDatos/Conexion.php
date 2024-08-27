<?php
class Conexion {
    private static $url = 'mysql:host=localhost;dbname=proyecto';
    private static $user = 'root';
    private static $password = '';

    public static function getConexion() {
        try {
            $Conexion = new PDO(self::$url, self::$user, self::$password);
            $Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $Conexion;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


}

?>