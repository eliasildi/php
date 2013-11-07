<?php

echo "Generando los datos del array...<br /><br />";
$nros_a_generar = 16;
$numeros = NULL;   // el array donde se almacena los números

echo "Los n&uacute;meros del array...<br />";

for ($i = 0; $i < $nros_a_generar; $i++ ) {
	$numeros[$i] = mt_rand(1,100);
	echo $numeros[$i]. " ";
}

echo "<br/><br />";

echo "Clasificando los impares a la izquierda y los pares a la derecha...<br /><br />";

// en este caso no usaremos el array auxiliar sino que lo haremos en el mismo array

// recordar que sólo se deben poner los pares a un lado y  los impares al otro,
// no se pide preservar el orden de los números del array.

$i = 0;
$j = $nros_a_generar - 1;

while (  $i < $j ) {
	while ( ($i < $nros_a_generar) and  ( ($numeros[$i] % 2) != 0) ){  // es impar
		$i++;
	}
	while ( ($j >= 0) and  ( ($numeros[$j] % 2) == 0) ){  // es par
		$j--;
	}
	if ( $i < $j ) {
		$aux = $numeros[$i];
		$numeros[$i] = $numeros[$j];
		$numeros[$j] = $aux;
		$i++;
		$j--;
	}

}

// escribimos el array clasificado

echo "Los n&uacute;meros del array despues de la clasificaci&oacute;n...<br />";

for ($i=0; $i < $nros_a_generar; $i++) {
	echo $numeros[$i]." ";
}

?>