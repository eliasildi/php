<?php

$x=array(10,25,14,37,-8,4,-13);
$n=count($x);
$i=0;

while ($i<$n){
	if ($x[$i]<0){
		echo "En la posicion $i el valor es $x[$i]";
		break;
	}
	else {
		$i++;
	}
}
if ($i==$n) {
	echo "No hay numeros negativos";
}
?>