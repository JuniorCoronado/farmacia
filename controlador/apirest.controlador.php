<?php

class Apirest_Controlador {

    public function __construct(){ 
        // echo '<p>Apirest Controlador_App</p>';
        $respuesta = null;
        $nombrecontrolador = $this->obtenercontrolador();
        if(isset($nombrecontrolador)){
            $archivocontrolador = 'controlador/'.$nombrecontrolador.'.controlador.php';
            if(file_exists($archivocontrolador)){
                require_once $archivocontrolador;
                $nombrecontrolador = ucwords($nombrecontrolador).'_controlador';
                $controlador = new  $nombrecontrolador;
                $nombremetodocontrolador = $this->obtenerMetodo();
                    if(isset($nombremetodocontrolador)){
                        if (method_exists($nombrecontrolador, $nombremetodocontrolador)){  
                            $controlador->{$nombremetodocontrolador}(); 
                        }else{
                           $respuesta = 'Ingrese nombre de metodo valido';
                           var_dump($respuesta);
                           header("HTTP/1.1 404 Not Found");
                           exit();
                        } 
                    }else{
                        $respuesta = 'Se requiere nombre de metodo';
                        var_dump($respuesta);
                        header("HTTP/1.1 404 Not Found");
                        exit();
                    } 

            }else{
                $respuesta = 'Ingrese nombre de controlador valido';
                var_dump($respuesta);
                    header("HTTP/1.1 404 Not Found");
                    exit();
            }      
        }else{
            $respuesta = 'Se requiere nombre de controlador';
            var_dump($respuesta);
            header("HTTP/1.1 404 Not Found");
            exit();
        }       
    }


    function consumir(){

    }

    
    public function obtenerMetodo(){
        $uri = null;
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');
        $uri = explode( '/', $uri );
        $metodo = isset($uri[4]) ? $uri[4]: null;
        return $metodo;
    }


    public function obtenercontrolador(){
        $uri = null;
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');
        $uri = explode( '/', $uri );
        $controlador = isset($uri[3]) ? $uri[3]: null;
        return $controlador;
    }


}

?>