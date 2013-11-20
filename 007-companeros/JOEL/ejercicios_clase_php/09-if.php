<?php

// CONDICIONALES EN PHP

// los condicionales se usan para comprobar una condición determinada
// y según sea el resultado de esa evaluación se decide hacer una
// acción o otra.

// el formato es el siguiente

//      if (condicion_a_evaluar){
//          acciones a ejecutar si se cumple la condición  (es verdad o true)
//      }
//      else {
//          acciones a ejecutar si no se cumple la condición (es falsa)
//      }
//
// la opción del else es opcional, es decir, no es obligatorio que aparezca
//
// si sólo se va a ejecutar una instrucción las {} se pueden quitar, pero si
// si se van a ejecutar más de una son obligatorio ponerlas
//
// cuando la instrucción que se va a ejecutar en un else es otro if, existe
// una forma abreviada para expresarlo "elseif" y la instrucción quedaría
// como sigue
//
//      if (condicion_a_evaluar){
//          acciones a ejecutar si se cumple la condición  (es verdad o true)
//      }
//      elseif (otra_condicion_a_evaluar) {
//              acciones a ejecutar si se cumple la otra condición
//          }
//          else {
//              acciones a ejecutar si no se cumple la otra condición
//          }
//
// las condiciones que se evaluan pueden tener los distintos operadores
// de comparación siguientes
//
//      $oper1 comparador $oper2
//
// donde el comparador puede ser
//
//        >     para mayor que
//        <     para menor que
//        >=    para mayor o igual que
//        <=    para menor o igual que
//        ==    para igual que (el mismo valor aunque no el mismo tipo)
//        ===   para igual que (el mismo valor y el mismo tipo de datos)
//        <>    para distinto que
//        !=    para distinto que
//        !==   inverso a ===

// a veces hay que preguntar por mas de una condición, para
// concatenar las condiciones se utilizan los operadores lógicos
//
// los operadores lógicos son
//
//        A AND B ó A && B ( Y lógico )
//                          es verdad cuando A Y B SON VERDAD Y FALSO CUANDO UNA
//                          DE LAS DOS LO ES
//
//        A OR B ó A || B ( O lógico )
//                          es verdad cuando A ó B SON VERDAD Y FALSO CUANDO LAS
//                          DOS SEAN FALSAS
//
//        A XOR B         ( XOR lógico )
//                          es verdad cuando A ó B SON VERDAD pero no al mismo tiempo
//                          y es falsa cuando las dos son falsas o las dos verdaderas
//
// ejemplos

$x1 = 13;
$x2 = 10;

if ( $x1 > $x2){

	// esto es lo que se ejecuta si se cumple la condicion

	echo $x1;
}
else {

	// esto es lo que se ejecuta si no se cumple la condicion

	echo $x2;
}

$x1 = 6;
$palabra = '6AAA';

// en PHP hay que tener en cuenta que hay conversión de tipos implicita
// por eso el '6' que es un string se convierte a entero y es igual al 6

if ( $x1 == $palabra){
	echo "<br/>*********Los dos valores son iguales *******";
}

// con la igualdad de tipos === a parte de la igualdad del valor se pide
// la igualdad de los tipos de datos

if ( $x1 === $palabra){
	echo "<br/>Los dos valores son iguales";
}
else {
	echo "<br/>Los tipos de datos de las variables no son iguales";
}

// ejemplos del uso de operadores lógicos
// y del elseif

$x1 = 1;
$x2 = 23;

if ( ($x1 > 0) and ($x2 > 0) ) {
	echo "la dos variables son positivas";
}
elseif ( ($x1 < 0) and ($x2 < 0)) {
	echo "las dos variables son negativas";
}
elseif ( ($x1 == 0) and ($x2 == 0)) {
	echo "las dos variables son 0";
}
else {
	echo "las dos variables tienen signo distinto";
}

// ejemplo del uso de negacion

$encontre = FALSE;  // variable del tipo booleano

if  (! $encontre) {
	echo "<br/>se cumple la condicion<br />";
}

// hay que tener cuidado porque expresiones como
// las de abajo se permiten en PHP, en estos
// casos siempre hay que tener en cuenta que:
//
//  - el valor 0 es falso y todo valor distinto de 0 es positivo
//  - el string "" es falso y cualquier string con caracteres es positivo a
//    excepción del "0" que se evalua como 0.
//  - un array vacio es falso y un array con elementos es positivo

$x3 = 10;

if ( $x3 ){  // es lo mismo haber hecho ( $x3 != 0)
	echo "pase por aqui <br />";
}

$palabra = "0";

if ( $palabra ){  // es lo mismo haber hecho
	echo "pase por aqui del segundo if<br />";
}

?>








