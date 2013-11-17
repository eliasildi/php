<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>

<?php
	$x = array(1,23,28,32,37,39,48);
	for ($i=0; $i <= 6; $i++) {
		if ($i==0) echo $x[1]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[5]." ".$x[6]."<br />";
		if ($i==1) echo $x[0]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[5]." ".$x[6]."<br />";
		if ($i==2) echo $x[0]." ".$x[1]." ".$x[3]." ".$x[4]." ".$x[5]." ".$x[6]."<br />";
		if ($i==3) echo $x[0]." ".$x[1]." ".$x[2]." ".$x[4]." ".$x[5]." ".$x[6]."<br />";
		if ($i==4) echo $x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[5]." ".$x[6]."<br />";
		if ($i==5) echo $x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[6]."<br />";
		if ($i==6) echo $x[0]." ".$x[1]." ".$x[2]." ".$x[3]." ".$x[4]." ".$x[5]."<br />";
	}
	
	
	echo "otra forma de hacelo mas bonito <br /><br />";
	
	for ($i=0; $i <= 6; $i++) {
		if ($i != 0) echo $x[0]. " ";
		if ($i != 1) echo $x[1]. " ";
		if ($i != 2) echo $x[2]. " ";
		if ($i != 3) echo $x[3]. " ";
		if ($i != 4) echo $x[4]. " ";
		if ($i != 5) echo $x[5]. " ";
		if ($i != 6) echo $x[6]. " ";
		echo "<br />";
		
	}
?>




</body>
</html>
