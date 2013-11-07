<?php

// encontrar un número negativo en un array
// cuando lo consigue para la búsqueda y escribe
// la posición en la que está

$x[0] = 3;
$x[1] = 7;
$x[2] = 6;
$x[3] = 3;
$x[4] = -8;

$nroeltosarray = 5;

$i = 0;
$encontrado = FALSE;
while ( (! $encontrado) AND ($i < $nroeltosarray ) ){
	if ( $x[$i] < 0) {
		$encontrado = TRUE;
	}
	else {
		$i = $i + 1;
	}
}
if ( $encontrado == TRUE) {                          // $i < $nroeltosarray
	echo "He encontrado un negativo en la posicion $i<br />";
}
else {
	echo "En el array no hay números negativos<br />";
}
?>