<?php 

$nombre = "2013.10.10ABRIRleerCONTARvocales.txt";
$contador=0;
$fp = fopen($nombre, "r") or die ("No existe el archivo \"$nombre\"<br />");
while (! feof($fp)) {
	$cardelio=fgetc($fp);
	if ($cardelio=='a') {
		$contador++;
	}
	if ($cardelio=='e') {
		$contador++;
	}
	if ($cardelio=='i') {
		$contador++;
	}
	if ($cardelio=='o') {
		$contador++;
	}
	if ($cardelio=='u') {
		$contador++;
	}
	
	
	// MAYUS
	if ($cardelio=='A') {
		$contador++;
	}
	if ($cardelio=='E') {
		$contador++;
	}
	if ($cardelio=='I') {
		$contador++;
	}
	if ($cardelio=='O') {
		$contador++;
	}
	if ($cardelio=='U') {
		$contador++;
	}
	
	// TILDES MAYUS
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	
	// TILDES MINUS
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	if ($cardelio=='�') {
		$contador++;
	}
	
}

echo " $nombre tiene $contador vocales<br/>";




?>