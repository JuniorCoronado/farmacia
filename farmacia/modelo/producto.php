<?php
    require_once('../libreria/conexion.php');

    class Producto{


        public static function getProductos(){
            $database = new Conexion();
            $conn = $database->getConexion();
            $stmt = $conn->prepare('SELECT * FROM PRODUCTOS');
            if($stmt->execute()){
                $result = $stmt->fetchAll();
                echo json_encode($result);
                // header('HTTP/1.1 200 OK');
            } else {
                header('HTTP/1.1 404 Sin respuesta');
            }
        }



    }