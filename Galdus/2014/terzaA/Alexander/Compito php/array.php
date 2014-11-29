    <?
  // valorizzo l’array dei giorni della settimana con il metodo classico.
  $giorno[0] = "Domenica";
   $giorno[1] = "Lunedi`";
  $giorno[2] = "Martedi`";
   $giorno[3] = "Mercoledi`";
   $giorno[4] = "Giovedi`";
   $giorno[5] = "Venerdi`";
   $giorno[6] = "Sabato";

  // valorizzo l’array dei mesi dell’anno con il costrutto array()
   $mese = array(
                  1 => "Gennaio",                  2 => "Febbraio",
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
     questa volta formatto tutto annidando piu` funzioni.
     in PHP e` possibile! */
     $giorno_settimana = $giorno[date("w")];

  // Formatto la data nel modo: Lunedi` 19 Novembre 2001
   $oggi = $giorno_settimana." ".date("d")."-".$mese[$numero_mese]."-".date("Y");

  // Visualizzo la data a schermo concatendandola ad una stringa
   echo "<br> Oggi e`: <b>".$oggi."</b>";
  ?>