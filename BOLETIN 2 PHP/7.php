<?php
// Solicitar al usuario que ingrese una cadena de texto
$cadena = readline("Por favor, ingresa una cadena de texto: ");
$long = strlen($cadena);
// Verificar si la longitud de la cadena es mayor a 10 caracteres
if ($long > 10) {
    echo "La cadena ingresada es: $cadena\n";
} else {
    echo "La cadena ingresada tiene 10 caracteres o menos.\n";
}
?>
