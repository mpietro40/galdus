<!doctype html>
<html>
<head>
<title>Benvenuto!</title>
</head>	
<body>
<br> La mia prima vera pagina in PHP.<br><hr>

<br><br> Informazioni sul server:
<br>Sei giunto su: <?php echo $_SERVER['SERVER_NAME'] ?>
<br>Stai eseguendo lo script: <?php echo $_SERVER['SCRIPT_NAME'] ?>

<br><br> Esaminiamo il client:

<br> Indirizzo IP: <?php echo $_SERVER['REMOTE_ADDR'] ?>
<br> Vedo che provieni da: <?php echo $_SERVER['HTTP_REFERER'] ?>
<br> Tipo di browser: <?php echo $_SERVER['HTTP_USER_AGENT'] ?>
<p>
</body>
</html>