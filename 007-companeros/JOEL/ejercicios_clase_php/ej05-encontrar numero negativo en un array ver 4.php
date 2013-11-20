<?php

// encontrar un número negativo en un array
// cuando lo consigue para la búsqueda y escribe
// la posición en la que está
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
    echo "En el array no hay números negativos<br />";
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
//	echo "En el array no hay números negativos<br />";
//}
//else {
//	echo "He encontrado un negativo en la posicion $i<br />";
//}











?>