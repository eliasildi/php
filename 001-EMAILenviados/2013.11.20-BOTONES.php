<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ELIAS 2013.11.19 IPs</title>
</head>
<body>
<?php
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
//primero ******************************************************************
if ( isset ($_POST['primero']) ) {
	$c1="100";
	$c2="";
	$c3="";
	$c4="";
}
//ultimo ******************************************************************
if ( isset ($_POST['ultimo']) ) {
	$c1="";
	$c2="";
	$c3="";
	$c4="100";
}
//siguiente ******************************************************************
if ($c3=="100") {	if (isset ($_POST['siguiente']) ) {
	$c1="";
	$c2="";
	$c3="";
	$c4="100";}
}
if ($c2=="100") {	if (isset ($_POST['siguiente']) ) {
	$c1="";
	$c2="";
	$c3="100";
	$c4="";}
}
if ($c1=="100") {	if (isset ($_POST['siguiente']) ) {
	$c1="";
	$c2="100";
	$c3="";
	$c4="";}						
}
// anterior ******************************************************************
if ($c2=="100") {	if (isset ($_POST['anterior']) ) {
	$c1="100";
	$c2="";
	$c3="";
	$c4="";}
}
if ($c3=="100") {	if (isset ($_POST['anterior']) ) {
	$c1="";
	$c2="100";
	$c3="";
	$c4="";}
}
if ($c4=="100") {	if (isset ($_POST['anterior']) ) {
	$c1="";
	$c2="";
	$c3="100";
	$c4="";}
}
?>
	<center>Elias Gonzalez</center>
	<FORM ACTION="2013.11.20-BOTONES.php" METHOD=POST>
		<table align='center' border="0">	
			<tr align="center"> <td>C1</td> <td>C2</td> <td>C3</td> <td>C4</td></tr>
			<tr align='center'>
				<td><INPUT maxlength=8 size="6" NAME="c1" TYPE="TEXT" VALUE="<?php if (isset($c1)) echo $c1; else echo '100'; ?>" /><b></b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="c2" TYPE="TEXT" VALUE="<?php if (isset($c2)) echo $c2; else echo '' ; ?>" /><b></b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="c3" TYPE="TEXT" VALUE="<?php if (isset($c3)) echo $c3; else echo ''; ?>" /><b></b><br /></td>
				<td><INPUT maxlength=8 size="6" NAME="c4" TYPE="TEXT" VALUE="<?php if (isset($c4)) echo $c4; else echo ''; ?>" /><b></b><br /></td>
			</tr>
		</table>
		<table align='center' >
			<tr>
			<td> <INPUT NAME="primero" TYPE="SUBMIT" VALUE="<<"></td>
			<td> <INPUT NAME="anterior" TYPE="SUBMIT" VALUE="<"/> </td>
			<td> <INPUT NAME="siguiente" TYPE="SUBMIT" VALUE=">"> </td>
			<td> <INPUT NAME="ultimo" TYPE="SUBMIT" VALUE=">>"> </td>
			</tr>
		</table>
	</FORM>
</body>
</html>