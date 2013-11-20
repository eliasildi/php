<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cuadro</title>
</head>
<body>
<h1>Cuadro de texto con 3 opciones.</h1><br />

<?php 

if (isset($_POST["pasarB"])) {
	$activarpasarb="hidden";
	$activarpasarc="";
	$activarpasara="hidden";
		
}

if (isset($_POST["pasarC"])) {
	$activarpasarb="hidden";
	$activarpasarc="hidden";
	$activarpasara="";

}

if (isset($_POST["pasarA"])) {
	$activarpasarb="";
	$activarpasarc="hidden";
	$activarpasara="hidden";

}

?>

<form action="cuadro_A_B_C.php" method="post">

		<table border="0" align="center">

			<tr>
				<td colspan="3" align="center" width="150"><INPUT name="nombre" type="TEXT" value=""></td>
			</tr>
		
			<tr>
			
				<td align="center"><INPUT name="pasarB" type="SUBMIT" value="pasar a B" <?php if (isset($activarpasarb)) echo $activarpasarb; else echo ""; //el else es para la primera vez que se ejecuta el formulario ?>></td>
				<td align="center"><INPUT name="pasarC" type="SUBMIT" value="pasar a C" <?php if (isset($activarpasarc)) echo $activarpasarc; else echo "hidden"; //el else es para la primera vez que se ejecuta el formulario ?>></td>
				<td align="center"><INPUT name="pasarA" type="SUBMIT" value="pasar a A" <?php if (isset($activarpasara)) echo $activarpasara; else echo "hidden"; //el else es para la primera vez que se ejecuta el formulario ?>></td>
			</tr>
			

		</table>

</form>

</body>
</html>