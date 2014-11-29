<html>
<head>
<title>Recuperare i dati da un DB MySql</title>
</head>
<body>

<?
/* dichiariamo alcune importanti variabili per collegarci al database */
$DBhost = "Hostname o IP del tuo database"; $DBuser = "il tuo username"; $DBpass = "la tua password"; $DBName = "il nome del database";

/* specifichiamo il nome della nostra tabella */
$table = "amici";

/* Connettiamoci al database */
mysql_connect($DBhost,$DBuser,$DBpass) or die("Impossibile collegarsi al server"); @mysql_select_db("$DBName") or die("Impossibile connettersi al database $DBName");

/* impostiamo la query e cerchiamo solo le amiche donne...*/
$sqlquery = "SELECT * FROM $table WHERE sex = 'donna'"; $result = mysql_query($sqlquery); $number = mysql_numrows($result);

$i = 0;

if ($number < 1) {
print "<center><p>La ricerca non ha prodotto nessun risultato</p></center>"; }
else {
while ($number > $i) {
$thename = mysql_result($result,$i,"nome"); $theemail = mysql_result($result,$i,"email"); print "<p><b>Nome:</b> $thename<br><b>E-Mail:</b> $theemail</p>"; $i++; }
}
?> </body> </html> 