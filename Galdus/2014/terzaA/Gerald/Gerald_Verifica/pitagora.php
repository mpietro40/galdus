<!doctype html>
<html>
<head>
<meta name="Gerald Joshua" CONTENT="Verifica"> 
<title> Gerald.Chillax.D </title>
<style type="text/css">
div.sorgente
 {
  float: left;
  width: 50%;
  margin: 1%;
  margin-top: 8%;
  border: ;
  border-color: #808080;
  background-color: #A0A0A0;
 }
div.php
 {
  float: left;
  margin: 1%;
  width: 45%;
 }
</style>
</head>
<body>
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