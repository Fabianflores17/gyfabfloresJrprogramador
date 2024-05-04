<?php


// Función para calcular la cuota de amortización
function calcularCuota($monto, $tasa, $plazo)
{
    // Calcular la cuota mensual usando la fórmula del método de cuota sobre saldos
    $tasaint = ($tasa)/100;
    $saldoinicial = $monto;
    $amortizacion = $monto == 0 ? 0 : (float)($monto/$plazo);
    return $amortizacion;
}

// Solicitar al usuario los datos del préstamo
// Solicitar al usuario ingresar el monto del préstamo
echo "Ingrese el monto del préstamo: ";
// Leer la entrada del usuario y eliminar espacios en blanco al principio y al final
$monto_input = trim(fgets(STDIN));

// Validar si el monto ingresado está vacío o no es un número
if ($monto_input == "" || !is_numeric($monto_input)) {
    echo "Error: El monto del préstamo ingresado no es válido.\n";
    exit; // Salir del script debido al error
}

// Convertir el monto a tipo float
$monto = floatval($monto_input);

// Solicitar al usuario ingresar el plazo en meses
echo "Ingrese el plazo en meses: ";
// Leer la entrada del usuario y eliminar espacios en blanco al principio y al final
$plazo_input = trim(fgets(STDIN));

// Validar si el plazo ingresado está vacío o no es un número entero
if ($plazo_input == "" || !ctype_digit($plazo_input)) {
    echo "Error: El plazo ingresado no es válido.\n";
    exit; // Salir del script debido al error
}

// Convertir el plazo a tipo entero
$plazo = intval($plazo_input);

// Solicitar al usuario ingresar la tasa de interés mensual (en porcentaje)
echo "Ingrese la tasa de interés mensual (en porcentaje): ";
// Leer la entrada del usuario y eliminar espacios en blanco al principio y al final
$tasa_input = trim(fgets(STDIN));

// Validar si la tasa ingresada está vacía o no es un número
if ($tasa_input == "" || !is_numeric($tasa_input)) {
    echo "Error: La tasa de interés ingresada no es válida.\n";
    exit; // Salir del script debido al error
}

// Convertir la tasa a tipo float
$tasa = floatval($tasa_input);

// Continuar con el cálculo del préstamo...
// Calcular la cuota de amortización
$cuota = calcularCuota($monto, $tasa, $plazo);

// Imprimir la tabla de amortizaciones
// Imprimir el título con el mismo formato que las columnas
echo str_pad("Tabla de Amortizaciones:", 90) . "\n";
echo str_pad("----------------------------------------------------------------------------------------", 90) . "\n";
echo str_pad("Mes", 5) . "|" . str_pad("Saldo", 20) . "|" . str_pad("Interés", 21) . "|" . str_pad("Abono", 20) . "|" . str_pad("Pago", 20) . "|\n";
echo str_pad("----------------------------------------------------------------------------------------", 90) . "\n";

$Montoinicial = (float)$monto;
for ($i = 1; $i <= $plazo; $i++) {
    $saldo = $Montoinicial;
    $interes = ($Montoinicial * $tasa / 100);
    $abono = $cuota;
    $pago = ($cuota + $interes);
    $saldofin = ($Montoinicial - $abono);
    $saldofin = ($saldo - $abono);
    $Montoinicial = $saldofin;

    // Formatear las columnas para que tengan el mismo ancho
    echo str_pad($i, 5) . "|";
    echo str_pad(number_format($saldo, 2), 20) . "|";
    echo str_pad(number_format($interes, 2), 20) . "|";
    echo str_pad(number_format($abono, 2), 20) . "|";
    echo str_pad(number_format($pago, 2), 20) . "|\n";
}

echo str_pad("----------------------------------------------------------------------------------------", 90) . "\n";

