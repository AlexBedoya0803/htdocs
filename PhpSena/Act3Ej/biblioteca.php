<?php 

    /* Desarrollador: Jhon Alexander Bedoya Carvajal.
        Programa de formación: Desarrollo Web con Php.
        Nombre de la evidencia: Evidencia: Taller "Uso de arreglos". */

    /* Se define la funcion operaciones con sus partametros: */
    function operaciones($n1, $n2, $op = "S") {

        if($op == "S") return $n1 + $n2;
        elseif($op == "R") return $n1 - $n2;
        elseif($op == "M") return $n1 * $n2;
        elseif($op == "D") return $n1 / $n2;

        /* Si el parametro de la operacion no es "S", "R", "M", "D" o queda vacio, retorna lo siguiente: */
        return "Operation type is invalid.";

    }

?>