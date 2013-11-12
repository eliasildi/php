<?php

// mostrar por pantalla los numeros impares menores que 100

$i = 1;
$suma = 0;

while ( $i <= 50){
	$suma = $suma + $i;
	$i = $i + 1;
}

echo "La suma de los números del 1 al 50 es = $suma";
?>