<?
 // Valorizzo una variabile che servir� in seguito.
 $email = " brdp @ urcanet.it ";

 // Stringa semplice:
 $stringa = "Ecco. Questa � una stringa";

 // Ad essa si possono concatenare altre stringhe alla fine
 $stringa = $stringa." con dell�altro testo aggiunto";

 // che equivale a scrivere
 $stringa .= " con dell�altro testo aggiunto";

 // Oppure all�inizio
 $stringa = "altro testo ancora ".$stringa;

 // Adesso si prende la prima lettera della stringa
 $prima = $stringaf0g;

 // Concatenazione multipla
 $stringa = $prima." - ".$stringa." <br><br> il mio email: ".$email;

 /* Test sui caratteri di escape. All�interno della stringa posso
 visualizzare il valore di una variabile ma per visualizzarne
 il nome devo "inibire" il carattere speciale $. Lo faccio con
 l�uso della barra obliqua inversa. Ecco come: */
 $stringa = "Questo il valore di \$email: $email";
// c�� differenza con:
 $stringa = "Questo il valore di $email: $email";
 ?>
