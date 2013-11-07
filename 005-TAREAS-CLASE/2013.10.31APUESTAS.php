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
echo "con un for y 7 if</br>";
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


echo "otra manera </br>";
$x=array(1,23,28,32,37,39,48);
for ($i = 1; $i<=7; $i++) {
	if ($i != 0) echo $x[0]."";
	if ($i != 1) echo $x[1]."";
	if ($i != 2) echo $x[2]."";
	if ($i != 3) echo $x[3]."";
	if ($i != 4) echo $x[4]."";
	if ($i != 5) echo $x[5]."";
	if ($i != 6) echo $x[6]."";
	echo "</br>";
	
	
}









?>