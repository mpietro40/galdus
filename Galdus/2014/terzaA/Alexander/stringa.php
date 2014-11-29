<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8>
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<html>
<head>
</head>
<body>
<?php

$a = 1;

for ($i = 0; $i < 10; $i++ ) // Esegue le operazioni di cui sotto per 10 volte
{
$tabellina = array($a++); // Crea un array di un solo elemento di valore pari ad 'a', e poi incrementa 'a'

foreach ($tabellina as $valore) { // Per ogni elemento dell'array (che è solo uno....)

$valore = $valore * 13; // Raddoppia il valore
echo $valore; // Lo stampa
echo "<br>";
}
}
?>
<h1>Tavola pitagorica</h1>
<table border="1">
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