<?php 

class Conexion{

    private $pdo = null;
    private $host = 'b3o7bcgs2c2tnjwe5pfh-mysql.services.clever-cloud.com';
    private $basededatos = 'b3o7bcgs2c2tnjwe5pfh';
    private $user = 'ubly4mknvizzwlbo';
    private $password = "sEw4Wg2bdFo8rFtp7Lc3";
    // private $charset  = 'utf8mb4';



public function getConexion(){
    
    $cadena_conexion = "mysql:host=".$this->host.";dbname=".$this->basededatos."";
    $opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"];

    try{
        $pdo = new PDO($cadena_conexion, $this->user, $this->password, $opciones);
        return $pdo;
    } catch(PDOException $e){
        die("ERROR: ".$e->getMessage());
    }
}

}

?>