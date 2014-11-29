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
<script>
function sicuro(id1){
  alert("sei sicuro di voler cancellare i dati per id = "+id1);
}
</script>
<title>Caricamento dati per aggiornamento</title>
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//includo il menu
include('menu.php');

//includo il file php che prepara la connessione
include('openConn.php');
try{
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
      print "<table>\n";
      print "<tr><th>PID</th><th>Nome</th><th>Cognome</th><th>Telefono</th><th>Aggiorna</th></tr>\n";
      //ciclo su tutti i record
	while ($row=mysql_fetch_assoc($res)) {
	        $iter=$row['id'];
		print "<form name='f$iter' method='post' action='updateData.php'>\n";
		print "<tr><td>$iter<input type='hidden' name='id' value='$iter'></td>\n";
		print "<td><input type='text' value='{$row['nome']}' name='nome'></td>\n";
		print "<td><input type='text' value='{$row['cognome']}' name='cognome'></td>\n";
		print "<td><input type='text' value='{$row['telefono']}' name='telefono'></td>\n";
		print "<td><input type='submit' name='invia' value='Modifica' onclick='sicuro($iter)'></td></tr></form>\n";

	}
	print "</table>";
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