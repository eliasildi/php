<?php

// encontrar un n�mero negativo en un array
// cuando lo consigue para la b�squeda y escribe
// la posici�n en la que est�
// usando un do while

$x[0] = 3;
$x[1] = 7;
$x[2] = 6;
$x[3] = 3;
$x[4] = -8;

$nroeltosarray = 5;

$i = 0;
do {
	if ( $x[$i] < 0) {
		echo "He encontrado un negativo en la posicion $i<br />";
		break(1);
	}
	$i = $i +1;
} while ( $i < $nroeltosarray );

if ($i == $nroeltosarray) {
	echo "En el array no hay n�meros negativos<br />";
}
else {
	echo "He encontrado un negativo en la posicion $i<br />";
}












?>