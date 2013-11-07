<?php

$x=array(1,23,28,32,37,39,48);

// elias gonzalez
//	1,2,3, 4, 5, 6

//	23, 28, 32, 37, 39, 48,
//	1, 28, 32, 37, 39, 48,
//	1, 23, 32, 37, 39, 48,
//	1, 23, 28, 37, 39, 48,
//	1, 23, 28, 32, 39, 48,
//	1, 23, 28, 32, 37, 48,
//	1, 23, 28, 32, 37, 39,

//hacer un for y 7 if

// for ( valor inicial contador; condicion a cumplir; modificación contador) {
//
//      acciones a realizar en cada iteración del bucle
//
// }

for ($i = 1; $i<=7; $i++) {
	
	
	if ($i == 1) {
		echo "$x[1], $x[2], $x[3], $x[4], $x[5], $x[6],</br>";}
	if ($i == 2) {
		echo "$x[0], $x[2], $x[3], $x[4], $x[5], $x[6],</br>";}
	if ($i == 3) {
		echo "$x[0], $x[1], $x[3], $x[4], $x[5], $x[6],</br>";}
	if ($i == 4) {
		echo "$x[0], $x[1], $x[2], $x[4], $x[5], $x[6],</br>";}
	if ($i == 5) {
		echo "$x[0], $x[1], $x[2], $x[3], $x[5], $x[6],</br>";}
	if ($i == 6) {
		echo "$x[0], $x[1], $x[2], $x[3], $x[4], $x[6],</br>";}
	if ($i == 7) {
		echo "$x[0], $x[1], $x[2], $x[3], $x[4], $x[5],</br>";}
}
?>