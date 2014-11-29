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
In questa sezione sono riportati alcuni esercizi ed esempi di codice necessari a ricostruire una
visualizzazione gestita con CSS. L'esercizio (HTML-CSS)contiene un sito fatto usando i vecchi frame, 
il compito e' quello di eliminarli introducendo i nuovi elementi html5<br>
Il secondo esercizio (content) contiene un esempio di sito non ancora in html5 ma che sviluppa l'uso dei
video e della musica con tag html5<br>
L'esempio (Struttura) contiene un esempio di un template base di html5 con un minimo di css.
<h2>Lista automatica dei file</h2>
<!-- Start folder listing -->
<?php
// open this directory 
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

?>
<!-- end folder listing -->

<hr>
<h1>Esercizio sulla tabella</h1>
Realizzare una pagina html5 che visualizzi una tabella come quella indicata nel disegno sotto<br>
<img src="tabella.jpg" alt=tabella>
<?php

include 'template/page2.php';

?>

</body>
</html>
