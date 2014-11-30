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

textarea{ 
  background-color:black;
  color:green;
}
.stile{
  background-color:Darkblue;
  color:white;
  width:100%;
  font-family:Comics;
}

</style>
</head>
<body>
<?php
ini_set('include_path', 'D:\\Inetpub\\webs\\pietromafficom\\Galdus\\template\\');
include 'page1.php';

?>
<p>
In questa sezione sono riportati alcuni esercizi per apprendere e ripassare alcune caratteristiche importanti delle web app.
</p>

<hr>
<h1>Esercizio su quanto visto durante il primo anno</h1>
<h3>
Realizzare una pagina HTML5 con CSS e Javascript, che riassuma almeno tre argomenti affrontati durante l'anno. All'inizio della pagina deve esserci un indice con delle ancore ai titoli dei tre argomenti.
Ogni argomento deve contenere una breve descrizione dell'argomento (almeno 10 righe), un'immagine.<br>
L'esercizio deve contenere piu' tag html possibili conosciuti e soprattutto non deve contenere nulla che non sia html5.<br>
Un voto in piu' a chi inserisce almeno una componente di javascript.
</h3>
<hr>
<h1>Esercizio sui sistemi operativi della rete</h1>
<h3>
Realizzare un sito in HTML5 con CSS e Javascript, che riassuma almeno tre sistemi operativi utilizzati in rete oggi.
<br>In particolare e' necessario realizzare quanto segue:<br>
<ol>
<li>La prima pagina deve contenere una breve descrizione (almeno 5 righe) su cosa sia un sistema operativo, un menu per raggiungere tutte le altre pagine e un'immagine.</li>
<li>La seconda pagina deve contenere una breve descrizione (almeno 5 righe) su cosa sia Linux, una immagine che ricordi Linux, il menu' per le altre pagine.</li>
<li>La terza pagina deve contenere una breve descrizione (almeno 5 righe) su cosa sia Windows, una immagine che ricordi Windows, il menu' per le altre pagine.</li>
<li>La quarta pagina deve contenere una breve descrizione (almeno 5 righe) su cosa sia OSX, una immagine che ricordi OSX, il menu' per le altre pagine.</li>
</ol>
Le pagine dalla 2 alla 4 devono contenere una area come la seguente con almeno 2 comandi specifici del linguaggio:<p>
<span class="stile"> Command prompt  </span>
<textarea 
  maxlength="2000" 
  cols="80" 
  rows="20" 
  placeholder="Inserire nel form i comandi che si vogliono eseguire" 
  wrap="hard">
$ ls -lsa
$mkdir prova
cd prova
vi nuovo.sh
</textarea>
</p>
<p>L'esercizio deve contenere piu' tag html possibili conosciuti e soprattutto non deve contenere nulla che non sia html5.<br>
Un voto in piu' a chi inserisce il menu' in javascript.
</p>
</h3>
<?php

include 'page2.php';

?>

</body>
</html>
