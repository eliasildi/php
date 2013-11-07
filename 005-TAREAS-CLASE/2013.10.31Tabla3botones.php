<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Elias TAREA en Clase</title>
</head>
<body>

<?php


if ( isset($_POST["A"])) {

	$activarpasarb="hidden";
	$activarpasarc="";
	$activarpasara="hidden";
	}
	

if ( isset($_POST["B"])) {
	
		$activarpasarb="hidden";
		$activarpasarc="hidden";
		$activarpasara="";
	}
	
	

if ( isset($_POST["C"])) {
	
		$activarpasarb="";
		$activarpasarc="hidden";
		$activarpasara="hidden";
	}
?>



	<form action="" method=post>
		<table align=center border="1">
				<tr align=center>
					
					<td width=400 colspan=3><input textarea="500" type="text" name="texto"></td>
				</tr>
				
				<tr align=center>
					<td bgcolor="FF5500"><input type="submit" name="A" value="PASARB" <?php if (isset($activarpasarb)) echo $activarpasarb; else echo " ";?>></td>
					<td bgcolor="445566"><input type="submit" name="B" value="PASARC" <?php if (isset($activarpasarc)) echo $activarpasarc; else echo "hidden"; ?>></td>
					<td bgcolor="996644>"><input type="submit" name="C" value="PASARA" <?php if (isset($activarpasara)) echo $activarpasara; else echo "hidden"; ?>></td>
				</tr>
				
				<tr align=center>
				</tr>
		</table>
	</form>	
</body>
</html>