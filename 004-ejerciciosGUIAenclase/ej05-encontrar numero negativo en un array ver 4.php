<?php

// encontrar un n�mero negativo en un array
// cuando lo consigue para la b�squeda y escribe
// la posici�n en la que est�
// usando un for

$x[0] = 3;
$x[1] = 7;
$x[2] = 6;
$x[3] = -3;
$x[4] = 8;

$nroeltosarray = 5;


for ($i = 0; $i < $nroeltosarray; $i = $i +1 ) {
    if ( $x[$i] < 0) {
        break(1);
    }
}
if ($i == $nroeltosarray) {
    echo "En el array no hay n�meros negativos<br />";
}
else {
	echo "He encontrado un negativo en la posicion $i<br />";
}


//for ($i = 0,$encontre = FALSE; (! $encontre) AND ($i < $nroeltosarray ); $i = $i +1 ) {
//	if ( $x[$i] < 0) {
//		echo "He encontrado un negativo en la posicion $i<br />";
//		$encontre = TRUE;
//	}
//}
//if ($i == $nroeltosarray) {
//	echo "En el array no hay n�meros negativos<br />";
//}
//else {
//	echo "He encontrado un negativo en la posicion $i<br />";
//}











?>