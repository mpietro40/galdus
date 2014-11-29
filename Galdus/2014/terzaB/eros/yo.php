<!Doctype HTML>
<head>
<style>
table, td {border: 2px solid black;border-collapse:collapse;}
h1, ul , li { color : white ;}
</style>
</head>
<body style="background-color:#003399">
<table>
<h1>Esempio di pagina attesa</h1>
<tr>
<td>
<?php
echo "<ul>";
echo "<li>" ;echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; 
$dir = dirname(__FILE__);echo "</li>" ;
echo "<li>" ;echo "<p>Path of the file: " . $dir . "</p>";
$ip = getenv("REMOTE_ADDR") ; echo "</li>" ;
 echo "<li>" ;Echo "Your IP is " . $ip; echo "</li>" ;
echo "</ul>";
?>
<ul>
<li>http://galdusmaffi.tk/Galdus/Esercitazioni/esercitazionePHP.php
</li>
</ul>
<br>
</td>
</tr>
</table>
</body>
</html>