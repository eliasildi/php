<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicio 03 del examen</title>
</head>
<body>
	<h2 align="center">Cubo Mágico</h2>
	<br />
	<?php

	function BuscarNumero($aux, $valorabuscar)
	{

		// esta función busca si $valorabuscar está ya en el cuadrado
		// Devuelve TRUE si está y FALSE sino

		for ($i=0; $i < 3; $i++)
			for ($j=0; $j < 3; $j++)
			if ($aux[$i][$j] == $valorabuscar)
			return true;
		return false;
	}

	function GeneraCuadrado( $valor )
	{

		// genera un array de 3 x 3
		// si $valor es 1 se genera de manera aleatoria
		// si $valor es 2 se genera un cuadrado mágico

		$x = null;
		if ($valor == 2)
			$x = array(array(8,1,6), array(3,5,7),array(4,9,2));
		elseif ($valor == 1) {
			for ($i=0; $i < 3; $i++)
				for ($j=0; $j < 3; $j++)
				$x[$i][$j] = 0;

			for ($i = 0; $i < 3; $i++)
				for ($j = 0; $j < 3; $j++) {
				$insertado = false;
				while (! $insertado) {
					$valor = mt_rand(1,9);
					if (! BuscarNumero($x, $valor)) {
						$x[$i][$j] = $valor;
						$insertado = true;
					}
				}
			}

		}
		return $x;
	}

	function ImprimeCuadrado($aux)
	{
		for ($i = 0; $i < 3; $i++) {
			for ($j = 0; $j < 3; $j++)
				print " ".$aux[$i][$j];
			print "<br/>";
		}
	}

	function RevisaCuadrado($cuadrado)
	{
		if ( (($cuadrado[0][0] + $cuadrado[0][1] + $cuadrado[0][2]) == 15) and // fila 0
				(($cuadrado[1][0] + $cuadrado[1][1] + $cuadrado[1][2]) == 15) and // fila 1
				(($cuadrado[2][0] + $cuadrado[2][1] + $cuadrado[2][2]) == 15) and // fila 2
				(($cuadrado[0][0] + $cuadrado[1][0] + $cuadrado[2][0]) == 15) and // col 1
				(($cuadrado[0][1] + $cuadrado[1][1] + $cuadrado[2][1]) == 15) and // col 2
				(($cuadrado[0][2] + $cuadrado[1][2] + $cuadrado[2][2]) == 15) and // col 3
				(($cuadrado[0][0] + $cuadrado[1][1] + $cuadrado[2][2]) == 15) and // diag 1
				(($cuadrado[0][2] + $cuadrado[1][1] + $cuadrado[2][0]) == 15) )   // diag 2
			return true;
		return false;
	}

	// programa principal

	$cuadradomagico = GeneraCuadrado(2);
	ImprimeCuadrado( $cuadradomagico );
	if ( RevisaCuadrado( $cuadradomagico ) )
		print "<br/><br/>El cuadrado generado es mágico <br/>";
	else
		print "<br/><br/>El cuadrado generado NO es mágico <br/>";
	?>
</body>
</html>
