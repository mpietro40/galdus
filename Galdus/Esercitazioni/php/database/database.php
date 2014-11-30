<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!-- Qui devono essere inserite tutte le informazioni per il browser -->
<title>La creazione di un sito php e sqlite</title>
<link href="/css/menu_o.css" rel="stylesheet" type="text/css">
<link href="xampp.css" rel="stylesheet" type="text/css">

</head>
<body class=n>
<script type="text/javascript" src="menu/menu.js"></script>
<!--div id="cssmenu">
<ul>
   <li><a href="database.html#"><span>Home</span></a></li>
   <li class="has-sub "><a href="database.html#"><span>Creazione database</span></a>
      <ul>
         <li class="has-sub "><a href="xampp/createDB.html"><span>creare il file</span></a>
         </li>
         <li class="has-sub "><a href="xampp/creaTabella.html"><span>creare la tabella</span></a>
         </li>
      </ul>
   </li>
   <li><a href="xampp/insertData.html"><span>Inserimento dati</span></a></li>
   <li><a href="xampp/showData.html"><span>Visualizzazione dati</span></a></li>
   <li><a href="database.html#"><span>Cancellazione dati</span></a></li>
</ul>
</div-->

<div id=content>
<?php
//ini_set('include_path', '/home/galdusmaffi.tk/public/');
ini_set('include_path', 'D:\\Inetpub\\webs\\pietromafficom\\Galdus\\template\\');
// include site breadcrumb 
include 'breadcrumb.php';
// include folder list
// print space
//print("<p>&nbsp;</p>\n");

?>
  <h1>Creare un sito per la gestione di una biblioteca</h1>
  In questo mini sito spiego a passi come fare un sito in php che consenta di creare e gestire un database sqlite.
  Obiettivo della classe terza e' quello di arrivare ad avere le conoscenze per creare una applicazione 3 tier che consenta la gestione di una biblioteca semplificata.
  Il sito della biblioteca dovra' consentire:
  <ol>
  <li>Inserimento dei libri</li>
  <li>Inserimento degli utenti</li>
  <li>Inserimento dei prestiti (associazione utente libro)</li>
  <li>Visualizzazione dei libri presenti (e un semaforo che indica se e' disponibile o assegnato)</li>
  <li>Visualizzazione degli utenti presenti (e un semaforo che indica se ha dei libri da piu' di 30 gg)</li>
  <li>Il cancellamento dei libri</li>
  <li>Il cancellamento degli utenti</li>
  <li>Il cancellamento dei prestiti</li>
  <li>Il test di quanto realizzato</li>
  <li>La definizione di un menu' per accedere alle varie aree</li>

  </ol>
  <h1>Elenco file realizzati per la creazione del sito della biblioteca</h1>
  Si ricorda che la possibilita' di usare SQL lite non e' sempre consentita si potrebbero ottenere alcuni errori.
  <br>In questo caso accedere alla sezione MySql (non affrontata con i ragazzi)
<?php>
include 'folderlist.php';
?>

<h2>Accedere al DB mysql di XAMPP</h2>
Se si vuola accedere al DB MYSQL di XAMPP e' necessario avviare la connessione con questo comando
<br><h3>$conn=mysql_connect("localhost","root","");</h3>

<h2>Suddivisione gruppi classe 3 per realizzazione database biblioteca</h2>
<!--h3>Tabella e pagine per la gestione degli utenti</h3>
Andrea C<br>
Yussef<br>
Mirco<br>
Mishel<br>
Luca<br>
<h3>Tabella e pagine per la  gestione Libri</h3>
Carmine<br>
Valentino<br>
Kaisser<br>
Bravo<br>
Kevin<br>
<h3>Tabella e pagine per la  gestione prestiti</h3>
Africa<br>
Federico<br>
Mohamed<br>
Luis<br>
<h3>Pagine per la visualizzazione utenti con prestiti fatti</h3>
Daniel<br>
Andrea<br>
Emanuele<br>
Andrea G<br>
<h3>Pagine per la visualizzazione dello stato dei libri prestati</h3>
Joel<br>
Maicol<br>
Loai<br>
Gianmaria<br-->
</div>
 </body></html>