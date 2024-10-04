<?php
// Inicializa los primeros dos términos de la secuencia de Fibonacci
$fibonacci0 = 0; // Primer término
$fibonacci1 = 1; // Segundo término

// Imprime los primeros dos términos
echo $fibonacci0 . "\n";
echo $fibonacci1 . "\n";

// Bucle for que genera los primeros 10 términos de Fibonacci
for ($i = 2; $i < 10; $i++) {
    $fibonacciNext = $fibonacci0 + $fibonacci1; // Calcula el siguiente término
    echo $fibonacciNext . "\n"; // Imprime el siguiente término

    // Actualiza los dos últimos términos para la siguiente iteración
    $fibonacci0 = $fibonacci1;
    $fibonacci1 = $fibonacciNext;
}
?>
