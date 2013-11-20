<?php

// BUCLES EN PHP

// Una situación habitual en la lógica de los programas es tener que ejecutar
// repetidamente un conjunto de instrucciones hasta que se deje de cumplir una
// determinada condición. A este tipo de instrucciones es lo que se conoce con
// el nombre de bucles.
//
// Los bucles que existen en PHP son los siguientes
//
// - while
// - for
// - do...while
//
// WHILE EN PHP
//
// El while en PHP tiene el siguiente formato
//
//      while (condicion_a_evaluar) {
//
//           sentencias a ejecutar mientras se cumpla la condición ( sea verdad )
//           sentencia que modifique la variable involucrada en la condición
//
//      }
// Lo que quiere decir que las instrucciones dentro del while se ejecutarán siempre
// que se cumpla la condición del mismo.
//
// SIEMPRE SE PREGUNTA PRIMERO ANTES DE EJECUTAR, SI NO SE CUMPLE LA CONDICIÓN
// NO SE EJECUTA NADA
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

// sin while
echo "Los valores que están en el array son: ";
echo "$x[0] ";
echo "$x[1] ";
echo "$x[2] ";
echo "$x[3] ";
echo "$x[4] ";
echo "$x[5]<br /><br />";

// usando un while

echo "Los valores que están en el array usando while: ";
$i = 0;
while ( $i <= 5){
	echo "$x[$i] ";
	$i = $i + 1;
}

// En los bucles pueden existir ocaciones, en las que queremos que se cumplan
// varias condiciones para poder ejecutar un conjunto de instrucciones.
//
// En esos casos esas condiciones deberán estar unidas por operadores AND ó
// OR ó NOT.
//
// Podemos tener dos maneras de salir de un bucle bien por el control de
// una variable booleana o mediante la sentencia break.
//
// ejemplo usando una variable booleana
//
// $encontre = FALSE;
// $i = 1; $n = 100
// while ((! $encontre) AND ($i < $n)) {
//      if ( condicion ) {
//             ...
//          $encontre = TRUE; // Hemos encontrado lo que buscamos y queremos salir
//      }
//      $i = $i + 1;  // incrementamos el contador para trabajar la próxima iteracion
// }
// if ( $i == $n ) { //  no encontro nada, hubiera sido igual preguntar ( ! $encontre )
//
//      acciones a realizar si no encontre lo buscado
// }
//
// ejemplo usando la instrucción brake
//
// $i = 1; $n = 100
// while ($i < $n) {
//      if ( condicion ) {
//          ...
//          break; // Hemos encontrado lo que buscamos y queremos salir
//      }
//      $i = $i + 1;  // incrementamos el contador para trabajar la próxima iteracion
// }
// if ( $i == $n ) { //  no encontro nada
//
//    acciones a realizar si no encontre lo buscado
//
// }
//
// la instrucción break nos permite salir de los bucles anidados
//
// while ( cond1 ) {
//     ...
//     while ( cond2 ) {
//         ...
//         break(2);  // break(2) sale de los dos bucles y se ejecutan las
//                    // instrucciones marcadas con (2)
//                    // break(1) sale del bucle interior y se ejecutan las
//                    // instrucciones marcadas con (1)
//     }
//     (1)...
// }
// (2) ...
//

	$i = 10;

	while ($i > 0)
	{
		print "El valor de i = $i <br />";
		$i = $i - 1;
		if ($i == 5)
			break;
	}
	print "Fin de ejecuci&oacute;n <br />";


?>