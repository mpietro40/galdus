<!doctype html>
<html>
<head>
<title>Jheferson Saldivar</title>
</head>
<body>
<?
$a = array( "a", "b", "c", "d",  8=>"e",  4=>"f", "g", 3=>"h");
print_r($a);
?>
<br>
<?
$a[] = "a";
$a[] = "b";
$a[] = 44;
$a[] = "d";
$a[] = "e";
print_r($a);
?>
<br>
<?
$a[] = "a";
$a[] = "b";
$a[] = "c";
$a[] = "d";
$a[8] = "e";
$a[4] = "f";
$a[] = "g";
$a[3] = "h";
print_r($a);
?>

</body>
</html>
