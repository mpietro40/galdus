<html>
<head>
<title> Provare a caricare dati nel DB SQL Lite</title>
</head>
<body>

<?php
//Creo il riferimento al database

try 
{
	if(!($db=new SQLite3('sqlite/pietro.sqlite3', '0666')))
	{
		echo "<h2>".$TEXT['Pietro-error']."</h2>";
		die();
	}
 }
catch(Exception $e) 
{
  echo "errore";
  die($e);
}
/*
$db->query("begin;
     create table nomiCorti (id integer primary key, nome varchar(255));
	 insert into nomiCorti (nome) values ('uno');
	 insert into nomiCorti (nome) values ('due');
	 insert into nomiCorti (nome) values ('tre');
	 commit;");
*/
$firstname=$db->escapeString(@$_REQUEST['nome']);
if($firstname!=""){
   $db->query("begin;
	  insert into nomiCorti (nome) values ('$firstname');
	  commit;");
} 
$risult=$db->query("select * from nomiCorti");

while($row=$risult->fetchArray(SQLITE3_ASSOC)) { // restituisce true se non siamo alla fine del set di dati
	$dati=$row["nome"];
	print_r($dati);
	print("<br>");
	
}

$db->close();
unset($db);

?>
<form nae=f1 action="salvaDati.php">
<input type="text" name="nome">
<input type="submit">
</form>
</body>
</html>