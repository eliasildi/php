<?php

// Muestra la media de los valores almacenados en un array

$x = array( 13, 24, 65, 14, 100, 1, 45, 200, 1, 80);

$i = 0;
$suma = 0;
$nroelementos = count($x);

while ( $i < $nroelementos ){
	$suma = $suma + $x[$i];
	$i = $i + 1;
}
$promedio = $suma / $nroelementos;

printf ("El promedio de los %d números del array es de: %.2f<br />",
$nroelementos, $promedio);
?>