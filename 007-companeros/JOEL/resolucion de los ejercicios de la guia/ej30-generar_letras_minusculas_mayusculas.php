<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Generar letras aleatorias minusculas y mayusculas</title>
</head>
<body>
	<h2>Generando letras</h2>

	<?php

	$nro_letras = 15;
	$valor_minimo = 65;      // ascii de la 'A'
	$valor_maximo = 122;     // ascii de la 'z'

	for ($i = 1; $i <= $nro_letras; $i++ ) {
		while (TRUE) {
			$valor_generado = mt_rand($valor_minimo, $valor_maximo);
			if ( ($valor_generado < 91) or ($valor_generado > 96) )
				break;
		}
		echo chr($valor_generado). " ";
		$valor_generado++;
	}
	?>
</body>
</html>
