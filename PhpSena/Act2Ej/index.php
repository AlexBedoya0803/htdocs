<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Desarrollador: Jhon Alexander Bedoya Carvajal.
        Programa de formación: Desarrollo Web con Php.
        Nombre de la evidencia: Evidencia: Taller "Uso de arreglos".-->


    <!-- Definirción de los arreglos y variable -->
    <?php
        
        /* Arreglo de personas con su datos: */
        $directorios = array(
            array("Laura Puerta",
                "cll 55 #34-02",
                3213459821,
                "08/06/1999",
                "Verde"),

            array("Alexander Bedoya",
            "cll 104 #22-04",
            3103429512,
            "04/11/1998",
            "Azul"),

            array("Amparo Carvajal",
            "cr 100 #100-06",
            3213853123,
            "28/01/1969",
            "Azul")
        );

        /* Arreglo de colores y su significado. Este es un arreglo clave => valor */
        $main_colors = array(
            "Rojo" => "Pasión.",
            "Amarillo" => "Armonía.",
            "Azul" => "Estabilidad.",
            "Naranja" => "Felicidad."
        );

        /* Variable contadora. Se usará para validar si no se encontró significado de color */
        $cont = 0;

    ?>

    <!-- Estilos -->
    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #89d;
        }
    </style>

    <!-- Título -->
    <h1>Directorio</h1>
    <br><br><br>

    <!-- Crear tabla -->
    <table>

        <!-- Crear fila de nombre de las columnas -->
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Fecha de cumpleaños</th>
            <th>Color favorito</th>
            <th>Significado</th>
        </tr>

        <!-- Recorrer arrelo de personas y crear una fila por cada una -->
        <?php foreach($directorios as $persona) { ?>

            <tr>
                <td><?php echo $persona[0]; ?></td>
                <td><?php echo $persona[1]; ?></td>
                <td><?php echo $persona[2]; ?></td>
                <td><?php echo $persona[3]; ?></td>
                <td><?php echo $persona[4]; ?></td>
                <!-- Recorrer arreglo de colores para encontrar su significado: -->
                <?php foreach($main_colors as $main => $valor) { 
                    if($main===$persona[4]) { ?>
                        <!-- Crear celda con significado de color si el color favorito se encuentra en el arreglo de colores y significado. -->
                        <td ><?php echo $valor; $cont++; ?></td>               
                <!-- Si no se encuentra el color, $cont seguirá siendo igual a 0 -->
                <?php } } if($cont==0) { ?>
                    <!-- Si entra aquí es porque no se encontró el color favorito en el arreglo de colores -->
                    <td><?php echo "No se encuentra el significado."; ?></td>
                <!-- Cierra el condicional de $cont. -->
                <?php } ?>
            </tr>
        <!-- Cierra foreach de $directorios. -->
        <?php } ?>

    </table>
    
</body>
</html>