<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
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
<link href="css/menu.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
//includo il menu
include('menu.php');

//includo il file php che prepara la connessione
include('openConn.php');
try{

// Recupero i dati dal form precedente, se qualche dato e' mancante lo setto a default value
$id=$_POST['id'];
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$numero=$_POST['telefono'];
echo "<h2> Hai scelto ti cambiare i seguenti dati</h2>";
echo "nome: ".$nome." - cognome: ".$cognome." - telefono: ".$numero."<br>";
//$nome=$_POST['nome'];
if(empty($nome)||!is_string($nome)){
$nome="andrea$id";
 }
if(empty($cognome)||!is_string($cognome)){
$cognome="marchetti$id";
}
if(empty($numero)||!is_numeric($numero)){
$numero="056315249$id";
}

//Modifico i valori nella tabella
$sql="UPDATE agenda SET nome='$nome',cognome='$cognome',telefono='$numero' WHERE id='$id' ";
// stampa di controllo
echo "query SQL: $sql"."<br>";
//esecuzione della query
$res=mysql_query($sql,$conn);
if (!$res) 
	die("Errore query: ".mysql_error());
else
   echo "Aggiornato <br>";
   
   
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