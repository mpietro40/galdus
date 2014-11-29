<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css.css" type="text/css" />    
<title>Verifica Calvin Yoriz Galvez</title>

</head>
<body>
<h1>Tabellina 11</h1>
<?php
$a = 11;
$b = 0;
$i = 1;
echo " La tabellina del $a  ". "<br>";
while($b<110)
{
    $b = $a * $i;
    echo "$a * $i = $b <br>";
    $i++;
}
 ?>
<h1>Tavola pitagorica</h1>
<table>
<?php
$limite = 12;
for ($riga=1; $riga<=$limite; $riga++ )
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
</body>
</html>