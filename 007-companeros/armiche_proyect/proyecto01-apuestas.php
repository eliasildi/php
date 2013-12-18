<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Proyecto 01 - Loteria Primitiva - Apuestas</title>
</head>
<body>
<?php

$rad="";
$check1="checked";
$check2="";
$disab="disabled >";
$ale=array();

	if (isset($_POST["btManual"])){
		
		$A = "hidden";
		$B = "hidden";
		$C="";
		$D="";
		$E="";
		$marca=$_POST["btapuesta"];
		
		if ($marca == "simple"){
		}
		
		else {
			$check1="";
			$check2="checked";
		}
	}
	
	if (isset($_POST["btGenerar"])){
		
		$A="hidden";
		$B="hidden";
		$C="";
		$D="";
		$E="hidden";
		$marca=$_POST["btapuesta"];
		
		if ($marca == "simple"){
			for ($i=0; $i<6; $i++) {
				do {
					$valor_generado=mt_rand(1,49);
				} while (in_array($valor_generado, $ale));
				$ale[$i]=$valor_generado;
			}
		}
		
		else {
			$check1="";
			$check2="checked";
			for ($i=0; $i<7; $i++) {
				do {
					$valor_generado=mt_rand(1,49);
				} while (in_array($valor_generado, $ale));
				$ale[$i]=$valor_generado;
			}
		}
	}
	
	if (isset($_POST["btValidar"])){
		
		$A="";
		$B="";
		$C="hidden";
		$D="hidden";
		$E="hidden";
		
		$primi="primitiva.txt";
		$marca=$_POST["btapuesta"];
		if ($marca == "simple"){
			$fp=fopen($primi, "w");
			for ($n=1;$n<=49;$n++){
				if (isset($_POST["nro".$n])){
				fwrite($fp, $n." ");
				}
			}
		}
		
		if ($marca == "multiple"){
			$fp2=fopen($primi, "w");
			for ($i=1;$i<=49;$i++){
				if (isset($_POST["nro".$i])){
					$x[]=$i;
				}
			}
			for ($j=0;$j<=6;$j++){
				if ($j == 0){
					$a0=$x[1]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[5]." ".$x[6];
				}
				
				if ($j == 1){
					$a1=$x[0]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[5]." ".$x[6];				
				}
				
				if ($j == 2){
					$a2=$x[0]." ".$x[1]." ".$x[3]." ".$x[4]." ".$x[5]." ".$x[6];				
				}
				
				if ($j == 3){
					$a3=$x[0]." ".$x[1]." ".$x[2]." ".$x[4]." ".$x[5]." ".$x[6];				
				}
				
				if ($j == 4){
					$a4=$x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[5]." ".$x[6];				
				}
				
				if ($j == 5){
					$a5=$x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[6];				
				}
				
				if ($j == 6){
					$a6=$x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[5];
				}
			}
			fwrite($fp2, $a0);
			fwrite($fp2, "\n");
			fwrite($fp2, $a1);
			fwrite($fp2, "\n");
			fwrite($fp2, $a2);
			fwrite($fp2, "\n");
			fwrite($fp2, $a3);
			fwrite($fp2, "\n");
			fwrite($fp2, $a4);
			fwrite($fp2, "\n");
			fwrite($fp2, $a5);
			fwrite($fp2, "\n");
			fwrite($fp2, $a6);
			fwrite($fp2, "\n");
		}
	}	
	
	if (isset($_POST["btCancelar"])){
		
		$A="";
		$B="";
		$C="hidden";
		$D="hidden";
		$E="hidden";
	}	
	
	if (isset($_POST["btBorrar"])){
		
		$A="hidden";
		$B="hidden";
		$C="";
		$D="";
		$E="";
		$marca1=$_POST["btapuesta"];
		
		if ($marca1 == "simple"){
		}
		
		else {
			$check1="";
			$check2="checked";
		}
	}
		
?>
	
