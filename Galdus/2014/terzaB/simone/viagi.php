<!DOCTYPE html>
<html>
<head>
<style>
table, td {border: 1px solid black;border-collapse:collapse; color:red; background-color:lightgreen;}
h2 {color : brown}
</style>
</head>
<body>
<table>
<tr>
<td>
<h2> Verifica PHP </h2>
<?php
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
$dir = dirname(__FILE__);
echo "<p>Path of the file: " . $dir . "</p>";
echo $_SERVER['HTTP_REFERER']; // Non funziona ma alcuni siti dicono che la stringa è corretta
?>
</td>
</tr>
</table>
</body>
</html>