<?php 

    $json = '[
        { "nombre":"Jhon Alexander", "Apellido": "Bedoya Carvajal" }, 
        { "nombre":"Luis Emilio", "Apellido": "Bedoya Carvajal" }
    ]';

    $res = json_decode($json);

    //print_r($res);

    foreach($res as $persona){
        print_r($persona);
        echo '<br/>';
    }
?>