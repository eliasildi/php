<?php

// CONSTANTES EN PHP
/*
Contrario a lo que ven�amos trabajando con las variables,
las constantes son zonas de memoria a las que tambi�n
se le asigna un nombre, pero que su valor no cambia 
durante la ejecuci�n del script y no pueden ser redifinidas.

Es decir que su valor se mantiene constante.

Los nombres de las constantes NO empiezan con el signo $
y aunque no es obligatorio se suelen poner nombres en
may�sculas.

Una vez que la constante se define su alcance es global
( es decir que vale para todo el c�digo a partir de donde
		se define ).

La sintaxis para declarar una constante es:

define ("NOMBRE_DE_LA_CONSTANTE", valor, [SENSIBLE_MAY_MIN]);

donde

"NOMBRE_DE_LA_CONSTANTE" : es el nombre que se le dar� a la constante
valor : es el valor que tomar� esa constante

SENSIBLE_MAY_MIN : es un valor booleano OPCIONAL que indica si queremos
que el nombre de la constante sea sensible a may/min
(valor TRUE) o s�lo como se ha definido (valor FALSE),
por defecto el valor es TRUE.

*/

define("PI", 3.1416, TRUE);

// recordamos que el �rea de un c�rculo es A = pi * r * r

$radio = 5;
$area = PI * $radio * $radio;
echo "el �rea del c�rculo es = $area<br /><br />";

define("E", "� (euros)" , FALSE);

echo "El importe de la compra es 25".E."<br />";

// pero la l�nea de abajo debe dar error;

echo "El importe de la compra es 25".e."<br />";

?>