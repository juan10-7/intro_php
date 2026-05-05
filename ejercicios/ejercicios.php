<?php


# Ejercicio 1:
# Ingresar el tiempo de duración de una llamada telefónica y determinar la cantidad a pagar, de acuerdo con lo siguiente:
# a. Toda llamada que dure tres minutos o menos tienen un costo de $300.
# b. Cada minuto adicional cuesta $50.

$minutos = 67; // Tiempo de duración ingresado
$costo_base = 300;
$costo_total = 0;

if ($minutos <= 3) {
    $costo_total = $costo_base;
} else {
    // Se resta el tiempo base y se multiplica el excedente por $50
    $minutos_adicionales = $minutos - 3;
    $costo_total = $costo_base + ($minutos_adicionales * 50);
}

echo "El total a pagar por " . $minutos . " minutos es: $" . $costo_total;
?>

/*Ejercicio 2:
Mostrar los numeros del 1 al 100, usando la instrucción for y una array indexado./*

<?php

$numeros = array();

for ($i = 1; $i <= 100; $i++) {
    $numeros[] = $i;
}

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "<br>";
}
?>