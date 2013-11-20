<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n -- Ejercicio 05</title>
</head>
<body>
	<p>Lectura de una matriz de un fichero y mostrarla por pantalla</p>
	<br />
	<?php

	ini_set('display_errors', 1);  // activa la muestra de errores

	// los datos de la matriz se lee de un fichero
	// la matriz en este fichero se ponen por filas
	// es decir que en el fichero hay tantas filas como las que hay en la matriz
	// la última fila debe terminar con un <INTRO>

	$matriz = NULL;
	$nrofilas = 0;
	$fp = fopen("ej19-datosmatriz.txt", "r") or
	die ("No existe el archivo \"$nombrefichero\"<br />");
	while ( ($filaleida = fgets($fp,1024))) {
		$nrocolumnas = 0;

		// decomponemos la fila leida en sus números
		// la función strtok divide un string pasado en sus componentes
		// según un/unos caracteres de separación
		// la primera vez que se usa se debe indicar el string al que se
		// aplica la función

		$valorleido = strtok($filaleida, " \n");
		while ($valorleido !== false) {
			$matriz[$nrofilas][$nrocolumnas] = (int)$valorleido;
			$nrocolumnas++;

			// la función strtok mantiene la posición en el string original
			// y no hace falta indicar nuevamente el string sobre el que se
			// tiene que aplicar

			$valorleido = strtok(" \n");
		}
		$nrofilas++;
	}
	fclose($fp);

	if ( $nrofilas == 0 )
		print "No ha introducido datos en el fichero<br />";
	else
	{
		// mostrar por pantalla la matriz leida

		for ($i=0; $i < $nrofilas; $i++) {
			for ($j=0; $j < $nrocolumnas; $j++) {
				print $matriz[$i][$j]."  ";
			}
			print "<br />";
		}
	}
	?>
</body>
</html>
