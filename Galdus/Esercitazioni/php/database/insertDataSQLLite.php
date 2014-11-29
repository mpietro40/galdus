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
try
{
//create the database.
//this will generate the database file in the directory in which this script exists.
//If this file already exists, the database will be opened on this file.
  $database = new SQLiteDatabase('sqlite/dogsDb.sqlite', 0666, $error);
  echo "<h2>DB creato</h2>";
}
catch(Exception $e)
{
  die($error);
}

//Inserisco i valori nella tabella
//  indirizzi ( , nome CHAR(40), cognome CHAR(40), indirizzo CHAR(40), citta CHAR(40), cap INT )
$query = "INSERT INTO indirizzi(PID, nome, cognome, indirizzo, citta, cap) VALUES (1, 'Labrador', 'Tank', 'via Pinco Pallo','Milano', 20100); " .
"INSERT INTO indirizzi(PID, nome, cognome, indirizzo, citta, cap) VALUES (2, 'Husky', 'Glacier', 'via Pinco Pallino','Pavia', 27100); " .
"INSERT INTO indirizzi(PID, nome, cognome, indirizzo, citta, cap) VALUES (3, 'Golden-Doodle', 'Ellie', 'via Rossi','Milano', 20190)";

// stampo la query che eseguiro'
echo "<h2>Queste sono le query di inserimento dati</h2>";
echo "$query"."<br>";

if(!$database->queryExec($query, $error)){
	die($error);
}
print "<h2>Dati inseriti</h2>";
//Read all of the data from the table and print it in an HTML table
$query = "SELECT * FROM indirizzi";
if($result = $database->query($query, SQLITE_BOTH, $error)){
	print "<table>";
	print "<tr><th>PID</th><th>Nome</th><th>Cognome</th><th>Indirizzo</th><th>Citt&agrave;</th><th>CAP</th></tr>";
	while($row = $result->fetch()){
	  print "<tr><td>{$row['PID']}</td><td>{$row['nome']}</td><td>{$row['cognome']}</td><td>{$row['indirizzo']}</td><td>{$row['citta']}</td><td>{$row['cap']}</td></tr>";
	}
	print "</table>";
}
else{
	die($error);
}

$delete = $_GET["elimina"];
if($delete!="no"){
$query = "DELETE FROM indirizzi";
if(!$database->queryExec($query, $error)){
	die($error);
}

}
?>
<a href="insertData.html">sorgente</a>
</body>
</html>