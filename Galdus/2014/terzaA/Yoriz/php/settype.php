<!doctype html>
<html>
<head>
<title>settype</title>
</head>	
<body>
<?php 
$a = 231; // da questo momento in poi $a è un intero
if(settype($a,double)){
/*
Se l’operazione è riuscita il valore è TRUE quindi
visualizza il testo seguente. Altrimenti salta alla
fine dell’if riga 10.
*/
echo "<br>valore settato a double. Ecco il nuovo valore: ";
echo $a;
}
?>
</body>
</html>