<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Sito di Pietro Maffi - Esercizio web app</title>
<meta keyword="Galdus, scuola, informatica, reti e sistemi, Pietro Maffi">
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
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
}
</style>
</head>
<body>
<?php
ini_set('include_path', '/home/galdusmaffi.tk/public/');
include 'template/page1.php';

?>
<p>
In questa sezione sono riportati alcuni esercizi per apprendere e ripassare alcune caratteristiche importanti delle web app.
</p>

<hr>
<h1>Esercizio sulle web app</h1>
<h3>
Partendo dal materiale disponibile <a href="https://github.com/mpietro40/MyFirstWebsite"> qui<a>, realizzare un mini sito che consenta di inserire in una nuova tabella (materie)
tutte le materie disponibili per un corso.
Deve cioe' essere realizzato un mini sito grazie agli strumenti offerti da XAMPP, ed in particolare PHP e MYSQL, con un menu e le seguenti pagine:
<p>
<ul>
<li>La prima pagina deve spiegare cosa fa questo servizio ed avere i link ai setupDB.</li>
<li>Nella seconda pagina deve essere possibile inserire, una volta registrati, una materia. </li>
<li>Nella terza pagina deve essere visibile un elenco delle materie inserite</li>
</ul>
</h3>

<?php

include 'template/page2.php';

?>

</body>
</html>
