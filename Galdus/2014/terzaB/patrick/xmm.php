<!Doctype HTML>
<head>
<style>
 

table, td {border: 3px solid black;border-collapse:collapse;color:red;background-color:blue;}

</style>
</head>

<body style="background-color:#58FA82">
<table>
<h2> verifica Patrick</h2>
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