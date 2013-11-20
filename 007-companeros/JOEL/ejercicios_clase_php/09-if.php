<?php

// CONDICIONALES EN PHP

// los condicionales se usan para comprobar una condici�n determinada
// y seg�n sea el resultado de esa evaluaci�n se decide hacer una
// acci�n o otra.

// el formato es el siguiente

//      if (condicion_a_evaluar){
//          acciones a ejecutar si se cumple la condici�n  (es verdad o true)
//      }
//      else {
//          acciones a ejecutar si no se cumple la condici�n (es falsa)
//      }
//
// la opci�n del else es opcional, es decir, no es obligatorio que aparezca
//
// si s�lo se va a ejecutar una instrucci�n las {} se pueden quitar, pero si
// si se van a ejecutar m�s de una son obligatorio ponerlas
//
// cuando la instrucci�n que se va a ejecutar en un else es otro if, existe
// una forma abreviada para expresarlo "elseif" y la instrucci�n quedar�a
// como sigue
//
//      if (condicion_a_evaluar){
//          acciones a ejecutar si se cumple la condici�n  (es verdad o true)
//      }
//      elseif (otra_condicion_a_evaluar) {
//              acciones a ejecutar si se cumple la otra condici�n
//          }
//          else {
//              acciones a ejecutar si no se cumple la otra condici�n
//          }
//
// las condiciones que se evaluan pueden tener los distintos operadores
// de comparaci�n siguientes
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

// a veces hay que preguntar por mas de una condici�n, para
// concatenar las condiciones se utilizan los operadores l�gicos
//
// los operadores l�gicos son
//
//        A AND B � A && B ( Y l�gico )
//                          es verdad cuando A Y B SON VERDAD Y FALSO CUANDO UNA
//                          DE LAS DOS LO ES
//
//        A OR B � A || B ( O l�gico )
//                          es verdad cuando A � B SON VERDAD Y FALSO CUANDO LAS
//                          DOS SEAN FALSAS
//
//        A XOR B         ( XOR l�gico )
//                          es verdad cuando A � B SON VERDAD pero no al mismo tiempo
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

// en PHP hay que tener en cuenta que hay conversi�n de tipos implicita
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

// ejemplos del uso de operadores l�gicos
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
//    excepci�n del "0" que se evalua como 0.
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








