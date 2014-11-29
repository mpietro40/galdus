<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}

table{
border-collapse:collapse;
}
</style>
<title>Gestione di una rubrica</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>
<h1><?php echo "Primo esempio php"?></h1>

<?php

//    Copyright (C) 2003-2004 Kai Seidler, oswald@apachefriends.org
//
//    This program is free software; you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation; either version 2 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program; if not, write to the Free Software
//    Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.

	if(!($db=new SQLite3('sqlite/rubrica.sqlite3', '0666')))
	{
		echo "<h2>"."Prova inserimento dati"."</h2>";
		die();
	}
?>
<h2>I miei numeri telefonici</h2>

<table cellpadding=0 cellspacing=0>
<tr bgcolor=#f87820>
<td><img src=img/blank.gif width=10 height=25></td>
<td class=tabhead><img src=img/blank.gif width=150 height=6><br><b>Cognome</b></td>
<td class=tabhead><img src=img/blank.gif width=150 height=6><br><b>Nome</b></td>
<td class=tabhead><img src=img/blank.gif width=150 height=6><br><b>Numero telefonico</b></td>
<td class=tabhead><img src=img/blank.gif width=50 height=6><br><b>Comando</b></td>
<td><img src=img/blank.gif width=10 height=25></td>
</tr>


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

	$result=$db->query("SELECT id,firstname,lastname,phone FROM users ORDER BY lastname;");
	
	$i=0;
	while( $row=$result->fetchArray(SQLITE3_ASSOC) )
	{
		if($i>0)
		{
			echo "<tr valign=bottom>";
			echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=6><img src=img/blank.gif width=1 height=1></td>";
			echo "</tr>";
		}
		echo "<tr valign=center>";
		echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";
		echo "<td class=tabval><b>".htmlspecialchars($row['lastname'])."</b></td>";
		echo "<td class=tabval>".htmlspecialchars($row['firstname'])."&nbsp;</td>";
		echo "<td class=tabval>".htmlspecialchars($row['phone'])."&nbsp;</td>";

		echo "<td class=tabval><a onclick=\"return confirm('"."'Sicuro?'"."');\" href=rubrica.php?action=del&id=".$row['id'].">
<span class=red>["."CANCELLA"."]</span></a></td>";
		echo "<td class=tabval></td>";
		echo "</tr>";
		$i++;

	}

	echo "<tr valign=bottom>";
        echo "<td bgcolor=#fb7922 colspan=6><img src=img/blank.gif width=1 height=8></td>";
        echo "</tr>";

	$db->close();

?>

</table>

<h2><?php print "Inserisci dati"?></h2>

<form action=rubrica.php method=get>
<table border=0 cellpadding=0 cellspacing=0>
<tr><td>Cognome:</td><td><input type=text size=20 name=lastname></td></tr>
<tr><td>Nome:</td><td> <input type=text size=20 name=firstname></td></tr>
<tr><td>Numero telefonico:</td><td> <input type=text size=20 name=phone></td></tr>
<tr><td></td><td><input type=submit border=0 value="AGGIUNGI"></td></tr>
</table>
</form>
<h2>Spiegazione</h2>
Il codice sorgente di questa pagina php e' disponibile a questo link: 
<a href="sorgente.html">Visualizza il sorgente</a><br>
Per renderlo funzionante nella propria area e' necessario copiare nella cartella sqlite il seguente file 
<a href="sqlite/rubrica.sqlite3">database</a> per salvarlo con il mouse sopra il link premere il tasto destro 
e scegliere salva il file senza aprirlo.
<p>
Per poter salavare i dati in un database e' necessario che lo stesso sia prima stato creato.
<br>Le istruzioni per crearlo sono:<br>
<span class="codice">CREATE TABLE nome_tabella(<br>
nome_campo1 tipo_campo1 vincoli_colonna, <br>
nome_campo2 tipo_campo2 vincoli_colonna, <br>
.....

);
COMMIT;<br>

</span>
<h3>La create nel nostro caso e'</h3>
<span class="codice">CREATE TABLE users(<br>
id INT PRYMARY KEY,<br>
firstname VARCHAR(40),<br>
lastname VARCHAR(40),<br>
phone VARCHAR(40)<br>
);<br>
</span>
<p>
Questa operazione viene normalmente eseguita da un DBA (Database Administrator) uno che ha la responsabilita' di 
creare e modificare la struttura dei dati, decidere chi ha accesso a quali dati e cosa puo' fare con i dati.<br>

Le altre operazioni in vece di inserimento dati e di modifica o cancellazione sono da controllare nel nostro PHP


</body>
</html>
