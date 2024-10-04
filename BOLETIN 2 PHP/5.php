<?php
// Solicitar al usuario que ingrese la puntuación del estudiante
$puntuacion = readline("Por favor, ingresa la puntuación del estudiante: ");

// Verificar si es un número válido
if (is_numeric($puntuacion)) {
    // Determinar si el estudiante ha aprobado
    if ($puntuacion >= 60) {
        echo "El estudiante ha aprobado el examen.\n";
    } else {
        echo "El estudiante no ha aprobado el examen.\n";
    }
} else {
    echo "Por favor, ingresa una puntuación válida.\n";
}
?>
