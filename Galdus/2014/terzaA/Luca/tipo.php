 <?php
 $a = 231; // da questo momento in poi $a � un intero
 if(settype($a,double)){
/*
 Se l�operazione � riuscita il valore � TRUE quindi
 visualizza il testo seguente. Altrimenti salta alla
 fine dell�if riga 10.
 */
 echo "<br>valore settato a double. Ecco il nuovo valore: ";
 echo $a;
 }
 ?>