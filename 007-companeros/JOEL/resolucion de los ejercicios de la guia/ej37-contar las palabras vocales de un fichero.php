<?php

$contador["A"] = 0;
$contador["E"] = 0;
$contador["I"] = 0;
$contador["O"] = 0;
$contador["U"] = 0;

$fp = fopen("ej37-fichero_datos.txt", "r") or
die ("No existe el archivo<br />");

while (! feof( $fp ) ) {
	$carleido = fgetc( $fp );
	$carleido = strtoupper($carleido);
	if ( ($carleido == 'A') or
		 ($carleido == 'E') or
		 ($carleido == 'I') or
		 ($carleido == 'O') or
		 ($carleido == 'U'))
		$contador[$carleido]++;
}

print "El n&uacute;mero de vocales encontradas<br /><br />";
foreach ($contador as $valor => $aux)
	echo "De $valor hay $aux <br />";
?>