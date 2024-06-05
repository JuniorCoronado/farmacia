<?php

require_once('libreria/vista.libreria.php');

class Controlador
{
    protected $vista;

    function __construct(){
        $this->vista = new Vista();
    }

}

?>