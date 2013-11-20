<?php 

// Acceso a archivos secuenciales
//
// En php existen una serie de funciones que nos permiten
// gestionar las operaciones de entrada y salida en archivos:
//
// * Comprobaci�n de la existencia de un archivo
// * Apertura
// * Lectura
// * Navegaci�n
// * Escritura
// * Cierre

// COMPROBAR LA EXISTENCIA DE UN FICHERO

// Para comprobar la existencia de un fichero se utiliza la funci�n
// file_exists(nombre_archivo) que verifica si un archivo de nombre
// nombre_archivo existe. Retorna TRUE si existe y FALSE en caso
// contrario.

echo "<br />Uso de la funci�n file_exists()<br />";
$var = "16-fichero de datos.txt";
// la construcci�n die() escribe el mensaje y
// hace que finalice el script
if (! file_exists($var) )
	die ("No existe el archivo $var<br />");
else
	echo "El fichero de datos \"$var\" existe<br />";

// APERTURA DE FICHEROS
//
// La funci�n fopen() nos permite abrir un fichero local o una direcci�n
// remota (URL).
//
// Su prototipo es el siguiente:
//
// 	fopen(nombre_fichero, modo [, ruta_busqueda])
//
// Donde
// nombre es el nombre del fichero o la direcci�n web que queremos abrir.
// modo indica el modo de apertura del archivo. En php existen estos modos:
//
// 	r:  S�lo lectura. El puntero del archivo se coloca al principio del mismo.
// 	r+: Lectura y escritura. El puntero del archivo se coloca al principio del mismo.
// 	w:  S�lo escritura. Si no existe el archivo, se crear� en esta operaci�n.
// 	    Si ya existe se borra su contenido.
// 	w+: Escritura y lectura. Si no existe el archivo, se crear� en esta operaci�n.
// 	    Si ya existe se borra su contenido.
// 	a:  S�lo escritura. Si no existe el archivo se crea. Si ya existe el puntero
// 	    se coloca al final del mismo.
// 	a+: Escritura y lectura. Si no existe el archivo se crea. Si ya existe el puntero
// 	    se coloca al final del mismo.
// 	x:  S�lo escritura. Crea y abre el archivo para escritura posicionando
// 	    el puntero al inicio del mismo. Si ya existe el archivo, genera un error
// 	    y devolver� FALSE.
// 	x+: Escritura y  lectura. Crea y abre el archivo para escritura posicionando
// 	    el puntero al inicio del mismo. Si ya existe el archivo, genera un error
// 	    y devolver� FALSE.

// 	El par�metro ruta_busqueda es opcional y se utiliza cuando no se puede
// 	encontrar el archivo utilizando s�lo el par�metro nombre. Si este par�metro
// 	vale 1, PHP buscar� el archivo en los directorios indicados en la directiva
// 	include_path del fichero php.ini.

// 	La ejecuci�n de la funci�n fopen() devuelve un valor que es el descriptor del
// 	archivo que utilizaremos luego al hacer otras operaciones sobre este archivo
// 	abierto. Si devuelve FALSE est� indicando que por alguna raz�n no se pudo
// 	abrir el fichero.

// 	Existe otro modo de apertura b que s�lo es v�lido en las plataformas windows.
// 	Es abrir el fichero en modo binario.

echo "<br />Uso de la funci�n fopen()<br />";
$nombre = "archivo01.txt";
$fp = fopen($nombre, "r") or die ("No existe el archivo \"$nombre\"<br />");

// en $fp queda cargado el descriptor del recurso
print $fp; // escribimos el descriptor

// 	LECTURA DE DATOS DE UN FICHERO

// 	Existen diversas funciones para leer datos en archivos secuenciales:

// 	Funci�n fgetc( descriptor_fichero )

// 	Esta funci�n lee un caracter del archivo referenciado, al llegar al final del archivo la
// 	funci�n devuelve FALSE.

// Ejemplo leemos caracter a caracter el fichero de datos archivo01.txt
// y lo mostramos por pantalla.

echo "<br /><br />Uso de la funci�n fgetc()<br /><br />";
$nombrefichero = "archivo01.txt";
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$carleido = fgetc($fp);
	echo $carleido;
}
echo "<br /><br />Fin de la ejecuci�n<br />";

// 	Funci�n fgets( descriptor_ficheros [,nro_caracteres] )

// 	Devuelve como m�ximo nro_caracteres del fichero. Si detecta el Intro
// 	entonce se lee hasta ese caracter inclusive. Al final del fichero
// 	la funci�n devuelve FALSE

echo "<br />Uso de la funci�n fgets()<br /><br />";
$nombrefichero = "archivo01.txt";
$fp = fopen($nombrefichero, "r") or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$leido = fgets($fp, 20);
	echo $leido;
}
echo "<br /><br />Fin de la ejecuci�n<br />";

// 	Funci�n fread( descriptor_ficheros [,nro_caracteres] )

// 	Devuelve como m�ximo nro_caracteres del fichero. Al final del fichero
// 	la funci�n devuelve FALSE. Es similar a fgets() salvo que esta no
//  trunca el buffer de lectura cuando consigue un INTRO.

echo "<br />Uso de la funci�n fread()<br /><br />";
$nombrefichero = "archivo01.txt";
$fp = fopen($nombrefichero, "r") or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$leido = fread($fp, 4096);
	echo $leido;
}
echo "<br /><br />Fin de la ejecuci�n<br />";

// 	ESCRITURA DE DATOS EN UN FICHERO

// 	Funci�n fwrite( descriptor_fichero, cadena_escribir [,nro_caracteres] )
// 	Funci�n fputs( descriptor_fichero, cadena_escribir [,nro_caracteres] )   ESTE PONE UN INTRO AL FINAL ************************************

// 	Estas dos funciones tienen el mismo funcionamiento y permiten escribir la cadena_escribir
// 	en el archivo cuyo descriptor se pasa como par�metro. Si se utiliza el par�metro
// 	opcional nro_caracteres, este ser� la m�xima cantidad de caracteres que se escriban
// 	en el fichero.

//	Ejemplo para copiar el fichero "archivo01.txt" en el fichero "copia.txt

echo "<br />Uso de la funci�n fwrite()<br /><br />";
$ficherolectura = "archivo01.txt";
$ficheroescritura = "copia.txt";
$fp1 = fopen($ficherolectura, "r") or die ("No existe el archivo \"$ficherolectura\"<br />");
$fp2 = fopen($ficheroescritura, "a") or die ("No existe el archivo \"$ficheroescritura\"<br />");
while (! feof($fp1) ) {
	$leido = fgets($fp1, 4096);
	fwrite($fp2, $leido);
}
echo "Se ha creado el fichero \"$ficheroescritura\".<br />Fin de la ejecuci�n<br />";


//	CIERRE DEL FICHERO

//	function fclose ( descriptor_fichero );

//      cierra el fichero que se pone en el descriptor

?>