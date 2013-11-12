<html>
<body>
<p>Verificar año</p>
<?php
if (isset($_GET["Boton"])) {
	$año = (int)$_GET["Numero"];
	if (($año % 4 == 0) AND (($año %400 == 0) OR ($año % 100 != 0))) {
		echo "El año $año Es Biciesto";
	}
	Else {
		echo "El año NO es Biciesto"; 
	}
}
?>


</body>


</html>



