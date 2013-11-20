<?php

// string en php
//
// Un string es una cadena de caracteres que puede ser de tamaño
// ilimitado.
//
// Una cadena se puede definir entre comillas simples ' *** ' o
// se puede definir entre comillas dobles " *** ".
// La diferencia que existe entre ambas maneras de definirlas es
// que con las comillas simples, las secuencias de escape y
// las variables no son interpretadas.
//
$string1 = 'Hola';
$string2 = "Como estás";
echo "Ejemplo de uso de cadenas<br />";
echo 'Con comillas simples no se interpreta $string1<br />';
echo "Con comillas dobles el valor de la variable $string2<br />";
//
// SECUENCIAS DE ESCAPE
//
// El caracter de escape '\' permite que se puedan mostrar caracte-
// res que son suceptibles de interpretación como son: $, ", ', \ ó
// permite realizar acciones de escritura como: tabulador, intro,
// retorno de carro.
//
// las secuencias de escape más comunes son:
//
//   \f  --> Salto de página
//   \n  --> Salto de línea
//   \t  --> Tabulador
//   \r  --> Retorno de carro
//   \'  --> Comilla simple
//   \"  --> Comilla doble
//   \\  --> Barra invertida
//   \$  --> Dólar
//
echo "<br />Ejemplo de uso las secuencias de escape<br />";
echo "Esto en una línea\nEsto en otra<br />";
echo "Esto en una línea\tEsto después del tabulador<br />";
echo "Esto en una línea\b*Esto se come la a de línea<br />";
//
// como han podido apreciar, en el navegador no se aprecia
// la interpretación de las secuencias de escape, pero si
// revisamos el código fuente que le llega al navegador
// verán los resultados previsibles.
//
// OPERADOR CONCANTENACIÓN " . "
//
// En php existe un operador de concatenación de string que es el
// ( . ). La forma de usarlo es la que se muestra a continuación.

echo "<br />Ejemplo de la concatenación de string<br />";
$x1 = "Bienvenidos";
$x2 = "al curso";
echo $x1." ".$x2."<br />";

// Un string se puede ver como un array de caracteres,
// es decir que puedo modificarlo igual que un array
//
echo "<br />Ejemplo de string como array<br />";
$palabra = "HOLA";
$palabra[1]= '@';
echo "Lo que hay en \$palabra es : $palabra<br />";

// Existen otros dos métodos para la creación de strings
//
// 		* La sintaxis heredoc
//		* La sintáxis nowdoc
//
// Para utilizar ambas sintáxis se debe utilizar el símbolo de
// documento incrustado ( "<<<").
// Y luego del documento incrustado se debe poner una palabra que se
// utilizará como identificador del cierre del escrito
// Este identificador de cierre debe estar escrito sólo en una línea
// y empezar en la columna 1.
//
// Para ambos casos el string se asigna a una variable de la siguiente manera
//
// 		$variable = <<<palabracierre
//
//					todo lo que se escriba aquí estará dentro del escrito
//
// palabracierre;
//
// El método anterior corresponde a la sintaxis heredoc, la nowdoc es igual a la anterior
// salvo que la palabra de cierre al lado del símbolo de documento incrustado está encerrada
// entre comillas simples.
//
// Al igual que con los string con comillas dobles y simple, con la sintaxis heredoc
// se interpretan todos los valores de las variables y las secuencias de caracteres,
// mientras que con la sentencia nowdoc no se hace.
//
// Veamos el siguiente ejemplo
//

//echo "<br /><br />Ejemplo de string con sintaxis heredoc<br /><br />";
//$nombre = "Alberto";
//
//echo <<<xxx
//Esta es una cadena que se terminará al encontrarse <br /> el identificador
//que hayamos elegido, en este caso, <br /> <b>
//xxx</b> en la última línea. $nombre
//xxx;


//
//
// FUNCIONES PARA MANIPULAR LOS STRING Y CARACTERES
//
// referencia oficial
//
//  http://www.php.net/manual/es/book.strings.php
//
//  http://www.w3schools.com/php/php_ref_string.asp

// FUNCION CHR()
//
// la función chr() retorna el caracter correspondiente al
// valor ascii pasado como parámetro.
// Su prototipo es el que se muestra a continuación
//
// 	 $variable	chr( valor ascii )
//
echo "<br />Ejemplo de uso de la funcion chr()<br />";
echo chr(65).chr(66).chr(67).chr(68)."<br />";

// FUNCION ORD()
//
// la función ord() retorna el valor entero (ascii )correspondiente al
// caracter pasado como parámetro.
// Su prototipo es el que se muestra a continuación
//
// 	 $variable	ord( caracter )
//
echo "<br />Ejemplo de uso de la funcion ord()<br />";
echo "el valor ascii de 'a' es ".ord('a')."<br />";
echo "el valor ascii de 'b' es ".ord('b')."<br />";
echo "el valor ascii de 'c' es ".ord('c')."<br />";
//
// FUNCION STRLEN()
//
// la función strlen() devuelve un número entero que  representa
// la longitud del string.
?>
<?php
echo "<br />Ejemplo de uso de la funcion strlen()<br />";
echo strlen("Hello world!")."<br />";
?>

// FUNCION STRPOS()

// La función strpos() se utiliza para buscar un carácter especificado
// o texto dentro de una cadena.
// Si se encuentra una coincidencia, devuelve la posición del carácter
// de la primera ocurrencia. Si no se encuentra coincidencia, devolverá FALSE.
// En el ejemplo siguiente busca el texto "mundo" en la cadena "Hello world!":

<?php
echo "<br />Ejemplo de uso de la funcion strpos()<br />";
echo strpos("Hello world!","world");
?>

// ver el resto de funciones para string en las hojas dadas en clase
//
// o
//
// http://www.w3schools.com/php/php_ref_string.asp