<?php 

    $nombreArchivo = 'archivoCreado.txt';

    $contenidoArchivo = 'Hola, soy el archivo creado.';

    $archivoACrear = fopen($nombreArchivo, 'w');

    fwrite($archivoACrear, $contenidoArchivo);
    fclose($archivoACrear);

?>