<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Convertidor de temperaturas</p>
	<?php

	if ( isset($_POST['enviado']) )
	{
		$v1 = (float)$_POST["temperatura"];
		if ($_POST["oper"] == "cf") {
		$v2 = (9.0 / 5.0) * $v1 + 32.0;
	}
	if ($_POST["oper"] == "fc") {
		$v2 = (5.0 / 9.0) * ($v1 - 32.0);
	}
	}
	?>

	<FORM ACTION="ej45-convertidor_temperatura.php" METHOD=POST>
		<table border="1">
			<tr>
				<td>Temperatura:
				<INPUT NAME="temperatura" size="6" MAXLENGTH="6"
					TYPE="TEXT"
					VALUE="<?php if (isset($_POST["temperatura"])) echo $_POST["temperatura"]; else echo ""; ?>" /><br />
					De ºC a ºF <INPUT TYPE="radio" NAME="oper" VALUE="cf"
					<?php if ((isset($_POST["oper"])) and ($_POST["oper"] == "cf")) echo "checked"; else echo ""; ?> /><br />
					De ºF a ºC <INPUT TYPE="radio" NAME="oper" VALUE="fc"
					<?php if ((isset($_POST["oper"])) and ($_POST["oper"] == "fc")) echo "checked"; else echo ""; ?> /><br />
				</td>
				<td><br /> <INPUT NAME="s1" size="6" MAXLENGTH="6" TYPE="TEXT"
					VALUE="<?php if (isset($v1)) printf("%.2f",$v1); else echo ""; ?>"
					disabled /> <?php
					if ((isset($_POST["oper"])) and ($_POST["oper"] == "cf"))
						echo " ºC son ";
					if ((isset($_POST["oper"])) and ($_POST["oper"] == "fc"))
						echo " ºF son ";
					?> <INPUT NAME="s1" size="6" MAXLENGTH="6" TYPE="TEXT"
					VALUE="<?php if (isset($v2)) printf("%.2f",$v2); else echo ""; ?>"
					disabled /> <?php
					if ((isset($_POST["oper"])) and ($_POST["oper"] == "cf"))
						echo " ºF<br />";
					if ((isset($_POST["oper"])) and ($_POST["oper"] == "fc"))
						echo " ºC<br />";
					?>
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"><INPUT NAME="boton1" TYPE="SUBMIT" VALUE="Calcular">
					<INPUT NAME="boton2" TYPE="RESET" VALUE="Borrar"><br />
				</td>
			</tr>
		</table>
		<input type="hidden" name="enviado" value="1" />
	</FORM>
</body>
</html>
