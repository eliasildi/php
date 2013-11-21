<html>
<body>
	<?php
	$c1=null;
	$c2=null;
	$c3=null;
	$c4=null;
	
	if (isset($_POST["bt1"])){
		$p1=$_POST["b1"];
		$p2=$_POST["b2"];
		$p3=$_POST["b3"];
		$p4=$_POST["b4"];
				
		if ($p1 != ""){
			$c1=$p1;
		}
		if ($p2 != ""){
			$c1=$p2;
		}
		if ($p3 != ""){
			$c1=$p3;
		}
		if ($p4 != ""){
			$c1=$p4;
		}
	}
	if (isset($_POST["bt2"])){
		$p1=$_POST["b1"];
		$p2=$_POST["b2"];
		$p3=$_POST["b3"];
		$p4=$_POST["b4"];
				
		if ($p1 != ""){
			$c1=$p1;
		}
		if ($p2 != ""){
			$c1=$p2;
		}
		if ($p3 != ""){
			$c2=$p3;
		}
		if ($p4 != ""){
			$c3=$p4;
		}
	}
	if (isset($_POST["bt3"])){
		$p1=$_POST["b1"];
		$p2=$_POST["b2"];
		$p3=$_POST["b3"];
		$p4=$_POST["b4"];
				
		if ($p1 != ""){
			$c2=$p1;
		}
		if ($p2 != ""){
			$c3=$p2;
		}
		if ($p3 != ""){
			$c4=$p3;
		}
		if ($p4 != ""){
			$c4=$p4;
		}
	}
	if (isset($_POST["bt4"])){
		$p1=$_POST["b1"];
		$p2=$_POST["b2"];
		$p3=$_POST["b3"];
		$p4=$_POST["b4"];
				
		if ($p1 != ""){
			$c4=$p1;
		}
		if ($p2 != ""){
			$c4=$p2;
		}
		if ($p3 != ""){
			$c4=$p3;
		}
		if ($p4 != ""){
			$c4=$p4;
		}
	}
	?>
	<form ACTION="prueba1.php" METHOD="POST">
	<table>
		<tr>
			<td>
				<input type="text" size="6" name="b1" value=<?php echo $c1; ?> >
				<input type="text" size="6" name="b2" value=<?php echo $c2; ?> >
				<input type="text" size="6" name="b3" value=<?php echo $c3; ?>  >
				<input type="text" size="6" name="b4" value=<?php echo $c4; ?>  >
			</td>
		</tr>
		<tr align="center">
			<td>
				<input type="submit" name="bt1" value="<<" >
				<input type="submit" name="bt2" value="<" >
				<input type="submit" name="bt3" value=">" >
				<input type="submit" name="bt4" value=">>" >
			</td>
		</tr>
	</table>
</body>
</html>