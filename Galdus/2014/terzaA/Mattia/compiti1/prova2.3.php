<?
 $a = 231; // da questo momento in poi $a è un intero
 if(settype($a,double)){
 /*
4 Se l’operazione è riuscita il valore è TRUE quindi
5 visualizza il testo seguente. Altrimenti salta alla
6 fine dell’if riga 10.
7 */
 echo "<br>valore settato a double. Ecco il nuovo valore: ";
 echo $a;
 }
 ?>