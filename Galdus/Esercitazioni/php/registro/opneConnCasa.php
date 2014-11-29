<?php
//apre e prepara la connessione selezionando il DB
try
{
//connect to the database.
$conn=mysql_connect("localhost","root","");
echo "<h2>DB connesso</h2>";
//selezioniamo il database su cui lavorare
$sql = "USE lpwDB";
$ok =mysql_query($sql,$conn);
if (!$ok)
  die("<br>imposs. selezionare DB: ".mysql_error()); 
else
  echo "<br>selezionato il database su cui lavorare lpwDB<br>";
  
}catch(Exception $e) {
   die('Errore connessione o apertura DB');
}

?>