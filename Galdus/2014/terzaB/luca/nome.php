<!DOCTYPE html>
<head>
<style>
table, td {border: 1px solid black;border-collapse:collapse;}
body{
 color:red;
 }
</style>
</head>
<body style="background-color:#86B404">
<table>
<title>Verifica</title>
<h1>Verifica Luca</h1>
<tr>
<td>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$dir = dirname(__FILE__);
echo "<p>Path of the file: " . $dir . "</p>";
$ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is " . $ip; 
?>
<br>
</td>
</tr>
</table>
</body>
</html>