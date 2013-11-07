<?php

// sacar la media de los n�meros le�dos de un array
// el fichero de datos es ej21-ficherodatos.txt
//
// en ese fichero todos los n�meros est�n en la primera
// fila separados por un espacio en blanco y finaliza con Intro

$i = 0;
$suma = 0;

$nombrefichero = "ej18-ficherodatos.txt";
$fp = fopen($nombrefichero, "r") or
die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$filaleida = fgets($fp, 1024);

	// decomponemos la fila leida en sus n�meros
	// la funci�n strtok divide un string pasado en sus componentes
	// seg�n un/unos caracteres de separaci�n
	// la primera vez que se usa se debe indicar el string al que se
	// aplica la funci�n

	$valorleido = strtok($filaleida, " \n");
	while ($valorleido !== FALSE) {
		$suma += (int)$valorleido;
		$i++;

		// la funci�n strtok mantiene la posici�n en el string original
		// y no hace falta indicar nuevamente el string sobre el que se
		// tiene que aplicar

		$valorleido = strtok(" \n");
	}
}
fclose($fp);
$media = $suma / $i;
echo "La media de los $i n�meros es $media<br />";
?>