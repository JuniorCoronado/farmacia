<?php

class App
{

    function __construct(){
        // echo '<p>Controlador_App</p>';

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);  

        require_once('controlador/inicio.controlador.php');
        $controlador = new Inicio_Controlador;

        if(empty($url[0])){

            $controlador->renderizar();
            return false;
        }

        $archivoControlador = 'controlador/' . $url[0] . '.controlador.php';

        if(file_exists($archivoControlador)){     

            if($url[0] == 'apirest'){
                require_once('controlador/apirest.controlador.php');
                $controlador = new Apirest_Controlador;
            }else if($url[0] == 'inicio'){
                $controlador->renderizar();
            }
        }else{
            $controlador->renderizar();
        }

    }
}
?>