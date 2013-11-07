<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicio 01 del examen</title>
</head>
<body>
	<p>Solución ejercicio 1 del examen</p>

	<?php

	// programa que genera una apuesta de loteria primitiva
	// hace uso de funciones

	function BuscarNumeroApuesta($apuesta, $nrosenapuesta, $valorabuscar)
	{

		// esta función busca si $valorabuscar está ya en la apuesta
		// Devuelve TRUE si está y FALSE sino

		if ($nrosenapuesta == 0)
			return false;

		$i = 0;
		while ($i < $nrosenapuesta ) {
			if ($apuesta[$i] == $valorabuscar )
				return true;
			$i++;
		}
		return false;
	}

	function GeneraPrimitiva()
	{
		// retorna el array que contiene la apuesta para la primitiva
		// eso implica que verifica que no haya ningún número repetido
		// en la apuesta

		$apuesta = NULL;
		$nroinsertados = 0;
		while ($nroinsertados < 6 ) {
			$nrogenerado = mt_rand(1,49);
			if ( ! BuscarNumeroApuesta($apuesta, $nroinsertados,$nrogenerado) ) {
				$apuesta[] = $nrogenerado;
				$nroinsertados++;
			}
		}
		return $apuesta;
	}

	function ImprimirPrimitiva($apuesta)
	{
		// función que imprime la apuesta que se pasa como parámetro

		print "La apuesta generada es :";
		foreach ($apuesta as $numerojugado)
			print " ".$numerojugado;
		
		print "<br />";
	}
// esta es la que hay que hacer *******************
	function RevisaPrimitiva($apuesta)
	{
		$contdc0 = 0;
		$contdc1 = 0;
		$contdc2 = 0;
		$contdc3 = 0;
		$contdc4 = 0;

		for ($i=0; $i < 6; $i++) {
			if ( ($apuesta[$i] >= 1) and ($apuesta[$i] <=9 ))
				$contdc0++;
			if ( ($apuesta[$i] >= 10) and ($apuesta[$i] <=19 ))
				$contdc1++;
			if ( ($apuesta[$i] >= 20) and ($apuesta[$i] <=29 ))
				$contdc2++;
			if ( ($apuesta[$i] >= 30) and ($apuesta[$i] <=39 ))
				$contdc3++;
			if ( ($apuesta[$i] >= 40) and ($apuesta[$i] <=49 ))
				$contdc4++;
		}
		if ( ($contdc0 >=4) or
            ($contdc1 >=4) or
            ($contdc2 >=4) or
            ($contdc3 >=4) or
            ($contdc4 >=4) )
        return true;
    return false;
	}

	// programa principal

	while (TRUE) {
	$apuestarealizada = GeneraPrimitiva();
	if (! RevisaPrimitiva($apuestarealizada)){
		ImprimirPrimitiva($apuestarealizada);
		ImprimirPrimitiva($apuestarealizada);
		ImprimirPrimitiva($apuestarealizada);
		break;
	}
}

?>

</body>
</html>
