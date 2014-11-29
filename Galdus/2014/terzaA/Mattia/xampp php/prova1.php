<html>
<head>
<title>Benvenuto!</title>
</head>
 <body>

<br> La mia prima vera pagina in PHP.<br><hr>

<br><br> Informazioni sul server:
<br>Sei giunto su: <?php $_SERVER["SERVER_NAME"] ?>
 <br>Stai eseguendo lo script: <? $_SERVER["SCRIPT_NAME"] ?>

<br><br> Esaminiamo il client:

<br> Indirizzo IP: <? $_SERVER["REMOTE_ADDR"] ?>
 <br> Vedo che provieni da: <? $_SERVER["HTTP_REFERER"] ?>
 <br> Tipo di browser: <? $_SERVER["HTTP_USER_AGENT"] ?>

</body>
</html>