<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
try{
$conn=mysql_connect("localhost",'root','');
$sql='USE lpwDB';
$ris=mysql_query($sql,$conn);
if(!$ris)
die("errore".mysql_error());

$capitale=$_POST['Capitale'];
echo $capitale;
$sql="SELECT nazione FROM nazioni WHERE capitale='$capitale'";
$ris=mysql_query($sql,$conn);
if(!$ris)
die("errore".mysql_error());
$row=mysql_num_rows($ris);
echo $row."valore letto";
$row=mysql_fetch_array($ris);
$nazione=$row['nazione'];
echo"<h1> La nazione della Capitale $capitale è :$nazione<h1>";
mysql_close($conn);
} catch(Exception $e) {
die('Errore connessione DB');
}
?>
</body>
</html>