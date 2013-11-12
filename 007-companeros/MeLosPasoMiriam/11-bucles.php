<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>
	<h1>Como usar bucles en PHP</h1>
	<br />
	<?php

	// bucle while

	$i = 10;

	while ($i > 0)
	{
		print "El valor de i = $i <br />";
		$i--;
		if ($i == 5)
			break;
	}
	print "Fin de ejecuci&oacute;n <br />";

	// bucle for


	for ($j=0; $j<=10; $j++)
	{
		print "la variable j = $j <br />";
	}

	// bucle do-while

	print "Esto es la instrucci&oacute;n do while<br />";

	$i=15;   // siempre se ejecuta una vez
	do
	{
		print "El valor de i = $i<br />";
		$i++;
	} while ($i <= 10);

	// bucle foreach

	$Nombre[0]="Jose";
	$Nombre[1]="Alberto";
	$Nombre[0]="Raul";
	$Nombre[0]="Pedro";
	$Nombre[0]="Emilio";

	foreach ($Nombre as $aux)
	{
		print "Hola ".$aux."<br />";
	}

	?>
</body>
</html>
