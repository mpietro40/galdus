<html>
<head>
<title> Esercizio </title>
</head>
<body>
<?php


echo "<br> Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.117 Safari/537.36<br>";

echo "<br> localhost/jann.php<br><br>";

echo  $ip=$_SERVER['REMOTE_ADDR'];

echo $_SERVER['$HTTP_REFERER']; // Qua in aula non funziona

?>




</body>
</html>