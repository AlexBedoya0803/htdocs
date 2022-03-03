<?php

    include_once("controladores/controlador_".$controlador.".php");

    //Nombre de la clase:
    $objControlador = "Controlador".ucfirst($controlador);

    //Instanciar clase:
    $controlador = new $objControlador();

    $controlador->$accion();

?>