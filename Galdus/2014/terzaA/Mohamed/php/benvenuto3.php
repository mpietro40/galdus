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
<?php 
$a = 231; // da questo momento in poi $a è un intero
if(settype($a,double)){
/*
Se l’operazione è riuscita il valore è TRUE quindi
visualizza il testo seguente. Altrimenti salta alla
fine dell’if riga 10.
*/
echo "<br>valore settato a double. Ecco il nuovo valore: ";
echo $a;
}
?>
<P>
<?php
$a = "brdp";
/*
la variabile $a è stata
inizializzata come stringa
*/
$tipo_a = gettype($a);
echo "<br>La variabile &egrave; di tipo:";
echo $tipo_a;
?>
<p>
<?php
$bit = False;
if($bit){
echo " il valore &egrave; vero!";
}else{
   echo "il valore &egrave; falso";
}
?>
<p>
<?php
// single quoted string
$nome = ’Gianluca Giusti’;

// double queoted string
$nome = "Gianluca Giusti";

/* In entrambi i casi $nome viene inizializzata
come stringa dall’interprete PHP */
?>
<p>
<?php
// Valorizzo una variabile che servirà in seguito.
$email = " brdp @ urcanet.it ";

// Stringa semplice:
$stringa = "Ecco. Questa è una stringa";

// Ad essa si possono concatenare altre stringhe alla fine
$stringa = $stringa." con dell’altro testo aggiunto";

// che equivale a scrivere
$stringa .= " con dell’altro testo aggiunto";

// Oppure all’inizio
$stringa = "altro testo ancora ".$stringa;

// Adesso si prende la prima lettera della stringa
$prima = $stringaf0g;

// Concatenazione multipla
$stringa = $prima." - ".$stringa." <br><br> il mio email: ".$email;

/* Test sui caratteri di escape. All’interno della stringa posso
visualizzare il valore di una variabile ma per visualizzarne
il nome devo "inibire" il carattere speciale $. Lo faccio con
l’uso della barra obliqua inversa. Ecco come: */
$stringa = "Questo il valore di \$email: $email";
// c’è differenza con:
$stringa = "Questo il valore di $email: $email";
?>
<?php
array( [chiave =>] valore
, ...
)
// la chiave può essere un intero non negativo o una stringa
// il valore può essere qualunque
?>
</body>