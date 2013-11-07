<TABLE align="center" border="1">
<tr>
<td align="center" width="30"><td/>
<td align="center" width="30">0<td/>
<td align="center" width="30">1<td/>
<td align="center" width="30">2<td/>
<td align="center" width="30">3<td/>
<td align="center" width="30">4<td/>
<td align="center" width="30">5<td/>
<td align="center" width="30">6<td/>
<td align="center" width="30">7<td/>
<td align="center" width="30">8<td/>
<td align="center" width="30">9<td/>

<?php
	for ($i=32; $i<=126; $i=$i+1) {
		if (($i % 10)== 2) {?>
	</tr>
	<tr>
		<td align="center" width="30"><?php echo $i; ?></td>
		<?php
		}
		?>
			<td align="center" width="30"><?php echo chr($i); ?></td>
		<?php
		}
		?>

</tr>
</TABLE>







<?php

$n=0;
$cuenta=1;
for ($i=32; $i<=255; $i=$i+1) {
	$n=chr($i);
	echo "$n ";
	if (($cuenta % 10) == 0){
		echo "<br/>";
}
$cuenta++;
}



echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

#ASCCI

$n=0;

for ($i=32; $i<=255; $i=$i+1) {
	$n=chr($i);
	echo "$i ASCII, $n<br/>";
}

?>