<!doctype html>
<html>
<head>
<title>Semplice Agenda telefonica statica</title>
</head>	
<body>
<?php
 /*
 Un semplice esempio di array multidimensionale.
 Una rubrica telefonica.
 */

 $a["nome"][0] = "Gianluca";
 $a["cognome"][0] = "Giusti";
 $a["tel"][0] = "06/66666666";

 $a["nome"][1] = "Mirko";
 $a["cognome"][1] = "Simeoni";
 $a["tel"][1] = "07/77777777";

 $a["nome"][2] = "Fabio";
 $a["cognome"][2] = "Ferri";
 $a["tel"][2] = "08/88888888";

 /*
 Adesso elenchiamo la rubrica. Lo faremo senza
 utilizzare Nessuna struttura ciclica per non
 confondere le idee
 */

 ?>

 <br>

 <table border="1">
 <tr bgcolor="gray" >
 <td>ID</td>
 <td>Nome</td>
 <td>Cognome</td>
 <td>Telefono</td>
 </tr>
 <tr>
 <td>0</td>
 <td><?php echo=$a[nome][0]?></td>
 <td><?php =$a[cognome][0]?></td>
 <td><?php =$a[tel][0]?></td>
 </tr>
 <tr>
 <td>1</td>
 <td><?php = $a [nome][1]?></td>
 <td><?php = $a [cognome][1]?></td>
 <td><?php = $a [tel][1]?></td>
 </tr>
 <tr>
 <td>2</td>
 <td><?php = $a[nome][2]?></td>
 <td><?php = $a[cognome][2]?></td>
 <td><?php = $a[tel][2]?></td>
 </tr>

</body>
</html>