<html>
<head>
<title>Accesso DB Pietro</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>
<h1>Esempio accesso DB</h1>

<?php

	if(!($db=new SQLite3('sqlite/pietro.sqlite3', '0666')))
	{
		echo "<h2>".$TEXT['Pietro-error']."</h2>";
		die();
	}
?>

<h2>Alcuni campi da inserire nel DB</h2>

<?php
	$firstname=$db->escapeString(@$_REQUEST['firstname']);
	$lastname=$db->escapeString(@$_REQUEST['lastname']);
	$phone=$db->escapeString(@$_REQUEST['phone']);

	if($firstname!="")
	{
		$db->query("INSERT INTO users (firstname,lastname,phone) VALUES('$firstname','$lastname','$phone')");
	}

	if(@$_REQUEST['action']=="del")
	{
		$db->query("DELETE FROM users WHERE id=".round($_REQUEST['id']));
	}
    $db->query("begin;
	 create table nomi (id integer primary key, nome varchar(255), cognome varchar(255), numero);
	 insert into nomi (nome,cognome,numero) values ('uno','prova',234234);
	 insert into nomi (nome,cognome,numero) values ('due','pippo',44543);
	 insert into nomi (nome,cognome,numero) values ('tre','pluto',35656);
	 commit;");
	$result=$db->query("SELECT * FROM nomi");
	
	$i=0;
	while( $row=$result->fetchArray(SQLITE3_ASSOC) )
	{
		echo "<br>".htmlspecialchars($row['nome'])." - &nbsp;";
		echo htmlspecialchars($row['cognome'])." - &nbsp;";
		echo htmlspecialchars($row['numero'])."&nbsp;";

		echo "<br><a onclick=\"return confirm('".$TEXT['phonebook-sure']."');\" href=pietro.php?action=del&id=".$row['id']."><span class=red>[".$TEXT['phonebook-button1']."]</span></a></td>";
		
		$i++;
	}

	$db->close();

?>

<form action=pietro.php method=get>
<table border=0 cellpadding=0 cellspacing=0>
<tr><td><?php print $TEXT['phonebook-attrib1']?>:</td><td><input type=text size=20 name=lastname></td></tr>
<tr><td><?php print $TEXT['phonebook-attrib2']?>:</td><td> <input type=text size=20 name=firstname></td></tr>
<tr><td><?php print $TEXT['phonebook-attrib3']?>:</td><td> <input type=text size=20 name=phone></td></tr>
<tr><td></td><td><input type=submit border=0 value="<?php print $TEXT['phonebook-button2']?>"></td></tr>
</table>
</form>

</body>
</html>
