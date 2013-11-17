<?php 

// C�mo usar las SESIONES en PHP

// A primera vista el uso de las cookies representa un medio id�neo para
// mantener valores entre una p�gina y otra de la aplicaci�n.
// El ocultamiento de datos en los formularios mediantes los controles
// hidden (oculto) tambi�n es otro medio empleado para el mismo fin. Sin
// embargo, estos mecanismos, a pesar de ser ampliamente utilizados en las
// aplicaciones web, no llegan a satisfacer plenamente los requerimientos
// de dise�o de muchas aplicaciones web que requieran disponibilidad,
// seguridad y fiabilidad. Entre ambos enfoques las cookies ser�an el ideal,
// pero siempre existe la limitaci�n de que el cliente configure su navegador
// para que rechace el uso de las cookies.

// PHP permite la gesti�n de las variables de sesi�n. Una sesi�n posee un
// identificador (cadena de caracteres) que se asocia al usuario que accede
// al sitio web. Este identificador se conoce con el nombre de identificador
// de la sesi�n.

// Activaci�n del uso de una sesi�n en PHP

// PHP suministra variables de sesi�n que estar�n disponibles a lo largo de
// toda la sesi�n de un usuario o limitadas por un per�odo de tiempo
// sin actividad.

// Las variables de sesi�n nos permiten mantener el estado de la sesi�n de una
// aplicaci�n a nivel de usuario. Es decir, en el servidor se mantendran las
// variables de sesi�n identific�ndolas por sesi�n/usuario y se almacenan
// como archivos temporales dentro del servidor.

// Una variable de sesi�n puede almacenar todo tipo de valores: enteros, cadenas
// matrices y objetos.

// De manera predeterminada PHP tiene deshabilitada la opci�n de mantenimiento
// de sesiones.

// Para activarlo, iremos al fichero php.ini y buscamos la siguiente directiva:

//          session.auto_start

// que debe estar asignada con el valor 1, para poder gestionar sesiones en las
// p�ginas de PHP.

// Recuerden reinicializar el servidor apache.

// C�mo activar el uso de sesiones?

// Para activar el uso de sesiones se usa la funci�n:

//      session_start();

// La funci�n crea una sesi�n nueva y le genera un n�mero identificador o
// contin�a una sesi�n ya iniciada.

// El n�mero de identificaci�n lo podemos conocer utilizando la funci�n
// session_id(). La sint�xis de esta funci�n es la siguiente:

//      session_id([id]);

// El identificador id es opcional. Si lo omitimos, obtendremos como retorno
// de la funci�n el identificador de la sesi�n vigente. Si se utiliza el id,
// estaremos estableciendo a ese identificador como identificador de la sesi�n
// vigente (reemplazando al que estuviese vigente).

// Tambi�n es posible identificar a las sesiones con un nombre determinado.
// Para estos fines se usa la funci�n session_name([nombre]). La sint�six
// de la funci�n es la siguiente:

//      session_name([nombre]);
//
// El identificador nombre es opcional. Si lo omitimos, obtendremos como retorno
// de la funci�n el nombre de la sesi�n vigente. Si lo usamos, estaremos esta-
// bleciendo ese nombre como nombre de la sesi�n vigente (reemplazando al que
// estuviese vigente).

// Uso de variables de sesi�n

// PHP nos suministra una matriz asociativa superglobal denominada $_SESSION para
// contener los nombres de las variables y sus valores de una determinada sesi�n
// de usuario.

// $_SESSION["MiDato1"] = "datos a guardar";
// $_SESSION["MiDato2"] = "Mas datos a guardar";

// ejemplo de uso

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();

$fechahora = "&eacute;ste es el primer acceso";
$contador = 1;

if (isset($_SESSION['fechahora'])){

	// fecha hora del &uacute;ltimo acceso

	$fechahora = $_SESSION['fechahora'];
	$contador = $_SESSION['contador'];
}

// si la variable est� asignada quiere decir que
// existe la variable de sesi�n

// actualizaci�n de la variable de sesi�n
// esta operaci�n se debe hacer antes de
// mandar cualquier cabecera a la salida

date_default_timezone_set('Atlantic/Canary');

$_SESSION["fechahora"] = date('d/m/Y h:i:s'); // actualiza la variable
$contador++;

$_SESSION["contador"] = $contador; // actualiza la variable
?>
<HTML>
<HEAD>
<TITLE>Uso de sesiones en PHP (ejemplo c1002.php)</TITLE>
</HEAD>
<BODY>
	<H3>
		Fecha y hora actual:
		<?php echo date('d/m/Y h:i:s') ?>
	</H3>
	<BR />
	<B>Contenido de la superglobal $_SESSION</B>
	<BR />
	<?php 
	echo "Identificador de la sesi&oacute;n: " . session_id() . "<BR />";
	echo "Nombre de la sesi&oacute;n: " . session_name() . "<BR />";
	echo "Elemento fechahora: " . $_SESSION['fechahora'] . "<BR />" ;
	echo "Elemento contador: " . $_SESSION['contador'] . "<BR /><BR />" ;
	echo "<BR />La &uacute;ltima vez que accedi&oacute; a esta p&aacute;gina fue : $fechahora <BR />";
	echo "<BR />Cantidad de accesos a esta p&aacute;gina  : $contador <BR />";
	?>
</BODY>
</HTML>
