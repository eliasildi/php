<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ELIAS 2013.11.19 IPs</title>
</head>
<body>
<?php
if ( isset ($_POST['abinario']) or isset($_POST['adecimal']) ) {
$c1 = $_POST['bloque1'];
$c2 = $_POST['bloque2'];
$c3 = $_POST['bloque3'];
$c4 = $_POST['bloque4'];
	if (isset($_POST['adecimal']) ) {
			
			}
	if (isset($_POST['abinario']) ) {
			
			}
}
?>
	<center>Elias Gonzalez</center>
	<FORM ACTION="2013.11.19-IPs.php" METHOD=POST>
		<table align='center' border="0">	
			<tr align="center"> <td>C1</td> <td>C2</td> <td>C3</td> <td>C4</td></tr>
			<tr align='center'>
				<td><INPUT maxlength=8 size="6" NAME="c1" TYPE="TEXT" VALUE="<?php if (isset($c1)) echo $bloque1; else echo 0; ?>"disabled="disabled" /><b>.</b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="c2" TYPE="TEXT" VALUE="<?php if (isset($c2)) echo $bloque2; else echo 0; ?>"disabled="disabled" /><b>.</b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="c3" TYPE="TEXT" VALUE="<?php if (isset($c3)) echo $bloque3; else echo 0; ?>"disabled="disabled" /><b>.</b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="c4" TYPE="TEXT" VALUE="<?php if (isset($c4)) echo $bloque4; else echo 0; ?>"disabled="disabled" /><b></b><br /></td>
			</tr>
		</table>
		<table align='center' >
			<tr>
			<td> <INPUT NAME="primero" TYPE="SUBMIT" VALUE="<<"> </td>
			<td> <input NAME="anterior" TYPE="SUBMIT" VALUE="<"/> </td>
			<td> <INPUT NAME="siguiente" TYPE="SUBMIT" VALUE=">"> </td>
			<td> <INPUT NAME="ultimo" TYPE="SUBMIT" VALUE=">>"> </td>
			</tr>
		</table>
	</FORM>
</body>
</html>