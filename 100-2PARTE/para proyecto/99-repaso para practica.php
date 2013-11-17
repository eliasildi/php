<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>

<?php

if (isset($_POST["A"])) {       // en este caso preguntamos por el boton
	$activarpasarb = "hidden";
	$activarpasarc = "";
	$activarpasara = "hidden";

}

if (isset($_POST["B"])) {       // en este caso preguntamos por el boton
	$activarpasarb = "hidden";
	$activarpasarc = "hidden";
	$activarpasara = "";

}

if (isset($_POST["C"])) {       // en este caso preguntamos por el boton
	$activarpasarb = "";
	$activarpasarc = "hidden";
	$activarpasara = "hidden";

}
?>

<FORM ACTION="99-repaso para practica.php" METHOD=POST>
	<table align="center" border="0">
		<tr>
			<td><INPUT NAME="Texto" TYPE="TEXT" VALUE="">
			</td>
		</tr>
		<tr>
			<td align="center">
				<INPUT NAME="A" TYPE="SUBMIT" VALUE="PASAR B" <?php if (isset($activarpasarb)) echo $activarpasarb;
				                                                   else echo ""; ?> >
				<INPUT NAME="B" TYPE="SUBMIT" VALUE="PASAR C" <?php if (isset($activarpasarc)) echo $activarpasarc;
				                                                   else echo "hidden"; ?> >
				<INPUT NAME="C" TYPE="SUBMIT" VALUE="PASAR A" <?php if (isset($activarpasara)) echo $activarpasara;
				                                                   else echo "hidden"; ?> >
			</td>
		</tr>
	</TABLE>
	<INPUT NAME="control" MAXLENGTH="25" TYPE="hidden" VALUE="1">
</FORM>


</body>
</html>
