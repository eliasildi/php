<html>
	<body>
			<?php 
			
		if (isset($_POST["A"])) {
			$A = "hidden";
			$B = "";
			$C = "hidden";
		}
		
		if (isset($_POST["B"])) {
			$A = "hidden";
			$B = "hidden";
			$C = "";
		}
		
		if (isset($_POST["C"])) {
			$A = "";
			$B = "hidden";
			$C = "hidden";
		}
		?>
		<form action="[Practica]Cuadro de Texto.php" method="POST">
		<center>
			<table>
				<tr align="center">
					<td>
						<input type="text" value="texto" size="15">
					</td>
				</tr>
				<tr align="center">
					<td>
						<input type="submit" name="A" value="Pasar B" <?php if (isset($A)) echo $A;
																			else echo "";?> >
						<input type="submit" name="B" value="Pasar C" <?php if (isset($B)) echo $B;
																			else echo "hidden";?> >
						<input type="submit" name="C" value="Pasar A" <?php if (isset($C)) echo $C;
																			else echo "hidden";?> >
					</td>
				</tr>
			</table>
		</center>
		</form>
	</body>
</html>

