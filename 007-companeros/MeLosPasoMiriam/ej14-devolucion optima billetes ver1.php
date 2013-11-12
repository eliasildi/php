<?php

// hacer un desglose óptimo de billetes y monedas de una cantidad
// que se encuentra almacenada en la variable $valoradevolver

$valoradevolver = 888;
$i = 0;
$resto = $valoradevolver;
$billetes= array(500,200,100,50,20,10,5,2,1);
while ($resto != 0)
{
	switch ($billetes[$i])     //valores ordinales
	{
		case 500:  // billetes de 500
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 500 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 200:  // billetes de 200
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 200 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 100:  // billetes de 100
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 100 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 50:  // billetes de 50
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 50 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 20:  // billetes de 20
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 20 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 10:  // billetes de 10
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 10 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 5:  // billetes de 5
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 5 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 2:  // monedas de 2
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente monedas de 2 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 1:  // monedas de 1
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente monedas de 1 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
	}
	$i++;
}
if ($valoradevolver == 0)
	echo "No hay cambio que devolver<br />";
?>