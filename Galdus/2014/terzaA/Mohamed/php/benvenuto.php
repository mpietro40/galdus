<html>
<head>
<title>Benvenuto!</title>
</head>
<body>

<br> La mia prima vera pagina in PHP.<br><hr>

<br><br> Informazioni sul server:
<br>Sei giunto su: <?php echo $SERVER[SERVER_NAME] ?>
<br>Stai eseguendo lo script: <?php echo $SERVER[SCRIPT_NAME] ?>

<br><br> Esaminiamo il client:

<br> Indirizzo IP: <?php echo $SERVER[REMOTE_ADDR] ?>
<br> Vedo che provieni da: <?php echo $SERVER[HTTP_REFERER] ?>
<br> Tipo di browser: <?php echo $SERVER[HTTP_USER_AGENT] ?>

<?
$a = 231; // da questo momento in poi $a è un intero
if(settype($a,double))f
/*
Se l’operazione è riuscita il valore è TRUE quindi
visualizza il testo seguente. Altrimenti salta alla
fine dell’if riga 10.
*/
echo "<br>valore settato a double. Ecco il nuovo valore: ";
echo $a;
g
?>

<?
$a = "brdp";
/*
la variabile $a è stata
inizializzata come stringa
*/
$tipo_a = gettype($a);
echo "<br>La variabile è di tipo:";
echo $tipo_a;
?>


</body>