<?php
$contador=0;
$suma=0;
$nombrefichero="mediadenumeros.txt";
$fp=fopen($nombrefichero, "r") or die ("No existe");

while (! feof($fp)) {
	$numero=(int)fgets($fp,1024);
	$suma=$suma+$numero;
	$contador++;
}

$promedio=$suma/$contador;

echo "El promedio es $promedio<br />";

?>