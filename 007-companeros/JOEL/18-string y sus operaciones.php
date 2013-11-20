<?php

// string en php
//
// Un string es una cadena de caracteres que puede ser de tama�o
// ilimitado.
//
// Una cadena se puede definir entre comillas simples ' *** ' o
// se puede definir entre comillas dobles " *** ".
// La diferencia que existe entre ambas maneras de definirlas es
// que con las comillas simples, las secuencias de escape y
// las variables no son interpretadas.
//
$string1 = 'Hola';
$string2 = "Como est�s";
echo "Ejemplo de uso de cadenas<br />";
echo 'Con comillas simples no se interpreta $string1<br />';
echo "Con comillas dobles el valor de la variable $string2<br />";
//
// SECUENCIAS DE ESCAPE
//
// El caracter de escape '\' permite que se puedan mostrar caracte-
// res que son suceptibles de interpretaci�n como son: $, ", ', \ �
// permite realizar acciones de escritura como: tabulador, intro,
// retorno de carro.
//
// las secuencias de escape m�s comunes son:
//
//   \f  --> Salto de p�gina
//   \n  --> Salto de l�nea
//   \t  --> Tabulador
//   \r  --> Retorno de carro
//   \'  --> Comilla simple
//   \"  --> Comilla doble
//   \\  --> Barra invertida
//   \$  --> D�lar
//
echo "<br />Ejemplo de uso las secuencias de escape<br />";
echo "Esto en una l�nea\nEsto en otra<br />";
echo "Esto en una l�nea\tEsto despu�s del tabulador<br />";
echo "Esto en una l�nea\b*Esto se come la a de l�nea<br />";
//
// como han podido apreciar, en el navegador no se aprecia
// la interpretaci�n de las secuencias de escape, pero si
// revisamos el c�digo fuente que le llega al navegador
// ver�n los resultados previsibles.
//
// OPERADOR CONCANTENACI�N " . "
//
// En php existe un operador de concatenaci�n de string que es el
// ( . ). La forma de usarlo es la que se muestra a continuaci�n.

echo "<br />Ejemplo de la concatenaci�n de string<br />";
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

// Existen otros dos m�todos para la creaci�n de strings
//
// 		* La sintaxis heredoc
//		* La sint�xis nowdoc
//
// Para utilizar ambas sint�xis se debe utilizar el s�mbolo de
// documento incrustado ( "<<<").
// Y luego del documento incrustado se debe poner una palabra que se
// utilizar� como identificador del cierre del escrito
// Este identificador de cierre debe estar escrito s�lo en una l�nea
// y empezar en la columna 1.
//
// Para ambos casos el string se asigna a una variable de la siguiente manera
//
// 		$variable = <<<palabracierre
//
//					todo lo que se escriba aqu� estar� dentro del escrito
//
// palabracierre;
//
// El m�todo anterior corresponde a la sintaxis heredoc, la nowdoc es igual a la anterior
// salvo que la palabra de cierre al lado del s�mbolo de documento incrustado est� encerrada
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
//Esta es una cadena que se terminar� al encontrarse <br /> el identificador
//que hayamos elegido, en este caso, <br /> <b>
//xxx</b> en la �ltima l�nea. $nombre
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
// la funci�n chr() retorna el caracter correspondiente al
// valor ascii pasado como par�metro.
// Su prototipo es el que se muestra a continuaci�n
//
// 	 $variable	chr( valor ascii )
//
echo "<br />Ejemplo de uso de la funcion chr()<br />";
echo chr(65).chr(66).chr(67).chr(68)."<br />";

// FUNCION ORD()
//
// la funci�n ord() retorna el valor entero (ascii )correspondiente al
// caracter pasado como par�metro.
// Su prototipo es el que se muestra a continuaci�n
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
// la funci�n strlen() devuelve un n�mero entero que  representa
// la longitud del string.
?>
<?php
echo "<br />Ejemplo de uso de la funcion strlen()<br />";
echo strlen("Hello world!")."<br />";
?>

// FUNCION STRPOS()

// La funci�n strpos() se utiliza para buscar un car�cter especificado
// o texto dentro de una cadena.
// Si se encuentra una coincidencia, devuelve la posici�n del car�cter
// de la primera ocurrencia. Si no se encuentra coincidencia, devolver� FALSE.
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