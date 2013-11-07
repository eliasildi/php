<?php

// contar las palabras de una frase
//
// supongamos para simplificar que las palabras
// sólo están separadas por espacios en blanco.
// Hay que tener cuidado con la última palabra

$frase = "Instituto nacional de la seguridad social";

$i = 0;
$acronimo = "";
$espalabra = 0;
$longitud = strlen($frase);
while ($i < $longitud ) {
	if ($frase[$i] != ' ') {      // estoy en un caracter distinto de espacio
		if ($espalabra == 0) {
			$acronimo = $acronimo . strtoupper($frase[$i]);
			$espalabra = 1;
		}
	}
	else {                            // estoy en un espacio en blanco
		$espalabra = 0;
	}
	$i++;
}

echo "el acronimo es el siguiente : $acronimo<br />";

?>