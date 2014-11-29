<!Doctype HTML>
<head>
<style>
table, td {border: 1px solid black;
border-collapse:collapse;
align:center;}
ul,li {color:red;}
h1 {color:brown;}
</style>
</head>
<body style="background-color:#008000">
<table>
<tr><h1>Esempio di pagina attesa</h1>
<td>
<?php
echo "<ul>";
 echo "<li>";echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";echo "</li>";
echo "<li>";$dir = dirname(__FILE__);
echo "<p>Path of the file: " . $dir . "</p>";echo "</li>";
echo "<li>";$ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is " . $ip; echo "</li>";
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