<?php

$x=array(10,25,14,37,-8,4,-13);
$n=count($x);
$i=0;

do {
if ($x[$i]<0){
		echo "En la posicion $i el valor es $x[$i]";
	}
	else {
		$i++;
	}
} while ($i<$n);
if ($i==$n) {
	echo "no hay numeros negativos";
}
?>