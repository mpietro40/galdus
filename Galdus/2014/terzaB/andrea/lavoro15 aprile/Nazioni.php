<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}
table, th, td, tr{
border: solid 2px blue;
}
table{
border-collapse:collapse;
}
</style>
<title>Nazione</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>

<?php

try
{
//connect the database.
$conn=mysql_connect("localhost","root","");
echo "<h2>DB connesso</h2>";
//selezioniamo il database su cui lavorare
$sql = "USE lpwDB";
$ok =mysql_query($sql,$conn);
if (!$ok)
die("<br>imposs. selezionare DB: ".mysql_error()); 
else
echo "<br>selezionato il database su cui lavorare lpwDB<br>";

//Add a new table to the database called Nazioni
$sql="CREATE TABLE Nazioni(
id int PRIMARY KEY,
nazione varchar(32),
capitale varchar(32))";

// stampa di controllo
echo "query SQL: $sql";
//esecuzione della query
$ok= mysql_query($sql,$conn);
if (!$ok) 
die("Errore query: ".mysql_error());
else{
echo "<h2>Tabella Nazioni creata</h2>";
}

// Close the connection before leaving
mysql_close($conn);
echo "<h3>Connessione chiusa<h3>";

}catch(Exception $e) {
die('Errore connessione DB');
}
?>
</body>
</html>