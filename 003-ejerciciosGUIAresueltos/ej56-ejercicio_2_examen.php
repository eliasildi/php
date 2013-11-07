<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicio 02 del examen</title>
</head>
<body>
	<p>Decodificador de César</p>
	<?php

	function DecodeCesar()
	{
		// lee del fichero un mensaje en texto codificado y lo codifica con la clave indicada
		// por la variable $clave

		$clave = 5;

		$fp = fopen("ej56-ejercicio_2_examen_mensaje_codificado.txt", "r");// abrimos fichero lectura
		$caracterleido = fgets($fp,2);
		while ( $caracterleido !== false ) // lee 1 caracter del fichero hasta el final del fichero
		{

			$valor = ord($caracterleido);
			if ($valor != ord(" "))
			{
				$valor -= $clave;
				if ( $valor < ord("a"))
					$valor = $valor + ord("z") - ord("a") + 1;  // tambien $valor + 26 (numero caracteres del alfabeto)
			}
			print chr($valor);
			$caracterleido = fgets($fp,2);
		}
		fclose($fp);
	}

	// programa principal

	DecodeCesar();

	?>
</body>
</html>
