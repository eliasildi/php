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
$bloque1 = $_POST['bloque1'];
$bloque2 = $_POST['bloque2'];
$bloque3 = $_POST['bloque3'];
$bloque4 = $_POST['bloque4'];
$error = "ERROR IP";
	if (isset($_POST['adecimal']) ) {
			$ip1= bindec($bloque1);
			$ip2= bindec($bloque2);
			$ip3= bindec($bloque3);
			$ip4= bindec($bloque4);
			}
	if (isset($_POST['abinario']) ) {
			if ($bloque1 > 255) { $ip1=$error;} else $ip1= decbin($bloque1);
			if ($bloque2 > 255) { $ip2=$error;} else $ip2= decbin($bloque2);
			if ($bloque3 > 255) { $ip3=$error;} else $ip3= decbin($bloque3);
			if ($bloque4 > 255) { $ip4=$error;} else $ip4= decbin($bloque4);
			}
}
?>
	<center>Elias Gonzalez</center>
	<FORM ACTION="2013.11.19-IPs.php" METHOD=POST>
		<table align='center' border="0">	
			<tr align="center"> <td>Bloque 1</td> <td>Bloque 2</td> <td>Bloque 3</td> <td>Bloque 4</td></tr>
			<tr align='center'>
				<td><INPUT maxlength=8 size="6" NAME="bloque1" TYPE="TEXT" VALUE="<?php if (isset($bloque1)) echo $bloque1; else echo 0; ?>" /><b>.</b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="bloque2" TYPE="TEXT" VALUE="<?php if (isset($bloque2)) echo $bloque2; else echo 0; ?>" /><b>.</b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="bloque3" TYPE="TEXT" VALUE="<?php if (isset($bloque3)) echo $bloque3; else echo 0; ?>" /><b>.</b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="bloque4" TYPE="TEXT" VALUE="<?php if (isset($bloque4)) echo $bloque4; else echo 0; ?>" /><b></b><br /></td>
			</tr>
			<tr align='center'>
				<td><INPUT size="6" NAME="ip1" TYPE="TEXT" VALUE="<?php if (isset($ip1)) echo $ip1; else echo 0; ?>" disabled="disabled"/><b>.</b><br /></td>
				<td><INPUT size="6" NAME="ip2" TYPE="TEXT" VALUE="<?php if (isset($ip2)) echo $ip2; else echo 0; ?>" disabled="disabled"/><b>.</b><br /></td>
				<td><INPUT size="6" NAME="ip3" TYPE="TEXT" VALUE="<?php if (isset($ip3)) echo $ip3; else echo 0; ?>" disabled="disabled"/><b>.</b><br /></td>
				<td><INPUT size="6" NAME="ip4" TYPE="TEXT" VALUE="<?php if (isset($ip4)) echo $ip4; else echo 0; ?>" disabled="disabled"/><b></b><br /></td>
			</tr>
		</table>
		<table align='center' >
			<tr>
			<td><INPUT NAME="abinario" TYPE="SUBMIT" VALUE="A BINARIO (101010)"></td> <td><INPUT NAME="adecimal" TYPE="SUBMIT" VALUE="A DECIMAL (1,2,3,4,...)"></td>
			</tr>
		</table>
	</FORM>
</body>
</html>