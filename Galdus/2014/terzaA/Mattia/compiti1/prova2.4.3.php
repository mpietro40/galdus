 <?php
 // provo ad aprire un file che non esiste
 $file_array = @file(�file_inesistente�) or
 die (" Errore durante l�apertura del file. ");
 /*
 In questo caso il messaggio di errore dell�interprete
 PHP � stato silenziato dalla �@� premessa alla funzione file().
 Verr� quindi mostrato solo il nostro messaggio di errore
 */
 ?>