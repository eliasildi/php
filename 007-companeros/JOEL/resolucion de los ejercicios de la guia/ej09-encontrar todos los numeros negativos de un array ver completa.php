<?php

// encontrar todos los números negativos en un array
// y escribe la posición en la que los encuentra y
// número total de números negativos que hay y el
// porcentaje de números negativos que hay sobre el
// total de números

$x[0] = 3;
$x[1] = 7;
$x[2] = 6;
$x[3] = 3;
$x[4] = 8;

// la función count( array ) nos indica el número de elementos de
// un array.

$nroeltosarray = count($x);
$contadornegativos = 0;

$i = 0;
while ($i < $nroeltosarray ) {
	if ( $x[$i] < 0){
		echo "He encontrado un negativo en la posicion $i<br />";
		$contadornegativos++;
	}
	$i = $i +1;
}

echo "En total se han encontrado $contadornegativos números negativos<br />";
$porcentaje = ( $contadornegativos / $nroeltosarray ) * 100;
printf ("El porcentaje de números negativos es del %.2f", $porcentaje);













?>