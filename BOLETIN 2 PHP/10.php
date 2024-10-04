<?php
// Solicitar al usuario que ingrese la primera cadena
$cadena1 = readline("Por favor, ingresa la primera cadena de texto: ");

// Solicitar al usuario que ingrese la segunda cadena
$cadena2 = readline("Por favor, ingresa la segunda cadena de texto: ");

// Comparar las cadenas
if ($cadena1 === $cadena2) {
    echo "Las cadenas son iguales.\n";
} else {
    echo "Las cadenas son diferentes.\n";
}
?>
