<?php
$contador=0;
$suma=0;
$nombrefichero="mediadenumeros.txt";
$fp=fopen($nombrefichero, "r") or die ("No existe");

while (! feof($fp)) {
	$filaleida=fgets($fp,1024); //leemos el fichero
	$valorleido=strtok($filaleida," \n"); //lee el caracter hasta que haya un blanco o un intro.
	while ($valorleido !==FALSE) { //mientras el valor sea verdadero( osea que haya un caracter o numero.
		$numero=(int)$valorleido; // el numnero se pasa a entero.
		$suma=$suma+$numero;
		$contador++;
		$valorleido=strtok(" \n"); //pasa al siguente numero
	}
}

$promedio=$suma/$contador;

echo "El promedio es $promedio<br />";

?>