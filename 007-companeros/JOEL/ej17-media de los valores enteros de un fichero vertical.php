<?php

// sacar la media de los números leídos de un fichero.
// el fichero de datos es ej17-ficherodatos.txt
//
// en ese fichero cada número ocupa una línea. (vertical)

$i = 0;  // contador de números
$suma = 0;

$nombrefichero = "ej17-ficherodatos.txt";
$fp = fopen($nombrefichero, "r") or
die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$valornumerico = (int)fgets($fp, 1024);
	$suma += $valornumerico;
	$i++;
}
fclose($fp);
$media = $suma / $i;
echo "La media de los $i números es $media<br />";
?>