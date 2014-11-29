<!doctype html>
<html>
<head>
<title>Array</title>
</head>
<body>

<?php
$a = array( [chiave => valore]
)
// la chiave può essere un intero non negativo o una stringa
// il valore può essere qualunque
?>
<?php
 // valorizzo l’array dei giorni della settimana con il metodo classico.
 $giorno[0] = "Domenica";
 $giorno[1] = "Lunedì&igrave";
 $giorno[2] = "Marted&igrave;";
 $giorno[3] = "Mercoled&igrave;";
 $giorno[4] = "Giovedì&igrave;";
 $giorno[5] = "Venerdì&igrave;";
 $giorno[6] = "Sabato";

 // valorizzo l’array dei mesi dell’anno con il costrutto array()
 $mese = array(
 1 => "Gennaio",
 2 => "Febbraio",
 3 => "Marzo",
 4 => "Aprile",
 5 => "Maggio",
 6 => "Giugno",
 7 => "Luglio",
 8 => "Agosto",
 9 => "Settembre",
 10 => "Ottobre",
 11 => "Novembre",
 12 => "Dicembre"
 );
 // Prendo il mese in formato numerico da 1 a 12.
 $numero_mese = date("n");

 /* Prendo il giorno della settimana da 0 (domenica) a 6 (sabato)
 questa volta formatto tutto annidando più funzioni.
 in PHP è possibile! */
 $giorno_settimana = $giorno[date("w")];

 // Formatto la data nel modo: Lunedì 19 Novembre 2001
 $oggi = $giorno_settimana." ".date("d")."-".$mese[$numero_mese]."-".date("Y");

 // Visualizzo la data a schermo concatendandola ad una stringa
 echo "<br> Oggi &egrave;: <b>".$oggi."</b>";
 ?>

</body>
</html>