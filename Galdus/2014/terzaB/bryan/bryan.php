<!Doctype HTML>
<head>
<style>
table, td {border: 1px solid black;
border-collapse:collapse;
h1 {color:brown;}
</style>
</head>
<body style="background-color:#909909">
<table>
<tr><h1>Bryan Informazioni Php</h1>
<td>
<?php
echo "<ul>";
 echo "<li>";echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";echo "</li>";
echo "<li>";$dir = dirname(__FILE__);
echo "<p>Pagine: " . $dir . "</p>";echo "</li>";
echo "<li>";$ip = getenv("REMOTE_ADDR") ; 
 Echo "Il mio IP" . $ip; echo "</li>";
echo "</ul>";
?>
<ul>
<li>http://galdusmaffi.tk/Galdus/Esercitazioni/
</li>
</ul>
</td>
</tr>
</table>
</body>
</html>