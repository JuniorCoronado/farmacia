<?php


class Vista {

    function __construct(){}
  

    function plantilla($nombre_carpeta=null, $nombre_archivo, $parametro=null){
        if($nombre_archivo == 'inicio') require_once('vista/inicio.php');
    }

}

?>