<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n -- Ejercicio 05</title>
</head>
<body>
	<p>Lectura de una matriz de un fichero y c&acute;lculo de los promedios
		por fila y columna</p>
	<br />

	<?php	

	ini_set('display_errors', 1);

	// los datos de la matriz se lee de un fichero
	// la matriz en este fichero se ponen por filas
	// es decir que en el fichero hay tantas filas como las que hay en la matriz

	$nrofilas = 0;
	$fp = fopen("ej36-datos_matriz.txt", "r");
	while ( ($filaleida = fgets($fp,50) ) )
	{
		$nrocolumnas = 0;
		$valorleido = strtok($filaleida, " \n");
		while ($valorleido !== false)
		{
			$matriz[$nrofilas][$nrocolumnas] = (int)$valorleido;
			$nrocolumnas++;
			$valorleido = strtok(" \n");
		}
		$nrofilas++;
	}
	fclose($fp);
	if ( $nrofilas == 0 )
		print "No ha introducido datos en el fichero<br />";
	else
	{
		// calculo de promedio de filas

		for ($i=0; $i < $nrofilas; $i++)
		{
			$suma = 0;
			for ($j=0; $j < $nrocolumnas; $j++)
			{
				$suma = $suma + $matriz[$i][$j];
			}
			$promfila = $suma / $j;
			print "El promedio de la fila $i es =  $promfila <br />";
		}

		print "<br />";
		// calculo de promedio de columnas

		for ($j=0; $j < $nrocolumnas; $j++)
		{
			$suma = 0;
			for ($i=0; $i < $nrofilas; $i++)
			{
				$suma = $suma + $matriz[$i][$j];
			}
			$promfila = $suma / $i;
			print "El promedio de la columna $j es =  $promfila <br />";
		}

	}
	?>
</body>
</html>
