<!DOCTYPE html>
<html>
<meta charset=iso-8859-1">
<title>Sito di Pietro Maffi - Esempio di uso font</title>
<meta name="keyword" content="Galdus, scuola, informatica, reti e sistemi, Pietro Maffi">
<link rel='stylesheet' href='/css/3colonneColorGaldus.css' type='text/css' />
<link rel='stylesheet' href='/css/site.css' type='text/css' />
<link rel="stylesheet" href="/css/menu_style.css" type="text/css" />
<script src="/js/js.js"></script>

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
.codice{
  font-style:italic;
  /*letter-spacing:2px;*/
  font-family:"Lucida console",Times,serif;
}
</style>
</head>
<body>
<?php
ini_set('include_path', '/home/galdusmaffi.tk/public/');
include 'template/page1.php';

?>
<!-- Insert here your content in html-->
In questa sezione sono riportati alcuni esempi di codice necessari ad inserire e personalizzare i font usati in una pagina.<br>
E' possibile infatti usare dei font personalizzati, creando dei formati specifici per i diversi browser. (.eot - IE, otf e ttf svg e woff - Firefox, Safari, Opera)<br>
Questa operazione puo' essere svolta usando il seguente
<a href="http://www.fontsquirrel.com/tools/webfont-generator">sito</a>
<br>
Qui e' possibile scaricare i tre formati necessari.
Per inserire i font creati nella pagina e' necessario creare del CSS ad hoc con queste caratteristiche:
<p class="codice">
/*default version*/<br />
@font-face {<br />
	font-family: 'lovelyFont';<br />
	src: url('fonts/lovely_font.eot'); <br />
	src: <br />
		local('Lovely Font'),<br />
		local('Lovely-Font'),<br />
		url('fonts/lovely_font.otf') <br />
		format('opentype');<br />
}<br />
/*bold version*/<br />
@font-face {<br />
	font-family: 'lovelyFont';<br />
	src: url('fonts/lovely_font_bold.eot'); <br />
	src: <br />
		local('Lovely Font Bold'),<br />
		local('Lovely-Font-Bold'),<br />
		url('fonts/lovely_font_bold.otf') <br />
		format('opentype');<br />
	font-weight: bold;<br />
}<br />
/*container element*/<br />
div { font-family: 'lovelyFont', sans-serif; }<br />
/*span elements inside the container div*/<br />
span { font-weight: bold; }
</p>
info disponibili a questo 
<a href="http://www.webdesignerdepot.com/2013/01/how-to-use-any-font-you-like-with-css3/">sito</a>
<br>
<a href="esempio/belligerent-demo.html">Esempio 1</a>
<br>
<a href="esempio/desyrel-demo.html">Esempio 2</a>
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
<?php

include 'template/page2.php';

?>

</body>
</html>
