<html>
<body>
<table border=2px>
<tr>
	<td width="30"></td>
	<td width="30">0</td>
	<td width="30">1</td>
	<td width="30">2</td>
	<td width="30">3</td>
	<td width="30">4</td>
	<td width="30">5</td>
	<td width="30">6</td>
	<td width="30">7</td>
	<td width="30">8</td>
	<td width="30">9</td>
	<?php
	for ($i=32; $i<=255; $i++) {
		if (($i%10)==2) {
	?>
</tr>
<tr>
	<td width="30"><?php echo $i; ?></td>
	<?php 
		}
	?>
	<td width="30"><?php echo chr($i); ?></td>
	<?php 
		}
	?>
</tr>
</table>
</body>
</html>