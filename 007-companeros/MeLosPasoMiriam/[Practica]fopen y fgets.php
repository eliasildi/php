<?php

$cant=0;
$suma=0;
$fichero="";
$fp=fopen($fichero, "r") or die ("No existe");

while (!feof($fp)) {
	$numero=(int)fgets($fp,1024);
	$suma=$suma+$numero;
	$cant++;
}

$prom=$suma/$cant;

echo "El promedio es $prom </br>";


?>