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
<title>Caricamento dati per cancellazione</title>
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>


<?php
//includo il menu
//include('menu.php');

//includo il file php che prepara la connessione
//include('openConn.php');
try{
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
//Read all of the data from the table and print it in an HTML table
//this work only if connection is already open.
$sql="SELECT * FROM agenda";
// stampa di controllo
echo "query SQL: $sql"."<br>";
//esecuzione della query
$res=mysql_query($sql,$conn);
if (!$res) 
die("Errore query: ".mysql_error());

//recupero i record inseriti (se presenti)
$rows=mysql_num_rows($res);
echo "sono stati trovati $rows record";

if ($rows==0) {
// controllo se la risposta è vuota
echo "<h3>non ci sono record</h3>";
}
else {
// altrimenti li visualizzo in una tabella
print "<form name='f2' method='post' action='deleteData.php'><table>";
print "<tr><th>PID</th><th>Nome</th><th>Cognome</th><th>Telefono</th><th>Cancellare?</th></tr>";
//ciclo su tutti i record
while ($row=mysql_fetch_assoc($res)) {
print "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['cognome']}</td>";
print "<td>{$row['telefono']}</td><td><input type=radio name=id value={$row['id']}></td></tr>";

}
print "</table><br><input type=submit name=cancella value='Elimina record selezionato'></form>";
}
// Close the connection before leaving
mysql_close($conn);

}catch(Exception $e) {
die('Errore connessione DB');
}

?>

</body>
</html>