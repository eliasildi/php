<?php

// ahora se distingue mayúscula de minúscula

$contador["A"] = 0;
$contador["a"] = 0;
$contador["E"] = 0;
$contador["e"] = 0;
$contador["I"] = 0;
$contador["i"] = 0;
$contador["O"] = 0;
$contador["o"] = 0;
$contador["U"] = 0;
$contador["u"] = 0;

$fp = fopen("ej38-fichero_datos.txt", "r") or
die ("No existe el archivo<br />");

while (! feof( $fp ) ) {
	$carleido = fgetc( $fp );
	$auxcaracter = strtoupper($carleido);
	if ( ($auxcaracter == 'A') or
		 ($auxcaracter == 'E') or
		 ($auxcaracter == 'I') or
		 ($auxcaracter == 'O') or
		 ($auxcaracter == 'U'))
		$contador[$carleido]++;
}

print "El n&uacute;mero de vocales encontradas<br /><br />";
foreach ($contador as $valor => $aux)
	echo "De $valor hay $aux <br />";
?>