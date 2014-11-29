<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}
table{
border-collapse:collapse;
}
</style>
<title>Creazione Database MySQL</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
try
{
//create the database.
//this will generate the database file in the directory in which this script exists.
//If this file already exists, the database will be opened on this file.
// Step 1 open connection
$conn=mysql_connect("localhost","root","");
echo "DB connesso<br>";
$sql="CREATE DATABASE lpwDB";
$ok=mysql_query($sql,$conn);
if (!$ok){ 
	print("<br>impossibile creare DB: ".mysql_error());
} else
echo "<br>DB creato";

//selezioniamo il database su cui lavorare
$sql = "USE lpwDB";
$ok =mysql_query($sql,$conn);
if (!$ok)
  die("<br>imposs. selezionare DB: ".mysql_error()); 
else
  echo "<br>selezionato il database su cui lavorare lpwDB<br>";

// Close the connection before leaving
mysql_close($conn);
echo "<h3>Connessione chiusa<h3>";

}catch(Exception $e) {
  die('Errore generico');
}

?> 
</body>
</html>