<?php

// mostrar por pantalla los numeros impares menores que 100

$i = 1;     // contar los números generados
$n = 100;   // cuantos impares se deben generar
$impar = 1; // el numero impar generado
while ( $i <= $n){
	echo "$impar <br />";
	$i = $i + 1;
	$impar = $impar + 2;
}

?>