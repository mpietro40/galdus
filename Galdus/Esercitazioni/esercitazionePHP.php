<!DOCTYPE html>
<html>
<title>Sito di Pietro Maffi</title>
<meta keyword="Galdus, scuola, informatica, reti e sistemi, Pietro Maffi">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel='stylesheet' href='/css/3colonneColorGaldus.css' type='text/css' />
<link rel='stylesheet' href='/css/site.css' type='text/css' />
<link rel="stylesheet" href="/css/menu_style.css" type="text/css" />
<script language="javascript" src="/js/js.js"></script>

<style>
/*cambio stile menu verticale specifico per la pagina */
div#navigation a{
font-size:12px;
color:#FFCC33;
font-weight: bold; 
text-decoration: none
}
.folders{
  margin:auto;
}

</style>
</head>
<body>
<?php
ini_set('include_path', '/home/galdusmaffi.tk/public/');
include 'template/page1.php';

?>
<!-- Insert here your content in html-->
<h2>Verifica PHP</h2>
Scrivere uno script in php che una volta avviato, consente di mostrare i seguenti dati:
<ol>
<li>Il nome e tutte le altre informazioni disponibili del browser che apre la pagina</li>
<li>Il nome della pagina chiamata</li>
<li>L'indirizzo IP del utente che ha fatto la richiesta</li>
<li>Se disponibile l'indirizzo di provenienza</li>
<li>La stampa di un parametro "nome" passato in GET alla pagina</li>
</ol>
<div style="width:600px;border:solid 1px black;margin:auto;padding:10px;">
<h2>Esempio di pagina attesa</h2>
<h4 style="color:red;">
<ul>
<li>
<?php

echo $_SERVER['HTTP_USER_AGENT']."</li><li>";
echo $_SERVER['SCRIPT_NAME']."</li><li>";
echo $_SERVER['REMOTE_ADDR']."</li><li>";
echo getenv('HTTP_X_FORWARDED_FOR')." - se e' presente un proxy va bene questo </li><li>";
echo $_SERVER['HTTP_REFERER']." - se chiamata direttamente e' vuota </li><li>";
echo $_GET['nome']." - e' il valore del parametro nome passato</li>";
echo "</ol></h4></div>";

include 'template/page2.php';

?>

</body>
</html>
