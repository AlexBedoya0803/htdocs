<?php 

    session_start();

    echo "User: ".$_SESSION["usuario"]." - "."Estatus: ".$_SESSION["estado"];

?>