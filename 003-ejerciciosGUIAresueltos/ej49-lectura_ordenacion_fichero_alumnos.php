<?php

$nombrefichero = "ej49-fichero_alumnos.txt";
$fp = fopen($nombrefichero, "r") or
die ("No existe el archivo \"$nombrefichero\"<br />");
$total = 0;
while (! feof($fp) )
	$alumnos[$total++] = fgets($fp, 1024);  // cada alumno en una fila
fclose($fp);
sort($alumnos);
echo "Los alumnos ordenados alfab&eacute;ticamente son:<br /><br />";
for ($i = 0; $i < $total; $i++)
	echo $alumnos[$i]."<br />";
?>