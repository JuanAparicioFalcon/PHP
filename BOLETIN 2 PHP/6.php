<?php
// Solicitar al usuario que ingrese un año
$anio = readline("Por favor, ingresa un año: ");

// Verificar si es un número válido
if (is_numeric($anio)) {
    // Determinar si el año es bisiesto
    if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
        echo "El año $anio es bisiesto.\n";
    } else {
        echo "El año $anio no es bisiesto.\n";
    }
} else {
    echo "Por favor, ingresa un año válido.\n";
}
?>
