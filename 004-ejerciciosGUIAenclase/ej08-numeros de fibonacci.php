<?php

// Genera y escribe los primeros n n�meros de fibonacci

$fibn2 = 0;
$fibn1 = 1;
$numeros_a_generar = 15;

echo $fibn2."<br />";
if ($numeros_a_generar == 1) {
	exit("Fin de ejecuci�n");
}
echo $fibn1."<br />";
if ($numeros_a_generar == 2) {
	exit("Fin de ejecuci�n");
}
$numeros_generados = 2;
while ($numeros_generados < $numeros_a_generar){
	$fibn = $fibn2 + $fibn1;
	echo $fibn."<br />";
	$fibn2 = $fibn1;
	$fibn1 = $fibn;
	$numeros_generados++;
}
echo "Fin de ejecuci�n";
?>