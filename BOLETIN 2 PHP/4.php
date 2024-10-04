<?php
// Solicitar al usuario que ingrese tres números

$numero1 = readline("Por favor, ingresa el primer número: ");

$numero2 = readline("Por favor, ingresa el segundo número: ");

$numero3 = readline("Por favor, ingresa el tercer número: ");

// Verificar si los números son válidos
if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3)) {
    // Determinar el número más grande
    $maximo = $numero1; // Asumir que el primero es el más grande

    if ($numero2 > $maximo) {
        $maximo = $numero2; // Actualizar si el segundo es mayor
    }

    if ($numero3 > $maximo) {
        $maximo = $numero3; // Actualizar si el tercero es mayor
    }

    // Mostrar el resultado
    echo "El número más grande es: $maximo\n";
} else {
    echo "Por favor, asegúrate de ingresar números válidos.\n";
}
?>
