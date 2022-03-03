<?php 

    $server = "localhost"; //127.0.0.1
    $user = "root";
    $pass = "";
    $DB = "album";

    try{

        $con = new PDO("mysql:host=$server;dbname=$DB", $user, $pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";

        $sentencia = $con->prepare($sql);
        $sentencia->execute();

        $res = $sentencia->fetchAll();

        //print_r($res);

        foreach($res as $foto){
            print_r($foto);
            echo '<br/>';
        }

        echo "Successful connection";

    }catch(PDOException $error){

        echo "Failed connection: ".$error;

    }

?>