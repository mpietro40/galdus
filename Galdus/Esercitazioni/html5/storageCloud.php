<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Sito di Pietro Maffi</title>
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
<!-- Insert here your content in html-->
In questa sezione sono riportati alcuni esercizi per apprendere e ripassare alcune caratteristiche importanti delle reti informatiche.


<hr>
<h1>Esercizio sui servizi di memorizzazione e back up online</h1>
<h3>
Realizzare un sito html5 che spieghi con almeno tre pagine cosa sia:
un servizio di salvataggio, sincronizzazione e condivisione di file in cloud, cioè quel luogo dove i file risiedono online e consentono di creare una copia speculare salvata sul pc o dove hai installato il software. 
<p>
<ul>
<li>La prima pagina deve spiegare cosa sono questi servizi.</li>
<li>Nella seconda pagina deve essere inserito un elenco con una immagine e una descrizione di almeno 3 servizi. </li>
<li>Nella terza pagina deve essere inserito un elenco con una immagine e una descrizione di almeno 3 servizi. </li>
</ul>
Le pagine 2 e 3 devono contenere una tabella con 4 colonne: 
<table>
<tr><th>
Nome del servizio
</th>
<th>
Immagine logo del servizio
</th>
<th>
Indirizzo web dove raggiungerlo
</th>
<th>
Costo e spazio disponibile
</th>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</h3>

<?php

include 'template/page2.php';

?>

</body>
</html>
