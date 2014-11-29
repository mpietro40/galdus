<html>
 <head>
  <title>verifica</title>
  <style type="text/css">
div.sorgente
 {
  float: left;
  width: 50%;
  margin: 1%;
  margin-top: 8%;
  border: solid;
  border-color: #808080;
  background-color: #A0A0A0;
 }
div.php
 {
  float: left;
  margin: 1%;
  width: 45%;
 }
 table td {border: 1px dashed blue;}
 table{
 border-collapse:collapse;
 }
</style>
 </head>
 <body>
 <?php 
 echo "1x11=11"."<br>";
 echo "2x11=22"."<br>";
 echo "3x11=33"."<br>";
 echo "4x11=44"."<br>";
 echo "5x11=55"."<br>";
 echo "6x11=66"."<br>";
 echo "7x11=77"."<br>";
 echo "8x11=88"."<br>";
 echo "9x1=99"."<br>";
 echo "10x11=110"."<br>";
 
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