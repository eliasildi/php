<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PHP EX&Aacute;MEN 01 -- EJERCICIO 01</title>
</head>
<body al>

<h1 align="center">ROTACI&Oacute;N DE UN STRING</h1>
<br />


<?php
/*los echos no van
$izquierda="";
$derecha="";*/
//if ($envio==1) { no va <INPUT name="oculto" type="hidden" value="1">
//variables de los inputs
// cargar
if (isset($_POST["btCargar"])) { //abro if
//variables
	$radios=$_POST["btLugar"];
	$frase=$_POST["palabra"];
	$izki=$_POST["izquierda"];
	$dere=$_POST["derecha"];
//radios
	if ($radios == "I") {$izki=$frase;}
	if ($radios == "D") {$dere=$frase;}
} //cierro if
//botonera primero y ultimo
// primero
if (isset($_POST["btInicio"])) {//abro if
				$izki=$_POST["izquierda"];
				$dere=$_POST["derecha"];
		if ($izki != ""){$izki=$izki;}
		if ($dere != "") {	$izki=$dere;
								$dere="";}
}//cierro if
//ultimo			
if (isset($_POST["btFinal"])) {//abro if
				$izki=$_POST["izquierda"];
				$dere=$_POST["derecha"];
				if ($izki != "") {$dere=$izki;
				$izki="";}
				if ($dere != "") {$dere=$dere;}
}//cierro if
//derecho
if (isset($_POST["btDerecha"])) {//abro if
	$izki=$_POST["izquierda"];
	$dere=$_POST["derecha"];
	if ($dere == $dere) {$dere;}
	if ($izki != "") {	$dere=$dere.substr($izki, 0, 1);
						$izki=substr($izki, 1, strlen($izki)-1);}
}//cierro if
if (isset($_POST["btIzquierda"])) {//abro if
				$izki=$_POST["izquierda"];
				$dere=$_POST["derecha"];
				if ($izki == $izki) {$izki;}
				if ($dere != "") {	$izki=$izki.substr($dere, 0, 1);
									$dere=substr($dere, 1, strlen($dere)-1);}
}//cierro if

// echos***no van
/*$izquierda="
if (isset($_POST["btCargar"])){echo $izki;}
if (isset($_POST["btInicio"])){echo $izki;}
if (isset($_POST["btFinal"])){echo $izki;}
if (isset($_POST["btDerecha"])){echo $izki;}
if (isset($_POST["btIzquierda"])){echo $izki;}";*/

/*$derecha="<?php
				if (isset($_POST["btCargar"])){echo $dere;}
				if (isset($_POST["btInicio"])){echo $dere;}
				if (isset($_POST["btFinal"])){echo $dere;}
				if (isset($_POST["btDerecha"])){echo $dere;}
				if (isset($_POST["btIzquierda"])){echo $dere;}?>"*/
//cierro envio oculto}
?>
<FORM ACTION="ejercicio_01.php" METHOD=POST>
	<table border="1" align="center">
		<tr>
			<td align="center">IZQUIERDA</td>
			<td align="center">DERECHA</td>
		</tr>
		<tr>
			<td>
				<INPUT NAME="izquierda" size="30" MAXLENGTH="30" readonly="readonly" TYPE="TEXT"
				VALUE="<?php 
				if (isset($_POST["btCargar"])){echo $izki;}
				if (isset($_POST["btInicio"])){echo $izki;}
				if (isset($_POST["btFinal"])){echo $izki;}
				if (isset($_POST["btDerecha"])){echo $izki;}
				if (isset($_POST["btIzquierda"])){echo $izki;}?>" /><br />
			</td>
			<td>
				<INPUT NAME="derecha" size="30" MAXLENGTH="30" readonly="readonly" TYPE="TEXT"
				VALUE="<?php
				if (isset($_POST["btCargar"])){echo $dere;}
				if (isset($_POST["btInicio"])){echo $dere;}
				if (isset($_POST["btFinal"])){echo $dere;}
				if (isset($_POST["btDerecha"])){echo $dere;}
				if (isset($_POST["btIzquierda"])){echo $dere;}?>" /><br />
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type="radio" name="btLugar" value="I">
			</td>
			<td align="center">
				<input type="radio" name="btLugar" value="D">
			</td>
		</tr>
		<tr>	
			<td align="center">
				PALABRA<br />A CARGAR
			</td>
			<td align="center">
				<INPUT NAME="palabra" size="30" MAXLENGTH="30" TYPE="TEXT" VALUE="" /><br/>
				<INPUT NAME="btCargar" TYPE="SUBMIT" VALUE="CARGAR PALABRA">
			</td>	
		</tr>
		<tr align="center">
			<td colspan="2" align="center">
				<INPUT NAME="btInicio" TYPE="SUBMIT" VALUE="INICIAL" >
				<INPUT NAME="btIzquierda" TYPE="SUBMIT" VALUE="  IZQ  " >
				<INPUT NAME="btDerecha" TYPE="SUBMIT" VALUE="  DER  " >
				<INPUT NAME="btFinal" TYPE="SUBMIT" VALUE=" FINAL " >
			</td>	
		</tr>
	</table>
	<INPUT name="oculto" type="hidden" value="1">
</FORM>

</body>
</html>
