<?php 

    session_start();
    session_destroy();

    echo "User: ".$_SESSION["usuario"]." - "."Estatus: ".$_SESSION["estado"];

?>