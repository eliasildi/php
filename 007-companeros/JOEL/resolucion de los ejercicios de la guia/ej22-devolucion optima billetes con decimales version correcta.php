<?php

// hacer un desglose óptimo de billetes y monedas de una cantidad en decimal

// para evtar el error de la versión anterior con el trabajo de números
// decimales multiplicaremos el número por 100 y cada cantidad de billetes


$valoradevolver = 888.88;
echo "Los $valoradevolver € se descomponen de manera óptima de la siguiente forma:<br /><br />";
$i = 0;
$resto = $valoradevolver * 100;
$billetes= array(500,200,100,50,20,10,5,2,1,0.50, 0.20, 0.10, 0.05, 0.02, 0.01);
while ($resto != 0) {   // resto != 0
	$cociente = (int)($resto / $billetes[$i] / 100 ) ;
	if ( $cociente  > 0) {
		if ($i <= 6)
			$tipo = "billetes";
		else
			$tipo = "monedas";
		print "Necesito $cociente $tipo de $billetes[$i] <br />";
		$resto = $resto - $cociente * $billetes[$i] * 100;
	}
	$i++;
}
if ($valoradevolver == 0)
	echo "No hay cambio que devolver<br />";
?>