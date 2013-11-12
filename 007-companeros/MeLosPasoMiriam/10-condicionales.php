<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Condicionales en PHP</title>
</head>
<body>
<h1>Uso de condicionales en PHP</h1>
<br />
<?php
$var1 = 13;
if ($var1 < 0)
    {          // si se ejecuta mas de 1 instrucción se ponen las llaves
        print "La variable tiene valor negativo $var1 <br />";
    } 
else
    if ($var1 == 0)
        print "La variable tiene el valor 0 $var1 <br />";
    else
        print "La variable tiene un valor positivo $var1 <br />";
?>

// uso de elseif
// ejemplo igual al de arriba pero donde se usa elseif

<?php
$var1 = 0;
if ($var1 < 0)
    {
        print "La variable tiene valor negativo $var1 <br />";
    } 
elseif ($var1 == 0)
        print "La variable tiene el valor $var1 <br />";
    else
        print "La variable tiene un valor positivo $var1 <br />";

?>

</body>
</html>