<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ELIAS 2013.11.12</title>
</head>
<body>
<?php
//elias gonzalez
if (isset($_POST['suma']) or isset($_POST['resta']) or isset($_POST['multi']) or isset($_POST['divi']) ) {
$operador1 = $_POST['operador1'];
$operador2 = $_POST['operador2'];
	if (isset($_POST['suma']) ) {$resultado=($operador1+$operador2);}
	if (isset($_POST['resta']) ) {$resultado=($operador1-$operador2);}
//	if (isset($_POST['multi']) ) {$resultado=($operador1*$operador2);}
//	if (isset($_POST['divi']) ) {$resultado=($operador1/$operador2); $resultado=floor($resultado);}
}
?>
	<center>Elias Gonzalez</center>
	<FORM ACTION="2.php" METHOD=POST>
		<table align='center' border="1">
			<tr> <td>OPERADOR1</td> <td>OPERADOR 2</td> <td>RESULTADO</td></tr>
			<tr align='center'>
				<td><INPUT size="3" NAME="operador1" TYPE="TEXT" VALUE="<?php if (isset($operador1)) echo $operador1; else echo 0; ?>" /><br /></td>
				<td><INPUT size="3" NAME="operador2" TYPE="TEXT" VALUE="<?php if (isset($operador2)) echo $operador2; else echo 0; ?>" /><br /></td>
				<td><INPUT size="3" NAME="resultado" TYPE="TEXT" VALUE="<?php if (isset($resultado)) echo $resultado; else echo ''; ?>" disabled="disabled" /><br /></td>
			</tr>
		</table>
		<table align='center' >
			<tr>
			<td><INPUT NAME="suma" TYPE="SUBMIT" VALUE="SUMAR"></td> <td><INPUT NAME="resta" TYPE="SUBMIT" VALUE="RESTAR"></td>
			<td><INPUT NAME="multi" TYPE="SUBMIT" VALUE="MULTIPLICAR" hidden></td> <td><INPUT NAME="divi" TYPE="SUBMIT" VALUE="DIVIDIR" hidden></td>
			</tr>
		</table>
	</FORM>
</body>
</html>