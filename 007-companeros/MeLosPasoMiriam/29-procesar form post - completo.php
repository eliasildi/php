<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Procesando un formulario con GET</title>
</head>
<body>
	<h2>Procesar formulario con POST</h2>
	<br />
	<?php

	$nombrecompleto = $_POST['nombrecompleto'];
	$direccion = $_POST['direccion'];
	$sexo = $_POST['sexo'];
	$nivel = $_POST['nivel'];

	echo "Nombre Completo: ".$nombrecompleto . '<br />';
	echo "Dirección: ".$direccion . '<br />';
	echo "Sexo: ".$sexo . '<br />';
	echo "Nivel: ".$nivel . '<br />';

	if ( isset($_POST['imagesonly']) AND $_POST['imagesonly'] == 'Yes') {
		$imagesonly = 'Yes';
	} else {
		$imagesonly = 'No';
	}
	echo 'Desea únicamente imágenes? ' . $imagesonly . '<br />';

	echo "Donde prefieres vivir<br />";
	if (isset($_POST['tiposareas'])) {
		$tiposareas = array(); // crea un array vacio
		$tiposareas = $_POST['tiposareas'];
		foreach ($tiposareas as $area) {
			echo "-- ".$area . '<br />';
		}
	} else {
		echo "-- Tu no quieres vivir en ninguna parte.<br />";
	}

	echo "cuales son tus intereses<br />";
	if (isset($_POST['intereses'])) {
		$inputs = array();
		$inputs = $_POST['intereses'];
		foreach ($inputs as $input) {
		$intereses[] = (int) $input;
	}
	foreach ($intereses as $interes) {
		echo "-- ".$interes . '<br />';
	}
	} else {
	echo "-- No hay nada que te interesa.<br />";
}

$id = (int) $_POST['id'];
echo "El campo oculto tiene el valor ".$id . '<br />';

echo 'Gracias por enviar el formulario';

?>
</body>
</html>
