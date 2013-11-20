<?php

// contar las palabras de una frase
//
// supongamos para simplificar que las palabras
// sólo están separadas por espacios en blanco.
// Hay que tener cuidado con la última palabra

$frase = "  Esta es la frase a analizar   ";

$i = 0;
$nropalabras = 0;
$comienzapalabra = true;
$longitud = strlen($frase);
while ($i < $longitud )
{
	if ($frase[$i] == ' ') {
		if ($comienzapalabra) {
			$nropalabras++;
			$comienzapalabra = false;
		}
	}
	else {
		$comienzapalabra = true;
	}
	$i++;
}

// palabra final

if (($longitud != 0) and ( ($frase[$i-1] != ' ')))
	$nropalabras++;

// si comenzó con blanco

if ($frase[0] == ' ')
	$nropalabras--;

print "El n&uacute;mero de palabras de la frase es = $nropalabras <br />";

?>