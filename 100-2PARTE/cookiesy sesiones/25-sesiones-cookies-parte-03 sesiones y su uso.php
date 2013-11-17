<?php 

// Cómo usar las SESIONES en PHP

// A primera vista el uso de las cookies representa un medio idóneo para
// mantener valores entre una página y otra de la aplicación.
// El ocultamiento de datos en los formularios mediantes los controles
// hidden (oculto) también es otro medio empleado para el mismo fin. Sin
// embargo, estos mecanismos, a pesar de ser ampliamente utilizados en las
// aplicaciones web, no llegan a satisfacer plenamente los requerimientos
// de diseño de muchas aplicaciones web que requieran disponibilidad,
// seguridad y fiabilidad. Entre ambos enfoques las cookies serían el ideal,
// pero siempre existe la limitación de que el cliente configure su navegador
// para que rechace el uso de las cookies.

// PHP permite la gestión de las variables de sesión. Una sesión posee un
// identificador (cadena de caracteres) que se asocia al usuario que accede
// al sitio web. Este identificador se conoce con el nombre de identificador
// de la sesión.

// Activación del uso de una sesión en PHP

// PHP suministra variables de sesión que estarán disponibles a lo largo de
// toda la sesión de un usuario o limitadas por un período de tiempo
// sin actividad.

// Las variables de sesión nos permiten mantener el estado de la sesión de una
// aplicación a nivel de usuario. Es decir, en el servidor se mantendran las
// variables de sesión identificándolas por sesión/usuario y se almacenan
// como archivos temporales dentro del servidor.

// Una variable de sesión puede almacenar todo tipo de valores: enteros, cadenas
// matrices y objetos.

// De manera predeterminada PHP tiene deshabilitada la opción de mantenimiento
// de sesiones.

// Para activarlo, iremos al fichero php.ini y buscamos la siguiente directiva:

//          session.auto_start

// que debe estar asignada con el valor 1, para poder gestionar sesiones en las
// páginas de PHP.

// Recuerden reinicializar el servidor apache.

// Cómo activar el uso de sesiones?

// Para activar el uso de sesiones se usa la función:

//      session_start();

// La función crea una sesión nueva y le genera un número identificador o
// continúa una sesión ya iniciada.

// El número de identificación lo podemos conocer utilizando la función
// session_id(). La sintáxis de esta función es la siguiente:

//      session_id([id]);

// El identificador id es opcional. Si lo omitimos, obtendremos como retorno
// de la función el identificador de la sesión vigente. Si se utiliza el id,
// estaremos estableciendo a ese identificador como identificador de la sesión
// vigente (reemplazando al que estuviese vigente).

// También es posible identificar a las sesiones con un nombre determinado.
// Para estos fines se usa la función session_name([nombre]). La sintásix
// de la función es la siguiente:

//      session_name([nombre]);
//
// El identificador nombre es opcional. Si lo omitimos, obtendremos como retorno
// de la función el nombre de la sesión vigente. Si lo usamos, estaremos esta-
// bleciendo ese nombre como nombre de la sesión vigente (reemplazando al que
// estuviese vigente).

// Uso de variables de sesión

// PHP nos suministra una matriz asociativa superglobal denominada $_SESSION para
// contener los nombres de las variables y sus valores de una determinada sesión
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

// si la variable está asignada quiere decir que
// existe la variable de sesión

// actualización de la variable de sesión
// esta operación se debe hacer antes de
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
