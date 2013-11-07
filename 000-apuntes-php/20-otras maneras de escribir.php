<?php 

// otras maneras de escribir en PHP

// aparte de echo existen otras instrucciones para
// mostrar datos a trav�s de php
//
// los comandos que permiten hacerlo es
//      - print
//      - printf
//      - sprintf
//
// COMANDO PRINT
//
// print es similar a echo y se usa de igual forma
//
//
$a = 15;
print "El valor de a es = $a<br />";

//
// COMANDO PRINTF
//
// print permite darle un formato a las variables que
// se quieran escribir
//
// la forma de usar printf es la que se muestra a continuacion
//
// printf(string_con_formato [, los valores a escribir])
//
// donde string_con_formato es un string que contiene el
// mensaje de lo que se quiere escribir en la que se interca
// lan una serie de marcas para indicar donde se quieren
// escribir los valores y de que tipo se debe utilizar.
//
// veamos un ejemplo
//
$n = 10;
$f = 12.273;
$s = "euro";
           // %d entero         %f flotante
printf("Esto %d es entero, Esto %f es un decimal<br />", $n,$f);
printf("Lo que ahora se muestra es un string %s<br />", $s);
printf("podemos precisar el n�mero de d�gitos %.2f<br />", $f);

// los distintos especificadores de formato que se pueden
// usar son

/*
%b Argumento entero; presentado como n�mero binario
%c Argumento entero; presentado como caracter (el ascii correspondiente)
%d Argumento entero; presentado como un entero
%f Argumento decimal; presentado como decimal
%o Argumento entero; presentado como n�mero octal
%s Argumento string; presentado como string
%u Argumento entero; presentado como un entero sin signo
%x Argumento entero; presentado como n�mero hexadecimal en min�sculas
%X Argumento entero; presentado como n�mero hexadecimal en may�sculas
*/

// COMANDO SPRINTF
//
// el comando sprintf es identico a printf con la salvedad que
// genera un string con el n�mero de caracteres escritos
//
$palabra = sprintf("probando sprintf %.3f", $f);
echo "<br/>$palabra<br />";
?>