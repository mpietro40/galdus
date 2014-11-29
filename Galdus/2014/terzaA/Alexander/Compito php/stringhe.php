<!doctype html>
<html>
<head>
<title> Esercizio di Alexander </title>
<meta charset="ISO 8859-16">
</head>
<body>
<?
// Valorizzo una variabile che servira` in seguito.
 $email = "brdp@urcanet.it";
 echo "La  mail contiene:".$email."<br>";
 
 // Stringa semplice:
$stringa = "Ecco. Questa e` una stringa";
//Stampo la stringa
 echo "La  stringa contiene:".$stringa."<br>";
 
 // Ad essa si possono concatenare altre stringhe alla fine
 $stringa = $stringa." con dell’altro testo aggiunto";
//Stampo la stringa
 echo "La  stringa contiene:".$stringa."<br>";

 // che equivale a scrivere
 $stringa .= " con dell’altro testo aggiunto";
//Stampo la stringa
 echo "La  stringa contiene:".$stringa."<br>";

 // Oppure all’inizio
 $stringa = "altro testo ancora ".$stringa;
//Stampo la stringa
 echo "La  stringa contiene:".$stringa."<br>";

 // Adesso si prende la prima lettera della stringa
 $prima = $stringa{0};
//Stampo la stringa
 echo "La  stringa contiene come primo carettere: ".$prima."<br>";

 // Concatenazione multipla
 $stringa = $prima." - ".$stringa." <br><br> il mio email: ".$email;

//Stampo la stringa e la mail

 echo "La  stringa contiene:".$stringa."<br>";
 /* Test sui caratteri di escape. All’interno della stringa posso
   visualizzare il valore di una variabile ma per visualizzarne
   il nome devo "inibire" il carattere speciale $. Lo faccio con
   l’uso della barra obliqua inversa. Ecco come: */
 $stringa = "Questo il valore di \$email: $email";
//Stampo la stringa
 echo "La  stringa contiene:".$stringa."<br>";

// c’e` differenza con:
 $stringa = "Questo il valore di $email: $email";

//Stampo la stringa
 echo "La  stringa contiene:".$stringa."<br>";

?>
</body>
</html>