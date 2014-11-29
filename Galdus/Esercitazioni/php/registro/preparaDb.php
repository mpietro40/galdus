<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}
table{
border-collapse:collapse;
}
</style>
<title>Creazione Database SQL lite</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>
<?php
try
{
//create the database.
//this will generate the database file in the directory in which this script exists.
//If this file already exists, the database will be opened on this file.
// Step 1 open connection
$conn=mysql_connect("localhost","root","");
echo "<h3>DB connesso</h3>";
//Elimino il db se presente
$sql="DROP DATABASE lpwDB";
$ok=mysql_query($sql,$conn);
if (!$ok){ 
print("<br>impossibile creare DB: ".mysql_error());
} else
echo "<h3>DB Eliminato</h3>";
//Creo il DB
$sql="CREATE DATABASE lpwDB";
$ok=mysql_query($sql,$conn);
if (!$ok){ 
print("<br>impossibile creare DB: ".mysql_error());
} else
echo "<h3>DB creato</h3>";

//selezioniamo il database su cui lavorare
$sql = "USE lpwDB";
$ok =mysql_query($sql,$conn);
if (!$ok)
die("<br>imposs. selezionare DB: ".mysql_error()); 
else
echo "<h3>selezionato il database su cui lavorare lpwDB</h3>";

echo "<h3>Preparo il DB creando la tabella Nazioni</h3>";
//Add a new table to the database called agenda
$sql="CREATE TABLE nazioni(
id int PRIMARY KEY,
nazione varchar(32),
capitale varchar(32))";

// stampa di controllo
echo "<h4>query SQL: $sql</h4>";
//esecuzione della query
$ok= mysql_query($sql,$conn);
if (!$ok) 
die("Errore query: ".mysql_error());
else{
echo "<h2>Tabella nazioni creata</h2>";
}
// popolo il database
echo "<h3>Preparo il DB creando la tabella Nazioni</h3>";
$sql="INSERT INTO nazioni(id, nazione, capitale) VALUES (1,'Italia','Roma'), ".
"(2,'Francia','Parigi'), ".
"(3,'UK','Londra'), ".
"(4,'Spagna','Madrid'), ".
"(5,'Grecia','Atene')";
// stampo la query che eseguiro'
echo "<h3>Queste sono le query di inserimento dati</h3>";
echo "$sql"."<br>";
//esecuzione della query
$ok=mysql_query($sql,$conn);
if (!$ok) 
die("<h1>Errore query: </h1>".mysql_error());
else
print "<h2>Dati inseriti</h2>";

//Read all of the data from the table and print it in an HTML table
//this work only if connection is already open.
$sql="SELECT * FROM nazioni";
// stampa di controllo
echo "query SQL: $sql"."<br>";
//esecuzione della query
$res=mysql_query($sql,$conn);
if (!$res) 
	die("Errore query: ".mysql_error());

//recupero i record inseriti (se presenti)
$rows=mysql_num_rows($res);
echo "<h3>Sono stati trovate $rows nazioni";

if ($rows==0) {
// controllo se la risposta è vuota
echo "<h3>non ci sono record</h3>";
}
else {
      // altrimenti li visualizzo in una tabella
      print "<table>";
      print "<tr><th>PID</th><th>Nazione</th><th>Capitale</th></tr>";
      //ciclo su tutti i record
	while ($row=mysql_fetch_assoc($res)) {
		print "<tr><td>{$row['id']}</td><td>{$row['nazione']}</td><td>{$row['capitale']}</td>";
		print "</tr>";
	}
	print "</table>";
}

// Close the connection before leaving
mysql_close($conn);
echo "<h3>Connessione chiusa<h3>";

}catch(Exception $e) {
die('Errore generico');
}
?> 
</body>
</html>