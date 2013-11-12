<?php

$nombrefichero = "archivo01.txt";
$contvocal = 0;
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$carleido = fgetc($fp);
	
	if ( $carleido == 'a' ) {
		$contvocal++;
	}
	if ( $carleido == 'e' ) {
		$contvocal++;
	}
	if ( $carleido == 'i' ) {
		$contvocal++;
	}
	if ( $carleido == 'o' ) {
		$contvocal++;
	}
	if ( $carleido == 'u' ) {
		$contvocal++;
	}
	if ( $carleido == 'A' ) {
		$contvocal++;
	}
	if ( $carleido == 'E' ) {
		$contvocal++;
	}
	if ( $carleido == 'I' ) {
		$contvocal++;
	}
	if ( $carleido == 'O' ) {
		$contvocal++;
	}
	if ( $carleido == 'U' ) {
		$contvocal++;
	}	
}

echo "El numero de VOCALES del fichero $nombrefichero es $contvocal <br />";
echo "<br /><br />Fin de la ejecución<br />";

?>