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
<title>Gestione di una rubrica</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>
<a href="creaTabella.html">Sorgente</a>
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

//Add a new table to the database called Dogs
try{
  $query='CREATE TABLE indirizzi(PID INTEGER NOT NULL, nome CHAR(40), cognome CHAR(40), indirizzo CHAR(40), citta CHAR(40), cap INTEGER)';
  if(!$database->queryExec($query, $error)){
    die($error);
  }
}
catch(Exception $e)
{
  die($error);
}
echo "<h2>Tabella indirizzi creata</h2>";

?>
<a href="creaTabella.html">Sorgente</a>
</body>
</html>