<?php

// BUCLES EN PHP

// El segundo tipo de bucle que vamos a estudiar es el bucle for.
//
// El bucle for en PHP tiene el siguiente formato
//
// for ( valor inicial contador; condicion a cumplir; modificación contador) {
//
//      acciones a realizar en cada iteración del bucle
//
// }
//
// Cuando se ejecuta el for por primera vez se toma el valor inicial del contador
// esto sólo se realiza la primera vez. Luego se pregunta si se cumple la condición
// si la condición se cumple se ejecutan las acciones a realizar, por último se
// realiza la operación de modificación del contador, antes de volver a preguntar
// si se cumple la condición. Las acciones del for se ejecutan siempre y cuando
// se cumpla la condición.
//
// El problema de los for es que las tres partes que lo componen NO son
// obligatorias, pudiendo tener un for de esta manera
//
//	for (  ;  ;  ) {
//
//		acciones a ejecutar
//  }
//
// en este caso en las acciones a ejecutar tendrá que usarse un break
// para salir del bucle infinito.
//
// Ejemplo de escribir los números del 1 al 10 con while
//
echo "<br />números escritos mediante while<br /><br />";
$i = 1;
while ( $i <= 10) {
	echo "$i ";
	$i = $i + 1;
}
//
// Ejemplo de escribir los números del 1 al 10 con for
//
echo "<br /><br />números escritos mediante for<br /><br />";
for ($i = 1; $i <= 10; $i = $i + 1) {
	echo "$i ";
}
//
// En los bucles for pueden existir varias condiciones por las que queramos salir
// de el. En esos casos esas condiciones estarán unidas por operadores AND ó
// OR. Podemos tener dos maneras de salir de un bucle bien por el control de
// una variable booleana o mediante la sentencia break.
//
// ejemplo de for con varias condiciones usando una variable booleana
//
//  tener cuidado con los errores lógicos
//
// $n = 100;
// for ($encontre = FALSE, $i = 1; (! $encontre) AND ($i < $n); $i = $i + 1) {
//       if ( $i > 50 ) {
//       	  echo "<br />Encontre el valor buscado $i <br />";
//           $encontre = TRUE; // Hemos encontrado lo que buscamos y queremos salir
//       }
// }
// if ( $i == $n ) { //  no encontro nada, hubiera sido igual preguntar ( ! $encontre )
// 	echo "<br />No encontró nada<br />";
// }

// ejemplo usando la instrucción brake
//
// $n = 100
// for ( $i = 1; $i < $n; $i = $i+1) {
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
// for ( $i = 1; $i < $n; $i++ ) {
//     ...
//     for ( $j = 1; $j <= $n; $j++ ) {
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

?>
