<?php

$fichero=fopen("frase1.txt", "r") or die ("No existe el archivo<br />");
$i=0;
$datos=array();
$ficherosalida=fopen("frase2.txt", "w") or die ("No existe el archivo<br />");
//fgets lee hasta que haya un intro
//fgetc lee hasta el final del fichero e incrementa el final del fichero por eso hacemos $i--;
while (! feof ($fichero)) { //mientras no se final de fichero
		$caracter=fgetc($fichero);
		$datos[$i]=$caracter;
		$i++;
}

fclose($fichero);

$i--;
while ($i >= 0) {
	
	echo $datos[$i];
	$i--;
}
