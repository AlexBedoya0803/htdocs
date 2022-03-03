<?php 

    $server = "localhost"; //127.0.0.1
    $user = "root";
    $pass = "";
    $DB = "album";

    try{

        $con = new PDO("mysql:host=$server;dbname=$DB", $user, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Estudiando con Laura', 'foto2.pg')";

        $con->exec($sql);

        echo "Successful connection";

    }catch(PDOException $error){

        echo "Failed connection: ".$error;

    }

?>