<!Doctype HTML>
<head>
<link rel='stylesheet' href='css.css' type='text/css' />
</head>
<body>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$dir = dirname(__FILE__);
echo "<p>Path of the file: " . $dir . "</p>";

$ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is " . $ip; 
 
echo $_SERVER["HTTP_REFERER"] . "\n\n";
?>
</body>
</html>