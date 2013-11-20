<?php

// encontrar todos los n�meros negativos en un array
// y escribe la posici�n en la que los encuentra y
// n�mero total de n�meros negativos que hay y el
// porcentaje de n�meros negativos que hay sobre el
// total de n�meros

$x[0] = 3;
$x[1] = 7;
$x[2] = 6;
$x[3] = 3;
$x[4] = 8;

// la funci�n count( array ) nos indica el n�mero de elementos de
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

echo "En total se han encontrado $contadornegativos n�meros negativos<br />";
$porcentaje = ( $contadornegativos / $nroeltosarray ) * 100;
printf ("El porcentaje de n�meros negativos es del %.2f", $porcentaje);













?>