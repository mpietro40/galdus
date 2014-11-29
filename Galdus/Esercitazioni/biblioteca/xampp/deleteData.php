<html>
<head>
<title>Elimino i dati dal DB</title>
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
</head>
<body>
<?php

if (!empty($_GET['PID'])){
$PID=$_GET['PID'];
} else
$PID=1;

try
{
//create the database.
//this will generate the database file in the directory in which this script exists.
//If this file already exists, the database will be opened on this file.
$database = new SQLite3('mysqlitedb.sqlite3', 0666);
echo "<h2>DB creato</h2>";
}
catch(Exception $e)
{
die($e);
}

//Inserisco i valori nella tabella "indirizzi" (PID INT NOT NULL , nome CHAR(40), cognome CHAR(40), indirizzo CHAR(40), citta CHAR(40), cap INT )
$query = "DELETE FROM indirizzi WHERE PID=$PID; ";

// stampo la query che eseguiro'
echo "<h2>Queste sono le query di cancellazione dati con id=$PID </h2>";
echo "la query eseguita e': <span class=codice>".$query."</span><p>";

if(!$database->exec($query)){
die();
}
print "<h2>Dati eliminati per PID=$PID </h2>";

?>
</body>
</html>