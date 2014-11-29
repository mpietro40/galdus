<DOCTYPE html>
<html>
<head>
<meta charset="iso-8859-16">
</head>
<body>
<?php
// Valorizzo una variabile che servirà in seguito.
$email = " brdp @ urcanet.it ";

// Stringa semplice:
$stringa = "Ecco. Questa è una stringa <br>";
//Stampo stringa
echo $stringa;
// Ad essa si possono concatenare altre stringhe alla fine
$stringa = $stringa." con dell’altro testo aggiunto <br>";
echo $stringa;
// che equivale a scrivere
$stringa .= " con dell’altro testo aggiunto <br>";
echo $stringa;
// Oppure all’inizio
$stringa = "altro testo ancora <br>".$stringa;
echo $stringa;
// Adesso si prende la prima lettera della stringa
$prima = $stringa{0};
echo $stringa;
// Concatenazione multipla
$stringa = $prima." - ".$stringa." <br><br> il mio email: ".$email;
echo $stringa;
/* Test sui caratteri di escape. All’interno della stringa posso
visualizzare il valore di una variabile ma per visualizzarne
il nome devo "inibire" il carattere speciale $. Lo faccio con
l’uso della barra obliqua inversa. Ecco come: */
$stringa = "Questo il valore di \$email: $email";
?>
</body>
</html>