# cometarios en php

<?php
//esto es un comentario de una linea
#esto tambien es un comentario de una linea

/*
esto es un comentario de varias lineas
/*
?>


# variables 

<?php
$nombre = "juan";
$edad = 20;

echo $nombre; // Imprime: Juan

?>

# constantes

<?php

define("PI", 3.1416);

const SALUDO = "Hola";

echo PI; // Imprime: 3.1416

?>

# arrays

<?php

$frutas = ["Manzana", "Banano", "Uva"];

echo $frutas[0]; // Imprime: Manzana

echo $frutas [2]; // Imprime: Uva

?>

# asociativos

<?php

$persona = [

"nombre" => "Ana",

"edad" => 25,

"ciudad" => "Bogotá"

];

echo $persona ["nombre"); // Imprime: Ana