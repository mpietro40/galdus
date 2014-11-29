<html>
<head>
 <title>Benvenuto!</title>
 </head>
 <body>

 <br> La mia prima vera pagina in PHP.<br><hr>

 <br><br> Informazioni sul server:
 <br>Sei giunto su: <?=$SERVER_NAME ?>
 <br>Stai eseguendo lo script: <?=$SCRIPT_NAME ?>

 <br><br> Esaminiamo il client:
 <br> Indirizzo IP: <?=$REMOTE_ADDR ?>
 <br> Vedo che provieni da: <?=$HTTP_REFERER ?>
 <br> Tipo di browser: <?=$HTTP_USER_AGENT ?>

</body>
 </html>
Salvato il file nella directory del servizio HTTP