<!doctype html>
<html>
<body>

<?php 

$l1=$_POST["lato1"]; 
$l2=$_POST["lato2"]; 
if($l1==$l2)
$msg=" un quadrato ";
else
$msg=" un rettangolo ";

$area=$l1*$l2;
$perimetro=(($l1+$l2)*2);

?>

Carissimo <?php echo $_REQUEST["name"]; ?>!<br>
la figura di cui hai inserito i lati &egrave;:<br>
<h1> <?php echo $msg; ?></h1><br>
la sua area vale: <?php echo $area; ?> ed il perimetro <?php echo $perimetro; ?>
</body>
</html> 