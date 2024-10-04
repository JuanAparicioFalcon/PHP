<?php
// Solicitar al usuario que ingrese un número
$numero = readline("Por favor, ingresa un número: ");

// Verificar si es un número válido
if (is_numeric($numero)) {
    // Determinar si el número es múltiplo de 3 y 5
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        echo "El número $numero es múltiplo de 3 y de 5.\n";
    } else {
        echo "El número $numero no es múltiplo de 3 y de 5.\n";
    }
} else {
    echo "Por favor, ingresa un número válido.\n";
}
?>
