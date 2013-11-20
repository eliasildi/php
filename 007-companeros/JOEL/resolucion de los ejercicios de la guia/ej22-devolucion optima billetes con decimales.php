<?php

// hacer un desglose óptimo de billetes y monedas de una cantidad en decimal

$valoradevolver = 888.88;
echo "Los $valoradevolver € se descomponen de manera óptima de la siguiente forma:<br /><br />";
$i = 0;
$resto = $valoradevolver;
$billetes= array(500,200,100,50,20,10,5,2,1,0.50, 0.20, 0.10, 0.05, 0.02, 0.01);
while ($resto >= 0.01) {   // resto != 0
	$cociente = (int)($resto / $billetes[$i]);
	echo "el cociente es $cociente<br />";
	if ( $cociente  > 0) {
		if ($i <= 6)
			$escribir = "billetes";
		else
			$escribir = "monedas";
		print "Necesito $cociente $escribir de $billetes[$i] <br />";
		$resto = $resto - $cociente * $billetes[$i];
		echo "el resto es $resto<br />";
	}
	$i++;
}
if ($valoradevolver == 0)
	echo "No hay cambio que devolver<br />";
?>