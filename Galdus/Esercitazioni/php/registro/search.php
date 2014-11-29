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
<title>Caricamento dati e visualizzazione Nazione ricercata</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>

<?php

try{
// Recupero i dati dal form precedente, se qualche dato e' mancante lo setto a default value
$capitale=$_POST['capitale'];
echo "capitale inserita: ".$capitale;
if(empty($capitale)||!is_string($capitale)){
$capitale="Roma";
 }

//************************ DATA BASE ***********************+
//connect to the database.
$conn=mysql_connect("localhost","root","");
echo "<h2>DB connesso</h2>";
//selezioniamo il database su cui lavorare
$sql = "USE lpwDB";
$ok =mysql_query($sql,$conn);
if (!$ok)
  die("<br>imposs. selezionare DB: ".mysql_error()); 
else
  echo "<br>selezionato il database su cui lavorare lpwDB<br>";
  
// Recupero la nazione
$sql="SELECT nazione FROM nazioni WHERE capitale='$capitale'";
// stampa di controllo
echo "query SQL: $sql"."<br>";
//esecuzione della query
$res=mysql_query($sql,$conn);
if (!$res) 
	die("Errore query: ".mysql_error());
//recupero i record inseriti (se presenti)
$rows=mysql_num_rows($res);
echo " sono stati trovati $rows record<br>";
if ($rows==0) {
  // controllo se la risposta è vuota
  echo "<h3>non ci sono record</h3>";
} else{
   $row=mysql_fetch_array($res);
   $nazione=$row['nazione'];
}
echo "<h1>La nazione della capitale $capitale e': $nazione</h1>";
//******************************************************

// Close the connection before leaving
mysql_close($conn);
echo "<h3>Connessione chiusa<h3>";

}catch(Exception $e) {
   die('Errore connessione DB');
}

?>
</body>
</html> 