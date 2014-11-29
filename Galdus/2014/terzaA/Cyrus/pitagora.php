<!doctype html>
<html>
<head>
</head>
<body>
<h1>Tavola pitagorica</h1>
<table border="1">
<?php
$limite = 18;
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