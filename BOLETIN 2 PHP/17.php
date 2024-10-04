<?php
// Cadena de texto
$cadena = "Hola, mundo!";

// Obtiene la longitud de la cadena
$longitud = strlen($cadena);

// Bucle for que imprime los caracteres de la cadena de atrás hacia adelante
for ($i = $longitud - 1; $i >= 0; $i--) {
    echo $cadena[$i]; // Imprime el carácter actual
}

echo "\n"; // Imprime una nueva línea al final
?>
