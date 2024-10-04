<?php

// Capturar la entrada del usuario
$numero = readline("Por favor, ingresa un número: ");

// Verificar si es un número válido
if (is_numeric($numero)) {
    // Determinar si es par o impar
    if ($numero % 2 == 0) {
        echo "El número $numero es par.\n";
    } else {
        echo "El número $numero es impar.\n";
    }
} else {
    echo "Por favor, ingresa un número válido.\n";
}
?>
