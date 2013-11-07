<?php

// contar las palabras de una frase
//
// supongamos para simplificar que las palabras
// sólo están separadas por espacios en blanco,
// coma, punto, dos puntos y punto y coma.
// Hay que tener cuidado con la última palabra


$nropalabras = 0;
$espalabra = false;

$fp = fopen("ej20-archivodatos.txt", "r")or
die ("No existe el archivo \"$nombrefichero\"<br />");

while (! feof( $fp ) ) {
	$carleido = fgetc( $fp );
	if ( ($carleido != ' ') and
		 ($carleido != ',') and
		 ($carleido != '.') and
		 ($carleido != ':') and
		 ($carleido != ';')) {
		if ($espalabra == false ) {
			$nropalabras++;
			$espalabra = 1;
		}
	}
	else {
		$espalabra = false;
	}
}

print "El n&uacute;mero de palabras de la frase es = $nropalabras <br />";

?>