<h2 align="center">Apuesta de primitiva</h2>
<form ACTION="proyecto01-apuestas.php" METHOD="POST">
	<TABLE align="center" border="1">
		<tr>
			<td align="center" width="46">1
				<input type="radio" name="nro1" value="" <?php if (in_array(1, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(1, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">11
				<input type="radio" name="nro11" value="" <?php if (in_array(11, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(11, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">21
				<input type="radio" name="nro21" value="" <?php if (in_array(21, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(21, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">31
				<input type="radio" name="nro31" value="" <?php if (in_array(31, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(31, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">41
				<input type="radio" name="nro41" value="" <?php if (in_array(41, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(41, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">2
				<input type="radio" name="nro2" value="" <?php if (in_array(2, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(2, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">12
				<input type="radio" name="nro12" value="" <?php if (in_array(12, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(12, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">22
				<input type="radio" name="nro22" value="" <?php if (in_array(22, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(22, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">32
				<input type="radio" name="nro32" value="" <?php if (in_array(32, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(32, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">42
				<input type="radio" name="nro42" value="" <?php if (in_array(42, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(42, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">3
				<input type="radio" name="nro3" value="" <?php if (in_array(3, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(3, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">13
				<input type="radio" name="nro13" value="" <?php if (in_array(13, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(13, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">23
				<input type="radio" name="nro23" value="" <?php if (in_array(23, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(23, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">33
				<input type="radio" name="nro33" value="" <?php if (in_array(33, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(33, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">43
				<input type="radio" name="nro43" value="" <?php if (in_array(43, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(43, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">4
				<input type="radio" name="nro4" value="" <?php if (in_array(4, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(4, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">14
				<input type="radio" name="nro14" value="" <?php if (in_array(14, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(14, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">24
				<input type="radio" name="nro24" value="" <?php if (in_array(24, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(24, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">34
				<input type="radio" name="nro34" value="" <?php if (in_array(34, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(34, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">44
				<input type="radio" name="nro44" value="" <?php if (in_array(44, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(44, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">5
				<input type="radio" name="nro5" value="" <?php if (in_array(5, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(5, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">15
				<input type="radio" name="nro15" value="" <?php if (in_array(15, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(15, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">25
				<input type="radio" name="nro25" value="" <?php if (in_array(25, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(25, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">35
				<input type="radio" name="nro35" value="" <?php if (in_array(35, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(35, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">45
				<input type="radio" name="nro45" value="" <?php if (in_array(45, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(45, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">6
				<input type="radio" name="nro6" value="" <?php if (in_array(6, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(6, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">16
				<input type="radio" name="nro16" value="" <?php if (in_array(16, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(16, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">26
				<input type="radio" name="nro26" value="" <?php if (in_array(26, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(26, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">36
				<input type="radio" name="nro36" value="" <?php if (in_array(36, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(36, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">46
				<input type="radio" name="nro46" value="" <?php if (in_array(46, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(46, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">7
				<input type="radio" name="nro7" value="" <?php if (in_array(7, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(7, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">17
				<input type="radio" name="nro17" value="" <?php if (in_array(17, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(17, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">27
				<input type="radio" name="nro27" value="" <?php if (in_array(27, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(27, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">37
				<input type="radio" name="nro37" value="" <?php if (in_array(37, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(37, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">47
				<input type="radio" name="nro47" value="" <?php if (in_array(47, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(47, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">8
				<input type="radio" name="nro8" value="" <?php if (in_array(8, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(8, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">18
				<input type="radio" name="nro18" value="" <?php if (in_array(18, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(18, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">28
				<input type="radio" name="nro28" value="" <?php if (in_array(28, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(28, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">38
				<input type="radio" name="nro38" value="" <?php if (in_array(38, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(38, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">48
				<input type="radio" name="nro48" value="" <?php if (in_array(48, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(48, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">9
				<input type="radio" name="nro9" value="" <?php if (in_array(9, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(9, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">19
				<input type="radio" name="nro19" value="" <?php if (in_array(19, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(19, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">29
				<input type="radio" name="nro29" value="" <?php if (in_array(29, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(29, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">39
				<input type="radio" name="nro39" value="" <?php if (in_array(39, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(39, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">49
				<input type="radio" name="nro49" value="" <?php if (in_array(49, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(49, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
		</tr>
		<tr>
			<td align="center" width="46">10
				<input type="radio" name="nro10" value="" <?php if (in_array(10, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(10, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">20
				<input type="radio" name="nro20" value="" <?php if (in_array(20, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(20, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">30
				<input type="radio" name="nro30" value="" <?php if (in_array(30, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(30, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
			<td align="center" width="46">40
				<input type="radio" name="nro40" value="" <?php if (in_array(40, $ale)) {echo "checked >";} if ((isset($_POST["btManual"])) OR (isset($_POST["btBorrar"]))) {echo ">";} if (! in_array(40, $ale)) {
					if ((! isset($_POST["btManual"])) and (! isset($_POST["btBorrar"]))){echo "disabled >";}}?>
			</td>
				&nbsp
			</td>
		</tr>
		<tr>
			<td colspan="5">&nbsp</td>
		</tr>
		<tr>
			<td colspan="2" align="center" width="46">
				<input type="radio" name="btapuesta" value="simple" <?php echo $check1." ".$rad; ?> ><br />Sencilla
			</td>
			<td>
				&nbsp
			</td>
			<td colspan="2" align="center" width="46">
				<input type="radio" name="btapuesta" value="multiple" <?php echo $check2." ".$rad; ?> ><br />M&uacute;ltiple
			</td>
			
		</tr>
		<tr>
			<td align="center" colspan="5">
				<INPUT NAME="btManual" TYPE="SUBMIT" VALUE="Manual" <?php if (isset($A)) {echo $A;} 
																		   else {echo "";} ?> >
				&nbsp
				<INPUT NAME="btGenerar" TYPE="SUBMIT" VALUE="Generar" <?php if (isset($B)) {echo $B;}
																			 else {echo "";} ?> >
				<INPUT NAME="btValidar" TYPE="SUBMIT" VALUE="Validar" <?php if (isset($C)) {echo $C;}
																			 else {echo "hidden";} ?> >
				&nbsp
				<INPUT NAME="btCancelar" TYPE="SUBMIT" VALUE="Cancelar" <?php if (isset($D)) {echo $D;}
																			   else {echo "hidden";} ?> >
				&nbsp
				<INPUT NAME="btBorrar" TYPE="SUBMIT" VALUE="Borrar" <?php if (isset($E)) {echo $E;}
																		   else {echo "hidden";} ?> >
			</td>
		</tr>
	</TABLE>
</FORM>

</body>
</html>
