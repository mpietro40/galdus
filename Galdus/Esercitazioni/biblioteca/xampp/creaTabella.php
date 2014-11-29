<html>
<head>
<title>Creao la tabella</title>
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

//Add a new table to the database called Dogs
$query='CREATE TABLE indirizzi(PID INTEGER NOT NULL, nome CHAR(40), cognome CHAR(40), indirizzo CHAR(40), citta CHAR(40), cap INTEGER);';

echo "la query eseguita e': <span class=codice>".$query."</span><p>";

if(!$database->exec($query)){
die();
}
echo "<h2>Tabella indirizzi creata</h2>";

?>
</body>
</html>