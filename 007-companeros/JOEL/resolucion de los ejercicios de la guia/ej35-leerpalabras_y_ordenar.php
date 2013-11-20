<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP -- Ejercicios</title>
</head>
<body>
	<p>Lectura de palabras y guardarlas de manera ordenada en un array</p>
	<br />
	<?php

	// suponemos que cada palabra está en una línea del fichero

	ini_set('display_errors', 1);
	$fp = fopen("ej35-palabras.txt", "r") or die("No se pudo abrir el fichero<br />");
	$lecturashechas = 0;
	$i = 0; // apunta a la primera posicion libre
	while ( ! feof($fp) ) {
		$valorleido = fgets($fp,1024);
		$j = 0;
		while ( ($j < $i) and ( strcmp( $valorleido, $palabras[$j] ) > 0) ) // buscamos donde va
			$j++;
		if ($i != $j) {
			$hasta = $i - 1;
			while ($hasta >= $j) {
				$palabras[$hasta + 1] = $palabras[$hasta];
				$hasta--;
			}
			$palabras[$j] = $valorleido;
		}
		else
			$palabras[$i] = $valorleido;
		$i = $i + 1;
		$lecturashechas++;
	}
	if ($lecturashechas == 0)
		print "No ha introducido palabras<br />";
	else {
		$i = 0;
		print "Escribimos las palabras del array <br />";
		do {
			print $palabras[$i]."<br />";
			$i++;
		} while ($i < $lecturashechas);
	}
	fclose($fp);
	?>
</body>
</html>
