<?
1 // assegno ad $a un valore intero
2 $a = 2;
3
4 // assegno a $b un altro valore intero
5 $b = 5;
6
7 // posso assegnare a $a la somma di $a e $b in questo modo
8 $a = $a + $b;
9
10 // oppure in questo modo
11 $a += $b;
12
13 // stesso discorso per tutti gli operatori aritmetici
14 $a -= $b;
15 $a *= $b;
16 $a /= $b;
17
18 // posso anche assegnare un valore a più variabili
19 $a = $b = 30;
20
21 // o ancora in questo esempio sia $a che $b valgono 6
22 $a = 3;
23 $b = $a += 3;
24
25 // per le stringhe. $a varrà "ciao a tutti!!!"
26 $a = "ciao a";
27 $a .= " tutti!!!";
28
29 // equivale a concatenare la stringa in questo modo
30 $a = "ciao a";
31 $a = $a." tutti!!!";
32 ?>