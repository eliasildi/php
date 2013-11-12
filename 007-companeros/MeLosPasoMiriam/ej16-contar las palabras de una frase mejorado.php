<?php

// contar las palabras de una frase
//
// ahora las palabras están separadas por espacios en blanco,
// coma, punto, dos puntos y punto y coma.
// Hay que tener cuidado con la última palabra

$frase = "  Esta es,la frase a analizar.Quizas, mejor.   ";

$i = 0;
$nropalabras = 0;
$comienzapalabra = true;
$longitud = strlen($frase);
while ($i < $longitud )
{
	if ( ($frase[$i] == ' ') or
		 ($frase[$i] == ',') or
		 ($frase[$i] == '.') or
		 ($frase[$i] == ':') or
		 ($frase[$i] == ';') ) {
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

if (($longitud != 0) and ( ($frase[$i-1] != ' ') and
		($frase[$i-1] != ',') and
		($frase[$i-1] != '.') and
		($frase[$i-1] != ':') and
		($frase[$i-1] != ';')))
	$nropalabras++;

// si comenzo con blanco

if ($frase[0] == ' ')
	$nropalabras--;
print "El n&uacute;mero de palabras de la frase es = $nropalabras <br />";

?>