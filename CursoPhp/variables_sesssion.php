<?php 

    session_start();

    $_SESSION['usuario'] = "develoteca"; //Variable de session
    $_SESSION['estado'] = 'logueado';

    echo "Logged in"."<br/>";

    echo "User: ".$_SESSION["usuario"]." - "."Estatus: ".$_SESSION["estado"];

?>