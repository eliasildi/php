<?php

if (isset(&GET['boton']) ) {
	$anio=(int)$GET["numero"];
	if (($anio % 4 == 0) and
		(($anio % 400 == 0) OR
		($anio % 100 != 0)) )
		print "el anio $anio es bisiesto</br>";
	else 
		print "$anio no es bisiesto</br>";
}
else {
?>
<form action="" method=get>
verificar si es bisiesto





<?php
}?>