<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
		<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>Programaci&oacute;n en PHP</title>
		</head>
		<body>

		<center><h4><b>Ejercicio (IP / BINARIO) realizado por Joel Chávez Perdomo</b></h4></center><br />
		
		<?php 
		
		if (isset($_POST["btraducir"])) {
			
			
			$tablabinario=array(1,2,4,8,16,32,64,128);
			$total=count($tablabinario)-1;
			$p=1;
			$almacendecimal=array();
			
				
			
			while ($p <= 4 ) {
				$valordecimal0=$_POST["bipos".$p];
				$x=0;
				$valordecimal=(int)($valordecimal0);
				$decimal=0;
						while ($x <= $total) {
			
								if ($valordecimal[$x] == 1) {
			
										$decimal=$decimal+$tablabinario[$x];
			
								}
			
								else {
			
			
								}
								$x++;
						
						}
								$almacendecimal[$p]=$decimal;
								$p++;
			
			
			}
			
			
			
			
			
			

				$tabladecimal=array(128,64,32,16,8,4,2,1);
				$totalarray=count($tabladecimal)-1; 
				$j=1;
				$binario=array();
				while ($j <= 4) {
						$valorip = $_POST["ippos".$j]; 
						$i = 0;
						while ($i <= $totalarray) { 
								if ($valorip >= $tabladecimal[$i]) {
								      $binario[$i]="1"; 
								      $valorip = $valorip - $tabladecimal[$i]; 
								}
								else {
								      $binario[$i]="0";
								}
								$i++;	
						}
					
						$almacenbi[$j]=$binario[0].$binario[1].$binario[2].$binario[3].$binario[4].$binario[5].$binario[6].$binario[7];
						$j++;
						
				}
				
				
				
				
				

			   
			   
			   
				
		}
		

		
		?>
		
		<FORM ACTION="traducir_ip_binario_FINAL.php" METHOD=POST>
		
		<table border="1" width="73%" cellspacing="0" cellpadding="0" align="center">
		
		<tr align="center">
		<td>&nbsp IP en Decimal &nbsp</td>
		<td><INPUT size="3" NAME="ippos1" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacendecimal[1]; }  else { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos2" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacendecimal[2]; }  else { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos3" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacendecimal[3]; }  else { echo ""; } ?>"></td>
		<td><INPUT size="3" NAME="ippos4" MAXLENGTH="3" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacendecimal[4]; }  else { echo ""; } ?>"></td>
		
		</tr>
		
		<tr align="center">
		<td>&nbsp IP en Binario &nbsp</td>
		<td><INPUT size="8" NAME="bipos1" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacenbi[1]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }?>"></td>
		<td><INPUT size="8" NAME="bipos2" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacenbi[2]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }?>"></td>
		<td><INPUT size="8" NAME="bipos3" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacenbi[3]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }?>"></td>
		<td><INPUT size="8" NAME="bipos4" MAXLENGTH="8" TYPE="TEXT" VALUE="<?php if (isset($_POST["btraducir"])) { echo $almacenbi[4]; } else { echo ""; } if (isset($_POST["bborrar"])) { echo ""; }?>"></td>
		</tr>
		
		<tr>
			<td colspan="5" rowspan="4" align="center">
			<INPUT NAME="btraducir" TYPE="SUBMIT" VALUE="TRADUCIR">&nbsp&nbsp&nbsp&nbsp&nbsp
			<INPUT NAME="bborrar" TYPE="submit" VALUE="BORRAR">
			</td>
		</tr>
		
		</table>
		</FORM>
		</body>
		</html>