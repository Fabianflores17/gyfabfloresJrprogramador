<?php

function factorial($n) {
// Verificar si el número es menor que 0 (factorial no está definido para números negativos)
    if ($n < 0) {
        return "El factorial no está definido para números negativos";
    }

// Inicializar el resultado como 1
    $resultado = 1;

// Cadena para almacenar la operación factorial
    $operacion = "$n! = ";

// Calcular el factorial iterativamente
    for ($i = $n; $i >= 1; $i--) {
        $resultado *= $i;
        $operacion .= $i;
        if ($i > 1) {
            $operacion .= " * ";
        }
    }

    return "$operacion = $resultado";
}

// Solicitar al usuario ingresar el número del cual quiere calcular el factorial
echo "Ingrese un número para calcular su factorial: ";
$numero = intval(trim(fgets(STDIN)));

// Calcular y mostrar el factorial del número ingresado
echo factorial($numero);
?>
