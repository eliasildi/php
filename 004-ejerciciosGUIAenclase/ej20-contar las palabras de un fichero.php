<?php

// contar las palabras de una frase
//
// supongamos para simplificar que las palabras
// s�lo est�n separadas por espacios en blanco,
// coma, punto, dos puntos y punto y coma.
// Hay que tener cuidado con la �ltima palabra


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