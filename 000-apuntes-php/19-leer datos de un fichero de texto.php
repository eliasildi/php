<?php 

// Acceso a archivos secuenciales
//
// En php existen una serie de funciones que nos permiten
// gestionar las operaciones de entrada y salida en archivos:
//
// * Comprobación de la existencia de un archivo
// * Apertura
// * Lectura
// * Navegación
// * Escritura
// * Cierre

// COMPROBAR LA EXISTENCIA DE UN FICHERO

// Para comprobar la existencia de un fichero se utiliza la función
// file_exists(nombre_archivo) que verifica si un archivo de nombre
// nombre_archivo existe. Retorna TRUE si existe y FALSE en caso
// contrario.

echo "<br />Uso de la función file_exists()<br />";
$var = "16-fichero de datos.txt";
// la construcción die() escribe el mensaje y
// hace que finalice el script
if (! file_exists($var) )
	die ("No existe el archivo $var<br />");
else
	echo "El fichero de datos \"$var\" existe<br />";

// APERTURA DE FICHEROS
//
// La función fopen() nos permite abrir un fichero local o una dirección
// remota (URL).
//
// Su prototipo es el siguiente:
//
// 	fopen(nombre_fichero, modo [, ruta_busqueda])
//
// Donde
// nombre es el nombre del fichero o la dirección web que queremos abrir.
// modo indica el modo de apertura del archivo. En php existen estos modos:
//
// 	r:  Sólo lectura. El puntero del archivo se coloca al principio del mismo.
// 	r+: Lectura y escritura. El puntero del archivo se coloca al principio del mismo.
// 	w:  Sólo escritura. Si no existe el archivo, se creará en esta operación.
// 	    Si ya existe se borra su contenido.
// 	w+: Escritura y lectura. Si no existe el archivo, se creará en esta operación.
// 	    Si ya existe se borra su contenido.
// 	a:  Sólo escritura. Si no existe el archivo se crea. Si ya existe el puntero
// 	    se coloca al final del mismo.
// 	a+: Escritura y lectura. Si no existe el archivo se crea. Si ya existe el puntero
// 	    se coloca al final del mismo.
// 	x:  Sólo escritura. Crea y abre el archivo para escritura posicionando
// 	    el puntero al inicio del mismo. Si ya existe el archivo, genera un error
// 	    y devolverá FALSE.
// 	x+: Escritura y  lectura. Crea y abre el archivo para escritura posicionando
// 	    el puntero al inicio del mismo. Si ya existe el archivo, genera un error
// 	    y devolverá FALSE.

// 	El parámetro ruta_busqueda es opcional y se utiliza cuando no se puede
// 	encontrar el archivo utilizando sólo el parámetro nombre. Si este parámetro
// 	vale 1, PHP buscará el archivo en los directorios indicados en la directiva
// 	include_path del fichero php.ini.

// 	La ejecución de la función fopen() devuelve un valor que es el descriptor del
// 	archivo que utilizaremos luego al hacer otras operaciones sobre este archivo
// 	abierto. Si devuelve FALSE está indicando que por alguna razón no se pudo
// 	abrir el fichero.

// 	Existe otro modo de apertura b que sólo es válido en las plataformas windows.
// 	Es abrir el fichero en modo binario.

echo "<br />Uso de la función fopen()<br />";
$nombre = "archivo01.txt";
$fp = fopen($nombre, "r") or die ("No existe el archivo \"$nombre\"<br />");

// en $fp queda cargado el descriptor del recurso
print $fp; // escribimos el descriptor

// 	LECTURA DE DATOS DE UN FICHERO

// 	Existen diversas funciones para leer datos en archivos secuenciales:

// 	Función fgetc( descriptor_fichero )

// 	Esta función lee un caracter del archivo referenciado, al llegar al final del archivo la
// 	función devuelve FALSE.

// Ejemplo leemos caracter a caracter el fichero de datos archivo01.txt
// y lo mostramos por pantalla.

echo "<br /><br />Uso de la función fgetc()<br /><br />";
$nombrefichero = "archivo01.txt";
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$carleido = fgetc($fp);
	echo $carleido;
}
echo "<br /><br />Fin de la ejecución<br />";

// 	Función fgets( descriptor_ficheros [,nro_caracteres] )

// 	Devuelve como máximo nro_caracteres del fichero. Si detecta el Intro
// 	entonce se lee hasta ese caracter inclusive. Al final del fichero
// 	la función devuelve FALSE

echo "<br />Uso de la función fgets()<br /><br />";
$nombrefichero = "archivo01.txt";
$fp = fopen($nombrefichero, "r") or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$leido = fgets($fp, 20);
	echo $leido;
}
echo "<br /><br />Fin de la ejecución<br />";

// 	Función fread( descriptor_ficheros [,nro_caracteres] )

// 	Devuelve como máximo nro_caracteres del fichero. Al final del fichero
// 	la función devuelve FALSE. Es similar a fgets() salvo que esta no
//  trunca el buffer de lectura cuando consigue un INTRO.

echo "<br />Uso de la función fread()<br /><br />";
$nombrefichero = "archivo01.txt";
$fp = fopen($nombrefichero, "r") or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$leido = fread($fp, 4096);
	echo $leido;
}
echo "<br /><br />Fin de la ejecución<br />";

// 	ESCRITURA DE DATOS EN UN FICHERO

// 	Función fwrite( descriptor_fichero, cadena_escribir [,nro_caracteres] )
// 	Función fputs( descriptor_fichero, cadena_escribir [,nro_caracteres] )   ESTE PONE UN INTRO AL FINAL ************************************

// 	Estas dos funciones tienen el mismo funcionamiento y permiten escribir la cadena_escribir
// 	en el archivo cuyo descriptor se pasa como parámetro. Si se utiliza el parámetro
// 	opcional nro_caracteres, este será la máxima cantidad de caracteres que se escriban
// 	en el fichero.

//	Ejemplo para copiar el fichero "archivo01.txt" en el fichero "copia.txt

echo "<br />Uso de la función fwrite()<br /><br />";
$ficherolectura = "archivo01.txt";
$ficheroescritura = "copia.txt";
$fp1 = fopen($ficherolectura, "r") or die ("No existe el archivo \"$ficherolectura\"<br />");
$fp2 = fopen($ficheroescritura, "a") or die ("No existe el archivo \"$ficheroescritura\"<br />");
while (! feof($fp1) ) {
	$leido = fgets($fp1, 4096);
	fwrite($fp2, $leido);
}
echo "Se ha creado el fichero \"$ficheroescritura\".<br />Fin de la ejecución<br />";


//	CIERRE DEL FICHERO

//	function fclose ( descriptor_fichero );

//      cierra el fichero que se pone en el descriptor

?>