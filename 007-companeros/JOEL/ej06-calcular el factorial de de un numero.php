<?php

// calcula el valor del factorial del n�mero que se almacena
// en la variable $numero

$i = 1;
$producto = 1;
$numero = 10;

while ( $i <= $numero){
	$producto = $producto * $i;
	$i = $i + 1;
}

echo "El producto de los n�meros del 1 al 10 es = $producto";
?>