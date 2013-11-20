<?php

// sacar la media de los números leídos de un array
// el fichero de datos es ej21-ficherodatos.txt
//
// en ese fichero todos los números están en la primera
// fila separados por un espacio en blanco y finaliza con Intro

$i = 0;
$suma = 0;

$nombrefichero = "ej18-ficherodatos.txt";
$fp = fopen($nombrefichero, "r") or
die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$filaleida = fgets($fp, 1024);

	// decomponemos la fila leida en sus números
	// la función strtok divide un string pasado en sus componentes
	// según un/unos caracteres de separación
	// la primera vez que se usa se debe indicar el string al que se
	// aplica la función

	$valorleido = strtok($filaleida, " \n");
	while ($valorleido !== FALSE) {
		$suma += (int)$valorleido;
		$i++;

		// la función strtok mantiene la posición en el string original
		// y no hace falta indicar nuevamente el string sobre el que se
		// tiene que aplicar

		$valorleido = strtok(" \n");
	}
}
fclose($fp);
$media = $suma / $i;
echo "La media de los $i números es $media<br />";
?>