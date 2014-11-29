0 <?
1 // provo ad aprire un file che non esiste
2 $file_array = file(’file_inesistente’) or
3 die (" Errore durante l’apertura del file. ");
4
5 /*
6 il file non esiste, lo script si ferma
7 mostrando i messaggi di errore
8 */
9 ?>
