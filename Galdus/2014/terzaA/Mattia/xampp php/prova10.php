 $giorno[0] = "Domenica";
3 $giorno[1] = "Lunedì";
4 $giorno[2] = "Martedì";
5 $giorno[3] = "Mercoledì";
6 $giorno[4] = "Giovedì";
7 $giorno[5] = "Venerdì";
8 $giorno[6] = "Sabato";
9
10 // valorizzo l’array dei mesi dell’anno con il costrutto array()
11 $mese = array(
12 1 => "Gennaio",
13 2 => "Febbraio",
14 3 => "Marzo",
15 4 => "Aprile",
16 5 => "Maggio",
17 6 => "Giugno",
18 7 => "Luglio",
19 8 => "Agosto",
20 9 => "Settembre",
21 10 => "Ottobre",
22 11 => "Novembre",
23 12 => "Dicembre"
24 );
25 // Prendo il mese in formato numerico da 1 a 12.
26 $numero_mese = date("n");
27
28 /* Prendo il giorno della settimana da 0 (domenica) a 6 (sabato)
29 questa volta formatto tutto annidando più funzioni.
30 in PHP è possibile! */
31 $giorno_settimana = $giorno[date("w")];
32
33 // Formatto la data nel modo: Lunedì 19 Novembre 2001
34 $oggi = $giorno_settimana." ".date("d")."-".$mese[$numero_mese]."-".date("Y");
35
36 // Visualizzo la data a schermo concatendandola ad una stringa
37 echo "<br> Oggi è: <b>".$oggi."</b>";
38 ?>