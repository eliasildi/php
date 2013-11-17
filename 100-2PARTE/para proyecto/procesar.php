<?php

    $numerosjugados = array(); // crea un array vacio
	$numerosjugados = $_POST['numeros'];
	foreach ($numerosjugados as $num) {
		echo $num . '<br />';
	}

?>

