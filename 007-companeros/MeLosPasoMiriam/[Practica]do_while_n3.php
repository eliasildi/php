<?php

$x=array(10,25,14,37,-8,4,-13);
$n=count($x);
$i=0;
$cant=0;

do {
if ($x[$i]<0){
		echo "En la posicion $i el valor es $x[$i] <br/>";
		$cant++;
	}
$i++;
} while ($i<$n);
echo "Hay $cant Numeros negativos";

?>