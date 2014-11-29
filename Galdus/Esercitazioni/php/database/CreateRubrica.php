<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}

</style>
<title>XAMPP phonebook</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>
<h1><?php echo "Cerazione della tabella"?></h1>

In questa pagina avviene la chiamata per la creazione della tabella nel database.
<br>
Se tutto procede correttamente viene mostrata la scritta 
<br>
Creazione eseguita
<br>
Altrimenti un errore

<?php

$sql = "CREATE TABLE indirizzi
(
PID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(PID),
nome CHAR(40),
cognome CHAR(40),
indirizzo CHAR(40),
citta CHAR(40),
cap INT
)";
echo "<br> La query di creazione e' la seguente:<br>".$sql;

//create the database.


if(!($db=new SQLite3('sqlite/rubrica.sqlite3', '0666'))) {
  echo "<h2>"."Prova inserimento dati"."</h2>";
  die($error);
   
} 

	//Add a new table to the database called Dogs
	if(!$db->query($sql))
	{
        echo "<h1>DB Creato</h1>";
	die();
	}else{
        echo "Tabella gia' esistente";
        }
        //verifico che la tabela e' stata creata
        
$result=$db->query("SELECT id,nome,cognome,indirizzo, citta, cap FROM indirizzi ORDER BY cognome;");

$i=0;
while( $row=$result->fetchArray(SQLITE3_ASSOC) )
{
echo "<table>";
?>
<tr bgcolor=#f87820>
<td><img src=img/blank.gif width=10 height=25></td>
<td class=tabhead><img src=img/blank.gif width=150 height=6><br><b>Nome</b></td>
<td class=tabhead><img src=img/blank.gif width=150 height=6><br><b>Cognome</b></td>
<td class=tabhead><img src=img/blank.gif width=150 height=6><br><b>Indirizzo</b></td>
<td class=tabhead><img src=img/blank.gif width=50 height=6><br><b>Citt&agrave;</b></td>
<td class=tabhead><img src=img/blank.gif width=50 height=6><br><b>CAP</b></td>
</tr>
<?php

if($i>0)
{
echo "<tr valign=bottom>";
echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=6><img src=img/blank.gif width=1 height=1></td>";
echo "</tr>";
}
echo "<tr valign=center>";
echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";
echo "<td class=tabval><b>".htmlspecialchars($row['nome'])."</b></td>";
echo "<td class=tabval>".htmlspecialchars($row['cognome'])."&nbsp;</td>";
echo "<td class=tabval>".htmlspecialchars($row['indirizzo'])."&nbsp;</td>";
echo "<td class=tabval>".htmlspecialchars($row['citta'])."&nbsp;</td>";
echo "<td class=tabval>".htmlspecialchars($row['cap'])."&nbsp;</td>";

echo "</tr>";
$i++;

}

echo "<tr valign=bottom>";
echo "<td bgcolor=#fb7922 colspan=6><img src=img/blank.gif width=1 height=8></td>";
echo "</tr>";
echo "</table>";

        
       

	$db->close();


//} catch(Exception $e)	{
        //in caso di errore lo memorizzo
//	die($error);
//}


?>

</body>
</html>
