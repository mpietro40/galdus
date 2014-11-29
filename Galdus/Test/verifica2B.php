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
<h2>Verifica HTML 5</h2>
L'esercizio da svolgere consiste in:
<ol>
<li>
Trasformare una pagina, come indicato in base al nome dell'allievo, dalla attuale forma
composta di Frame, in formato HTML5.
La pagina da realizzare e' una sola, deve contenere tutti gli elementi di una pagina html5 corretta
deve inoltre contenere il CSS necessario a far comparire la pagina il layout in cui:<br>
la header contiene nome e cognome dell'allivevo<br>
la nav contiene il menu riportato nella pagina del sito da aggiornare<br>
il footer contiene il link ad una pagina successiva e precedente<br>
l'aside non e' necessario<br>
la parte centrale (article) deve contenere il contenuto della pagina in formato html5  
</li>
<li>
Il primo passo consiste nel creare un documento word in cui descrivere i passi che si intende svolgere
</li>
<li>
E' necessario entrare nella pagina <a href="/Galdus/Esercitazioni/html5/HTML-CSS"> iniziale </a>
</li>
</ol>
<h3>La suddivisione delle pagine e' in base al numero nell'ordine alfabetico:</h3>
Il primo, il decimo e il diciannovesimo in ordine alfabetico realizzera' la pagina "Introduzione" <br>
Il secondo, l'undicesimo e il ventesimo in ordine alfabetico realizzera' la pagina "il testo"   <br>
Il terzo, il dodicesimo e il ventunesimo in ordine alfabetico realizzera' la pagina "hyperlink"    <br>
Il quarto, il tredicesimo e il ventiduesimo in ordine alfabetico realizzera' la pagina "liste"       <br>
Il quinto, il quattordicesimo e il ventitresimo in ordine alfabetico realizzera' la pagina "tabelle"     <br>
Il sesto, il quindicesimo e il ventiquattresimo in ordine alfabetico realizzera' la pagina "mappe"        <br>
Il settimo, il sedicesimo  e il venticinquesimo in ordine alfabetico realizzera' la pagina "frame"      <br>
L'ottavo, il diciassettesimo  e il ventiseiesimo in ordine alfabetico realizzera' la pagina "form"         <br>
Il nono, il diciottesimo in ordine alfabetico realizzera' la pagina "css"           <br>

<!-- Start folder listing -->
<?php
/* open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);
Print ("$indexCount files<br>\n");

// sort 'em
sort($dirArray);

// print 'em
print("<div class='folders'>\n");
print("<table>\n");
print("<tr><th>Filename</th><th>Filetype</th><th>Filesize</th></tr>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		print("<tr><td><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
		print("<td>");
		print(filetype($dirArray[$index]));
		print("</td>");
		print("<td>");
		print(filesize($dirArray[$index]));
		print("</td>");
		print("</tr>\n");
	}
}
print("</table>\n");
print("</div>\n");
*/
?>
<!-- end folder listing -->


<?php

include 'template/page2.php';

?>

</body>
</html>
