<!doctype html>
<html>
<head>
<title>Stampa dati</title>
<meta charset="UTF-8">
<style>
body{
background-color:<?= $_GET["color"]; ?>;
}
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:white;
} 
</style>
</head>
<body>
<h1>Stampa parametri della richiesta http</h1>
<h2>Creato da Pietro Maffi</h2>
<?php
/*$query = parse_url($_GET, PHP_URL_QUERY);
if($query==""){
  $query = parse_url($_POST, PHP_URL_QUERY);
}
parse_str($query);
echo "Stringa dati passati: ".$query;  // a=1&b=2&c=3&d=some%20string
parse_str($query, $arr);
*/

echo "<table><tr><th>Parametro</th><th>Valore</th></tr>";
if($_GET){
  echo "<tr><th colspan=2>GET</th></tr>";
  foreach ($_GET as $key => $val) {
    echo "<tr><td>".$key . ' </td><td> ' . $val . '</td></tr> ';  // a => 1, b => 2, c => 3, d => 4
  }
}else{
  echo "<tr><th colspan=2>POST</th></tr>";
  foreach ($_POST as $key => $val) {
    echo "<tr><td>".$key . ' </td><td> ' . $val . '</td></tr> ';  // a => 1, b => 2, c => 3, d => 4
  }
}
echo "</table>";
?>
</body>
</html>