<html>
<head>
<title>Media Aritmética v.1.0 BETA</title>
</head>
<body>
<?php
$number_a=$_POST['numero1'];
$number_b=$_POST['numero2'];
$number_c=$_POST['numero3'];
$number_d=$_POST['numero4'];
$number_e=$_POST['numero5'];
$number_f=$_POST['numero6'];
$number_g=$_POST['numero7'];
$number_h=$_POST['numero8'];
$number_i=$_POST['numero9'];
$number_j=$_POST['numero10'];

$division=array("$number_a", "$number_b", "$number_c", "$number_d", "$number_e", "$number_f", "$number_g", "$number_h", "$number_i", "$number_j");

$elementnumber=count($division);

$resultado=$number_a+$number_b+$number_c+$number_d+$number_e+$number_f+$number_g+$number_h+$number_i+$number_j/$elementnumber;

echo "El resultado obtenido es $resultado"
?>


<h1>Media aritmética v.1.0 BETA</h1>
<form action="50.php" method="post">
Números:
<input type="text" name="numero1">
<input type="text" name="numero2">
<input type="text" name="numero3">
<input type="text" name="numero4">
<input type="text" name="numero5">
<input type="text" name="numero6">
<input type="text" name="numero7">
<input type="text" name="numero8">
<input type="text" name="numero9">
<input type="text" name="numero10">
<input type="submit" value="calcular">
</form>
</body>
</html>