<?php

// BUCLES EN PHP

//
// DO WHILE EN PHP
//
// El do while en PHP tiene el siguiente formato
//
//     do {
//           sentencias a ejecutar mientras se cumpla la condición ( sea verdad )
//           sentencia que modifique la variable involucrada en la condición
//           en el do while estas instrucciones se ejecutan al menos una vez
//
//      } while (condicion);
//
// Lo que quiere decir que las instrucciones dentro del do while se ejecutarán siempre
// que se cumpla la condición del mismo.
//
// SIEMPRE SE EJECUTA UNA VEZ ANTES DE PREGUNTAR LA CONDICION, SI NO SE CUMPLE
// YA NO SE EJECUTA MAS PORQUE SE SALE DEL CICLO
//
// Ejemplo
//
// Tenemos un array de 6 elementos y queremos imprimir sus valores en pantalla

$x[0] = 1;
$x[1] = 2;
$x[2] = 3;
$x[3] = 4;
$x[4] = 5;
$x[5] = 6;

// sin DO while
echo "Los valores que están en el array son: ";
echo "$x[0] ";
echo "$x[1] ";
echo "$x[2] ";
echo "$x[3] ";
echo "$x[4] ";
echo "$x[5]<br /><br />";

// usando un DO while

echo "Los valores que están en el array usando do while: ";
$i = 0;
do {
	echo "$x[$i] ";
	$i = $i + 1;
} while ( $i <= 5)

// vale lo mismo que se explico para el while en lo referente a
// las condiciones con varias opciones y los break
	?>