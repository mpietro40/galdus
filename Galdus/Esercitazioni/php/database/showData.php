<html>
<head>
<title>Mostro i dati inseriti nella tabella</title>
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
echo "<h2>DB PRONTO</h2>";
}
catch(Exception $e)
{
die($e);
}

//Read all of the data from the table and print it in an HTML table
$query = "SELECT * FROM indirizzi;";
echo "la query eseguita e': <span class=codice>".$query."</span><p>";
if($result = $database->query($query)){
print "<table>";
print "<tr><th>PID</th><th>Nome</th><th>Cognome</th><th>Indirizzo</th><th>Citt&agrave;</th><th>CAP</th></tr>";
while($row=$result->fetchArray(SQLITE3_ASSOC)){
print "<tr><td>{$row['PID']}</td><td>{$row['nome']}</td><td>{$row['cognome']}</td><td>{$row['indirizzo']}</td><td>{$row['citta']}</td><td>{$row['cap']}</td></tr>";
}
print "</table>";
}
else{
die($error);
}

?>
</body>
</html>