<?php 

// Creaci�n de COOKIES en PHP

// PHP suministra la funci�n setcookie() para asignar cookies, y la misma
// funci�n sirve para eliminar un archivo cookie.

// La sintaxis es la siguiente

// setcookie (nombre [,valor] [,caducidad] [, acceso] [,dominio] [,seguro])

// donde:

// nombre = campo string con el nombre de la cookie

// valor = Campo string con el contenido de la cookie.

// caducidad = (opcional) Campo entero con el tiempo de validez del archivo cookie.
//              Si no se pone se asume la duraci�n de la sesi�n vigente. El tiempo
//              se codifica como lo hace la funci�n time()

// dominio = (opcional) Campo string con el rango de dominios en los que el
//            archivo cookie tiene validez. Si no se informa se asume la ruta de
//            acceso establecida en el servidor.

// acceso = (opcional) Campo cadena con el directorio a partir del cual el archivo
//           cookie tiene validez. Si no se informa se asume la ruta indicada en el
//           servidor.

// seguro = (opcional) Campo entero que indica si el archivo cookie se transmite
//           por un canal seguro.

// Para borrar una COOKIE se debe utilizar la funci�n poniendo �nicamente
// el campo nombre

// Si se quiere poner un campo de los opcionales se debe poner la cadena vac�a ""
// o 0 (en el caso de la caducidad) en los par�metros anteriores.

// La cookie puede almacenar un valor �nico o elementos de una matriz asociativa.

// por ejemplo:

// setcookie("prueba", "Hola"); �
// setcookie("prueba["accesos"]", "Hola");

// Las llamadas a la funci�n setcookie() se ejecutan en modo inverso a como aparecen
// en el script. Si se quiere borrar el dato cookie y despu�s insertar un nuevo
// valor habr� que codificar primero la inserci�n del valor y luego el borrado.
// (siempre y cuando una operaci�n sea de asignaci�n y otra de borrado)

// setcookie("prueba", "Hola otra vez");
// setcookie("prueba");

// Consulta de COOKIES en PHP -- la variable $_COOKIE

// PHP suministra una variable superglobal para poder consultar los datos de las
// cookies, la variable $_COOKIE.

// El acceso a los valores de las cookies tiene la siguiente sint�xis

// $_COOKIE("nombre_cookie");

// � en el caso de una matriz

// $_COOKIE(["nombre_cookie"]["nombre_elemento"]);

//  Ejemplo del uso de cookie

//ini_set('display_errors', 1);
//error_reporting(E_ALL & ~E_NOTICE);

$fechahora = "&eacute;ste es el primer acceso";
$contador = 1;

date_default_timezone_set('Atlantic/Canary');

// si la variable est� asignada quiere decir que existe la cookie

if (isset($_COOKIE['fechahora'])) {

	// fecha hora del �ltimo acceso

	$fechahora = $_COOKIE['fechahora'];
	$contador = $_COOKIE['contador'];
}

// actualizaci�n de la cookie. Esta operaci�n se debe hacer antes de
// mandar cualquier cabecera a la salida

setcookie("fechahora",date('d/m/Y h:i:s')); // actualiza la cookie
setcookie("contador",$contador + 1); // actualiza la cookie
?>

<HTML>
<HEAD>
<TITLE>Uso de cookies en PHP</TITLE>
</HEAD>
<BODY>
	<H3>
		Fecha y hora actual:
		<?php
                echo date('d/m/Y h:i:s') ?>
	</H3>
	<BR />
	<B>Contenido de la superglobal $_COOKIE</B>
	<BR />
	<br />
	<?php 
	echo "Elemento fechahora: " . $_COOKIE['fechahora'] . "<BR/>" ;
	echo "Elemento contador: " . $_COOKIE['contador'] . "<BR/>" ;
	echo "<BR>La &uacute;ltima vez que accedi&oacute; a esta p&aacute;gina fue : $fechahora <BR/>";
	echo "<BR>Cantidad de accesos a esta p&aacute;gina  : $contador <BR/>";
	?>
</BODY>
</HTML>
