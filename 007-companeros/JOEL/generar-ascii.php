<?php


//generar una lista con los caracteres acsii y su valor correspondiente.

$ini=32;

while ($ini<=255) {
	$valorfinal=chr($ini);
	echo "valor del numero $ini es $valorfinal<br />";
	$ini++;
}



//generar una lista con los caracteres acsii y su valor correspondiente.cada 10 caracteres salto de linea.

$ini=32;
$contar=1;
while ($ini<=255) {
	$valorfinal=chr($ini);
	echo "$valorfinal";
	$ini++;
	
	if ($contar%10==0) { //multiplos de 10 se divide y si da 0 pones salto de linea.
		echo "<br />";
	}
	$contar++;
}


//Hacer el anterior dentro de una tabla (TAREA).


?>