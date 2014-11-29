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
</head>

<body>

&nbsp;<p>

<?php
try{
//includo il file php che prepara la connessione
//include('openConn.php'); // non funziona negli esempi a scuola
//************************************
//connect the database.
$conn=mysql_connect("localhost","root","");
echo "<h2>DB connesso</h2>";
//selezioniamo il database su cui lavorare
$sql = "USE lpwDB";
$ok =mysql_query($sql,$conn);
if (!$ok)
die("<br>imposs. selezionare DB: ".mysql_error()); 
else
echo "<br>selezionato il database su cui lavorare lpwDB<br>"; //************************************ try{
//******************************************************+
// Recupero massimo id da usare per nuovo inserimento
//Read all of the data from the table and print it in an HTML table
$sql="SELECT max(id) as count FROM nazioni";
// stampa di controllo
echo "query SQL: $sql"."<br>";
//esecuzione della query
$res=mysql_query($sql,$conn);
if (!$res) 
die("Errore query: ".mysql_error());

$id=0;
//recupero i record inseriti (se presenti)
$rows=mysql_num_rows($res);
echo "sono stati trovati $rows record<br>";
if ($rows==0) {
// controllo se la risposta è vuota
echo "<h3>non ci sono record</h3>";
} else{
$row=mysql_fetch_array($res);
$id=$row['count']+1;
}
echo $id." e' il nuovo id <br>";
//******************************************************

// Recupero i dati dal form precedente, se qualche dato e' mancante lo setto a default value
$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$numero=$_POST['telefono'];
echo "nome: ".$nome." - cognome: ".$cognome." - telefono: ".$numero;
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
//Inserisco i valori nella tabella
// agenda ( , nome CHAR(40), cognome CHAR(40), indirizzo CHAR(40), citta CHAR(40), cap INT )
$sql="INSERT INTO agenda(id, nome, cognome, telefono)
VALUES ('$id','$nome','$cognome','$numero')";
// stampo la query che eseguiro'
echo "<h2>Queste sono le query di inserimento dati</h2>";
echo "$sql"."<br>";
//esecuzione della query
$ok=mysql_query($sql,$conn);
if (!$ok) 
die("Errore query: ".mysql_error());
else
print "<h2>Dati inseriti</h2>";

echo "<h2>Mostro i dati inseriti</h2>";

//This will sho the data present in the DB
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