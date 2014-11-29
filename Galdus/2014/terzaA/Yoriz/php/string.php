<!doctype html>
<html>
<head>
<title>String</title>
</head>	
<body>
<?php
// single quoted string
 $nome = ’Gianluca Giusti’;

// double queoted string
 $nome = "Gianluca Giusti";

/* In entrambi i casi $nome viene inizializzata
come stringa dall’interprete PHP */
?>
<?php
// Valorizzo una variabile che servirà in seguito.
 $email = " brdp @ urcanet.it ";

// Stringa semplice:
$_String $stringa = "Ecco. Questa è una stringa";

// Ad essa si possono concatenare altre stringhe alla fine
echo $stringa = $stringa." con dell’altro testo aggiunto";

// che equivale a scrivere
echo $stringa .= " con dell’altro testo aggiunto";

// Oppure all’inizio
echo $stringa = "altro testo ancora ".$stringa;

// Adesso si prende la prima lettera della stringa
echo $prima = $stringaf0g;

// Concatenazione multipla
echo $stringa = $prima." - ".$stringa." <br><br> il mio email: ".$email;

/* Test sui caratteri di escape. All’interno della stringa posso
visualizzare il valore di una variabile ma per visualizzarne
il nome devo "inibire" il carattere speciale $. Lo faccio con
l’uso della barra obliqua inversa. Ecco come: */
echo $stringa = "Questo il valore di \$email: $email";
// c’è differenza con:
echo $stringa = "Questo il valore di $email: $email";
?>
</body>
</html>