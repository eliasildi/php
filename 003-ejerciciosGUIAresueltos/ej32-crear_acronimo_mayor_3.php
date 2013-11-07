<?php

// contar las palabras de una frase
//
// supongamos para simplificar que las palabras
// sólo están separadas por espacios en blanco.
// Hay que tener cuidado con la última palabra

$frase = "Instituto nacional de la seguridad social";

$i = 0;
$acronimo = "";
$espalabra = 0; // no hay una palabra
$longitud = strlen($frase);
$long_palabra = 0;
while ($i < $longitud ) {
	if ($frase[$i] != ' ') {      // estoy en un caracter distinto de espacio
		if ($espalabra == 0 ) {
			$cand_acronimo = $frase[$i];
			$long_palabra++;
			$espalabra = 1;  // se comienza la palabra
		}
		else
			$long_palabra++;
	}
	else {                            // estoy en un espacio en blanco
		if ($long_palabra >= 3)
			$acronimo = $acronimo . strtoupper($cand_acronimo);
		$long_palabra = 0;            // corregir esto va fuera del if
		$espalabra = 0;
	}
	$i++;
}

// no se ha detectado la última palabra porque no hay espacio
// en blanco antes del fin del array

//$long_palabra++;
if ($long_palabra >= 3)
	$acronimo = $acronimo . strtoupper($cand_acronimo);
	

echo "el acronimo es el siguiente : $acronimo<br />";

?>