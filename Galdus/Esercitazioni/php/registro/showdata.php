<?php
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
      print "<table>";
      print "<tr><th>PID</th><th>Nome</th><th>Cognome</th><th>Telefono</th></tr>";
      //ciclo su tutti i record
	while ($row=mysql_fetch_assoc($res)) {
		print "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['cognome']}</td>";
		print "<td>{$row['telefono']}</td></tr>";

	}
	print "</table>";
}
?>