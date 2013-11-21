<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PHP EX&Aacute;MEN 01 -- EJERCICIO 02</title>
</head>
<body al>
<?php // NO ESTA REALIZADO, ME LIE
// FUNCIÓN IN_ARRAY()
//
// la función in_array() busca un elemento dentro de un array
// devuelve TRUE si lo consigue y FALSE sino
//
//  in_array(valor_buscar, array [, verifica_tipo])
//
// verifica tipo un valor booleano si quiere que se compruebe tipo
$suma = 0;
$numero = null;
if (isset($_POST["btProcesar"])) {
//leemos fichero COPIAR Y PEGAR DE EJEMPLOS
$nombrefichero="fichero_apuestas.txt";
$fp=fopen($nombrefichero, "r") or die ("no xiste");
$numeros=array($fp);
if (in_array($numero, $numeros))  {
while (! feof($fp) ) {
	$valornumerico = (int)fgets($fp, 1024);
	$suma += $valornumerico;
	$i++;}
fclose($fp);
}}
// operaciones sin definir aun***
//numero apuestas jugadas
$numeroapuestas=null;
//Total de euros recaudados
$totaleuros=null;
//Total de euros a repartir
$totalrepartir=null;
?>
<h1 align="center">RESULTADO SORTEO LOTERIA PRIMITIVA</h1>
<br />

<FORM ACTION="ejercicio_02.php" METHOD=POST>
	<table border="1" align="center">
		<tr bgcolor="127252">
			<td align="center" colspan="4">N&Uacute;MEROS PREMIADOS</td>
		</tr>
		<tr >
		    <td colspan="4" align="center" >
				<INPUT NAME="n1" size="1" MAXLENGTH="3" TYPE="TEXT" VALUE="" />
				<INPUT NAME="n2" size="1" MAXLENGTH="3" TYPE="TEXT" VALUE="" />
				<INPUT NAME="n3" size="1" MAXLENGTH="3" TYPE="TEXT" VALUE="" />
				<INPUT NAME="n4" size="1" MAXLENGTH="3" TYPE="TEXT" VALUE="" />
				<INPUT NAME="n5" size="1" MAXLENGTH="3" TYPE="TEXT" VALUE="" />
				<INPUT NAME="n6" size="1" MAXLENGTH="3" TYPE="TEXT" VALUE="" />
			</td>
		<tr bgcolor="127252">
			<td align="center" colspan="4">E S C R U T I N I O</td>
		</tr>
		<tr>
				<td colspan="3" align="left">
				    Numero de apuestas jugadas
				</td>
				<td colspan="1" align="center">
						<INPUT NAME="apuestas" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php if (isset($numeroapuestas)){echo "";} ?>" />
				</td>
		</tr>		
		<tr>
				<td colspan="3" align="left">
				    Total de euros recaudados
				</td>
				<td colspan="1" align="center">
						<INPUT NAME="dinero" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php if (isset($totaleuros)){echo "";} ?>" />
				</td>
		</tr>
		<tr>
				<td colspan="3" align="left" >
				    Total de euros a repartir
				</td>
				<td colspan="1" align="center">
						<INPUT NAME="repartir" size="6" MAXLENGTH="6" type="text" disabled="disabled"
						VALUE="<?php if (isset($totalrepartir)){echo "";} ?>" />
				</td>
		</tr>
		<tr bgcolor="127252" >
				<td align="center">
						Categorias
				</td>
				<td align="center">
						A Repartir
				</td>
				<td align="center">
						Acertantes
				</td>
				<td align="center">
						A Cobrar
				</td>
		</tr>
		<tr>
				<td align="center">
						Cat. 1
				</td>
				<td align="center">
						<INPUT NAME="repar_cat1" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="acertantes1" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="importe1" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
		</tr>
		<tr>
				<td align="center">
						Cat. 2
				</td>
				<td align="center">
						<INPUT NAME="repar_cat2" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="acertantes2" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="importe2" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
		</tr>
		<tr>
				<td align="center">
						Cat. 3
				</td>
				<td align="center">
						<INPUT NAME="repar_cat3" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="acertantes3" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="importe3" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
		</tr>
		<tr>
				<td align="center">
						Cat. 4
				</td>
				<td align="center">
						<INPUT NAME="repar_cat4" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="acertantes4" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
				<td align="center">
						<INPUT NAME="importe4" size="6" MAXLENGTH="6" TYPE="TEXT" disabled="disabled"
						VALUE="<?php ?>" />
				</td>
		</tr>
		<tr align="center">
			<td colspan="4" align="center">
				<INPUT NAME="btProcesar" TYPE="SUBMIT" VALUE="PROCESAR" >
			</td>	
		</tr>
	</table>
	<INPUT name="oculto" type="hidden" value="1">
</FORM>

</body>
</html>
