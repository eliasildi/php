<?php

echo "Generando los datos del array...<br /><br />";
$nros_a_generar = 15;
$numeros = NULL;   // el array donde se almacena los números

echo "Los n&uacute;meros del array...<br />";

for ($i = 0; $i < $nros_a_generar; $i++ ) {
	$numeros[$i] = mt_rand(1,100);
	echo $numeros[$i]. " ";
}

echo "<br/><br />";

echo "Clasificando los impares a la izquierda y los pares a la derecha...<br /><br />";

// en este caso usaremos un array auxiliar para la clasificación de pares e impares

// recordar que sólo se deben poner los pares a un lado y  los impares al otro,
// no se pide preservar el orden de los números del array.

$comimpares = 0;
$finalpares = $nros_a_generar - 1;
$numeros_clasificados = NULL;

for ($i=0; $i < $nros_a_generar; $i++) {
	if ( ($numeros[$i] % 2) == 0) {  // es par
		$numeros_clasificados[$finalpares--] = $numeros[$i];
	}
	else {
		$numeros_clasificados[$comimpares++] = $numeros[$i];
	}
}

// escribimos el array clasificado

echo "Los n&uacute;meros del array despues de la clasificaci&oacute;n...<br />";

for ($i=0; $i < $nros_a_generar; $i++) {
	echo $numeros_clasificados[$i]." ";
}

?>