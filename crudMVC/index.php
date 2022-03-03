<?php 

    require_once "modelos/DB.php";

    if(!isset($_GET['c'])){
        require_once "controladores/inicioControlador.php";
        $controlador = new InicioControlador();
        $controlador->inicio();
    } else {
        $controlador = $_GET['c'];
        require_once "controladores/".$controlador."Controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador = new $controlador;
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        $controlador->$accion."()";
    }

?>