<!doctype html>
<html>
<head>
<style>
h4{
color:#f00;
font-size:16px;
}
table, td, tr, th{
border: solid 2px blue;
}
table{
border-collapse:collapse;
}
</style>
<title>Caricamento dati e visualizzazione dati inseriti con controllo di sicurezza</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>

<?php
//includo il file php che prepara la connessione
include('openConn.php');
try{
//recupero dati dal form precedente
$id=$_POST['id'];
//controllo dato numerico altrimenti cancello un dato non esistente
if(!is_numeric($id)){
   echo("<h4>E' consentito cancellare solo id numerici</h4>");
   $id=0;
} else{
//Elimino i valori nella tabella con id letto
$sql="DELETE FROM agenda where id=$id";
// stampa di controllo
echo "query SQL: $sql"."<br>";
//esecuzione della query
$res=mysql_query($sql,$conn);
if (!$res) 
	die("Errore query: ".mysql_error());
else
   echo "Cancellato <br>";
   
}//Fine id non numerico

include("showdata.php"); 
 
// Close the connection before leaving
mysql_close($conn);
echo "<h3>Connessione chiusa<h3>";

}catch(Exception $e) {
   die('Errore connessione DB');
}

?>

</body>
</html> 