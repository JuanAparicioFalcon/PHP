<?php
// Solicitar al usuario que ingrese su año de nacimiento
$anioNacimiento = readline("Por favor, ingresa tu año de nacimiento: ");

// Verificar si es un número válido
if (is_numeric($anioNacimiento)) {
    // Obtener el año actual
    $anioActual = date(2024);
    
    // Calcular la edad
    $edad = $anioActual - $anioNacimiento;
    
    // Verificar si la persona es mayor de edad
    if ($edad >= 18) {
        echo "Eres mayor de edad.\n";
    } else {
        echo "Eres menor de edad.\n";
    }
} else {
    echo "Por favor, ingresa un año de nacimiento válido.\n";
}
?>
