<?php

// sacar la media de numeros vertical

$cant=0;
$suma=0;
$nombrefichero="numerosvertical.txt";
$fp=fopen($nombrefichero, "r") or die ("no xiste");
	while (!feof($fp)) {
		$numero= fgets($fp);
		$suma=$suma+$numero;
		$cant++;
	}

$prom=$suma/$cant;
echo "el promedio es $prom<br/>";

// sacar la media de numeros horizontal
$cant=0;
$suma=0;
$nombrefichero="numeroshorizontal.txt";
$fp=fopen($nombrefichero, "r") or die ("no xiste");
while (!feof($fp)) {
	$filaleida=fgets($fp,1024);
	$valorleido=strtok($filaleida," \n");
	while ($valorleido!==FALSE) {
		$numero=(INT)$valorleido;
		$cant=$suma+$numero;
		$cant++;
		$valorleido=strtok(" \n");
	}
}

$prom=$suma/$cant;
echo "el promedio es $prom<br/>";


?>