<?php
// Bucle for que imprime todos los números primos del 1 al 50
for ($num = 2; $num <= 50; $num++) {
    $esPrimo = true; // Asumimos que el número es primo

    // Verificamos si el número es primo
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $esPrimo = false; // No es primo si es divisible por $i
            break; // Salimos del bucle si encontramos un divisor
        }
    }

    // Si es primo, lo imprimimos
    if ($esPrimo) {
        echo $num . "\n"; // Imprime el número primo
    }
}
?>
