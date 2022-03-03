<?php 

    $archivo = 'archivo.txt';

    $archivoAbierto = fopen($archivo, 'r');

    $contenido = fread($archivoAbierto, filesize($archivo));

    echo $contenido;

?>