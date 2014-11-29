<head>
<style>
table, td {border: 1px solid black;border-collapse:collapse;color:red;background-color:green;}

</style>
</head>
<table>
<h1>Verifica Ronny</h1>
<tr>
<td>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$dir = dirname(__FILE__);
echo "<p>Path of the file: " . $dir . "</p>";
$ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is " . $ip; 
?>

</td>
</tr>
</table>
</body>
</html>
