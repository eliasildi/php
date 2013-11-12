<?php

// hacer un desglose óptimo de billetes y monedas de una cantidad

$valoradevolver = 888;
$i = 0;
$resto = $valoradevolver;
$billetes= array(500,200,100,50,20,10,5,2,1);
while ($resto != 0) {
	$cociente = (int)($resto / $billetes[$i]);
	if ( $cociente != 0) {
		if ($billetes[$i] > 2)
			$escribir = "billetes";
		else
			$escribir = "monedas";
		print "Necesito $cociente $escribir de $billetes[$i] <br />";
		$resto = $resto % $billetes[$i];
	}
	$i++;
}
if ($valoradevolver == 0)
	echo "No hay cambio que devolver<br />";
?>