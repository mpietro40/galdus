0 <html>
1 <head>
2 <title>Semplice Agenda telefonica statica</title>
3 </head>
4 <body>
5
6 <?
7 /*
8 Un semplice esempio di array multidimensionale.
9 Una rubrica telefonica.
10 */
11
12 $a["nome"][0] = "Gianluca";
13 $a["cognome"][0] = "Giusti";
14 $a["tel"][0] = "06/66666666";
15
16 $a["nome"][1] = "Mirko";
17 $a["cognome"][1] = "Simeoni";
18 $a["tel"][1] = "07/77777777";
19
20 $a["nome"][2] = "Fabio";
21 $a["cognome"][2] = "Ferri";
22 $a["tel"][2] = "08/88888888";
23
24 /*
25 Adesso elenchiamo la rubrica. Lo faremo senza
26 utilizzare Nessuna struttura ciclica per non
27 confondere le idee
28 */
29
30 ?>
31
32 <br>
33
34 <table border="1">
35 <tr bgcolor="gray" >
36 <td>ID</td>
37 <td>Nome</td>
38 <td>Cognome</td>
39 <td>Telefono</td>
40 </tr>
41 <tr>
42 <td>0</td>
43 <td><?=$a[nome][0]?></td>
44 <td><?=$a[cognome][0]?></td>
45 <td><?=$a[tel][0]?></td>
46 </tr>
47 <tr>
48 <td>1</td>
49 <td><?=$a[nome][1]?></td>
50 <td><?=$a[cognome][1]?></td>
51 <td><?=$a[tel][1]?></td>
52 </tr>
53 <tr>
54 <td>2</td>
55 <td><?=$a[nome][2]?></td>
56 <td><?=$a[cognome][2]?></td>
57 <td><?=$a[tel][2]?></td>
58 </tr>
59
60 </table>
61
62 </body>
63</html>