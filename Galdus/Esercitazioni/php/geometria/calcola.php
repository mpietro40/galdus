<!doctype html>
<html>
<head>
<title>Calcolo geometrico</title>
<link href="../database/xampp.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php 

$l1=$_POST["lato1"];
$l2=$_POST["lato2"];
if($l1==$l2)
$msg=" e' un quadrato ";
else
$msg=" e' un rettangolo ";

$area=$l1*$l2;
$perimetro=($l1+$l2)*2;

?>

Carissimo <?php echo $_REQUEST["name"]; ?>!<br>
la figura di cui hai inserito i lati:<br>
<?php echo $msg; ?>!<br>
la sua area vale: <?php echo $area; ?> ed il perimetro <?php echo $perimetro; ?>

<p>
<a href="sorgente.html">Vedi il sorgente di questa pagina</a>
</p>
</body>
</html> 