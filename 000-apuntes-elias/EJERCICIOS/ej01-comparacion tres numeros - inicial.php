<?php

// script que permite comparar el valor de tres variables
// y escribe el valor de la mayor

$x1 = 1500;
$x2 = 1500;
$x3 = 1500;

if ($x1 > $x2){
	if ($x1 > $x3){
		echo "El mayor es $x1<br />";
	}
	else {
			echo "El mayor es $x3<br />";
	}
}
else {
	if ($x2 > $x3) {
		echo "El mayor es $x2<br /> ";
	}
	else {
			echo "El mayor es $x3<br />";
	}
}
?>