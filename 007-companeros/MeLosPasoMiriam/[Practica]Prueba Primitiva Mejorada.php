<html>
<body>
<p>Verificar a�o</p>
<?php
if (isset($_GET["Boton"])) {
	$a�o = (int)$_GET["Numero"];
	if (($a�o % 4 == 0) AND (($a�o %400 == 0) OR ($a�o % 100 != 0))) {
		echo "El a�o $a�o Es Biciesto";
	}
	Else {
		echo "El a�o NO es Biciesto"; 
	}
}
?>


</body>


</html>



