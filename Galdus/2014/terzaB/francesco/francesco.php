<!Doctype HTML>
<head>
</head>
<body>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$dir = dirname(__FILE__);
echo "<p>Path of the file: " . $dir . "</p>";

$ip = getenv("REMOTE_ADDR") ; 
 echo "Il tuo IP " . $ip; 
 
 echo $_SERVER["HTTP_REFERER"]; // Stampa a video la URL di provenienza
?>
</body>
</html>