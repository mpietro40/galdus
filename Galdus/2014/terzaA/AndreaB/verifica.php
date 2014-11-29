<!DOCTYPE html>
<head>
<style>
table td {
  border: 1px dotted blue;

}
table {

  border-collapse:collapse;
}
</style>
<title>Verifica</title>
</head>
<body>
 <?php
     function  tabellina  ($num_righe,  $tab) {
         
        echo"<table border=1>";
         
        for($i = 1; $i < $num_righe+1;  $i++) {
             $tabellina  = ($tab  *  $i);
            echo"<tr><td>$tab X $i = <b> $tabellina</b></td></tr>";
        }
         
        echo"</table>";
    }
     
     tabellina  (12,  14);
?><br></br>
<table>
<?php
$limite = 12;
for ($riga=1; $riga<$limite; $riga++ )
 {
  echo "<tr>";
  for ($colonna=1; $colonna<=$limite; $colonna++ )
   {
    $valore = $riga * $colonna;
    echo "<td>"; echo $valore; echo "</td>\n";
   }
  echo "</tr>\n";
 }
?>
</table>
 </body>
</html>