<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1>Functions</h1>
    <h2>Basic operations with functions Php</h2>

    <!-- Inicia codigo Php -->
    <?php 
    
    /* Inluir archivo biblioteca.php */
    require_once './biblioteca.php';


    /*  "S" o vacío => para la suma
        "R" => para la resta
        "M" => para la multipliación
        "D" => para la división  */

    /* Llamar función e imprimir resultado en el navegador */
    echo operaciones(4, 5);

    ?>
</body>
</html>