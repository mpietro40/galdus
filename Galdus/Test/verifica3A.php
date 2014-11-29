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
<h2>Verifica PHP su XAMPP</h2>
L'esercizio da svolgere consiste nella compilazione del seguente questionario:
<a href="https://docs.google.com/forms/d/1CM9Z7Wa2B7DwckUbiLQqCcqakLm8va9TnFy4ZXN-7eU/viewform"> Questionario </a>
<ol>
<li>
<!-- Esercizio PHP-->

<h2>Scrivere uno script PHP che produca in output:</h2>
  <ol>
  <li>
    La tabellina del proprio numero di alfabetico (i primi 5 useranno i numeri 10, 11, 12, 13, 14)
  </li>
  <li>  
    La tavola Pitagorica contenuta in una tabella (fino al 12)
  </li>
  </ol>
  L'esercizio richiede di realizzare delle pagine dinamiche in PHP che scrivano
  riga dopo riga le tabelline.
  Sotto deve poi essere scritta la tabella 12x12 con bordo tratteggiato blue in css
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
