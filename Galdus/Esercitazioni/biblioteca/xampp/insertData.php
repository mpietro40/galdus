<html>
<head>
<title>Inserisco i dati</title>
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
echo "<h2>DB connesso</h2>";
}
catch(Exception $e)
{
die($e);
}
//Recupero i dati dal form precedente se non sono definiti ne metto a caso alcuni
if (!empty($_GET['nome'])){
$nome=$_GET['nome'];
} else
$nome='Paolo';
//-------------------//
if (!empty($_GET['cognome'])){
$cognome=$_GET['cognome'];
} else
$cognome='Rossi';
//-------------------//
if (!empty($_GET['indirizzo'])){
$indirizzo=$_GET['indirizzo'];
} else
$indirizzo='Via strada rotta';
//-------------------//
if (!empty($_GET['citta'])){
$citta=$_GET['citta'];
} else
$citta='Roma';
//-------------------//
if (!empty($_GET['cap'])){
$cap=$_GET['cap'];
} else
$cap=00145;
//-------------------//
if (!empty($_GET['controllo'])){
$controllo=$_GET['controllo'];
} else
$controllo=0;

//Recupero il massimo dei PID nella tabella ed aggiungo 1 ad ogni inserimento
$query = "SELECT MAX(PID) AS PID FROM indirizzi;";
if(!$database->exec($query)){
  die();
}

//Recupero il valore e lo aumento di uno
if($result = $database->query($query)){
  $row=$result->fetchArray(SQLITE3_ASSOC);
  $PID=$row['PID']+1;
}
//Inserisco i valori nella tabella "indirizzi" (PID INT NOT NULL , nome CHAR(40), cognome CHAR(40), indirizzo CHAR(40), citta CHAR(40), cap INT )
$query = "INSERT INTO indirizzi(PID, nome, cognome, indirizzo, citta, cap) " .
" VALUES ($PID, '$nome', '$cognome', '$indirizzo','$citta', $cap)";

// stampo la query che eseguiro'
echo "<h2>Queste sono le query di inserimento dati</h2>";
echo "la query eseguita e': <span class=codice>".$query."</span><p>";

//Eseguo lì'inserimento solo se c'e' un controllo positivo
if($controllo==1){
   if(!$database->exec($query)){
     die(); 
   }
}
print "<h2>Dati inseriti</h2>";

?>
</body>
</html>