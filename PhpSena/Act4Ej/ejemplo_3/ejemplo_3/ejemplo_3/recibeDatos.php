<!DOCTYPE html>
<html> 
    <head> 
        <title>Unidad 4 - Ejemplo 2 Recibe Datos Desde Otra P&aacute;gina</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <?php
        /* En esta página se reciben los datos, como puede verse solo se usa
         * la función print_r() para volcar al navegador el arreglo $_POST
         * que contiene todos los datos del formulario de la página de origen
         * la idea es que usted como aprendiz complete el código de esta página 
         * para procesar los datos recibidos según lo especificado en el 
         * ejercicio propuesto en el material de estudio.
         */
        $nombre = $_POST['nombre'];
        $nacimiento = $_POST['fecha_nacimiento'];
        $dif = abs(strtotime($nacimiento) - time() );
        $edad = floor( $dif / (365*60*60*24) );

        if (isset($_POST['hijos'])) {
            echo "Buenas tardes, $nombre. Usted tiene $edad anios de edad. Espero que sus hijos se encuentren muy bien.";
        } else {
            echo "Buenas tardes, $nombre. Usted tiene $edad anios de edad. ";
        };
        ?>
    </body>
</html>