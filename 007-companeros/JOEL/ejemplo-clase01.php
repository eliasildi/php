<?php

$n1=4500;
$n2=4500;
$n3=4500;

if ($n1 > $n2){
		if ($n1 > $n3){
			echo "Mayor es $n1<br />";}
		else {
			echo "Mayor es $n3<br />";}
}
		else {
			if ($n2 > $n3) {
			echo "Mayor es $n2<br />";}
			

	else {
		echo"Mayor es $n3<br />";}
	



//2º ejer
//Manera decreciente:



$n1=45;
$n2=450;
$n3=450;

if ($n1>$n2){
		if ($n1 > $n3){
			echo "$n1<br />";}
		if ($n2 > $n3) {
			echo "$n2 $n3<br />";
			}	
	
		else {
				echo "$n3 $n2<br />";
				}
}
		else {
				echo "$n3 $n1 $n2<br />";
	
				}
		}
		
//Te muestra todos los numeros menores k mil
$numero=1;
while ($numero<1000){
	$numero=$numero+1;
	echo "$numero <br />";
}

//mil numeros impares
$contador=1;
$numero=1;
while ($numero<1000){
	$numero=$numero+2;
	$contador=$contador+1;
	echo "$numero <br />";
}

//cantidad de numeros a generar
$cantnumgen=1000;
$numero=1;

	while ($numero<(2+$cantnumgen-1)){
		echo "$numero <br />";
		$numero=$numero+2;
	}

	
//calcular si es par o impar
$numero=23;
	if (($numero%2)==1){
		echo "$numero es impar <br />";
	}
		else {
			echo "$numero es par <br />";
		}
	
$valor=1;
$suma=0;
while ($valor<=3){
	$valor=$valor+1;
	$suma=$suma+$valor;
}
echo "La suma da $suma <br />";

?>

