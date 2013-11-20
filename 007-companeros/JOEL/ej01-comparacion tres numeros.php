<?php

// script que permite comparar el valor de tres variables
// y las escribe de manera ordenada de forma creciente

$x1 = 10; $x2 = 15; $x3 = 100;

if ($x1 > $x2){
	if ($x1 > $x3){
		echo "$x1 ";
		if ($x2 > $x3){
			echo "$x2 $x3";
		}
		else {
			echo "$x3 $x2";
		}
	}
	else {
		echo "$x3 $x1 $x2";
	}
}
else {
	if ($x2 > $x3) {
		echo "$x2 ";
		if ( $x1 > $x3) {
			echo"$x1 $x3";
		}
		else {
			echo "$x3 $x1";
		}
	}
	else {
		echo "$x3 $x2 $x1";
	}
}
?>