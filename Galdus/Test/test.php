<!DOCTYPE html>
<html>
<head>
<title>Leggi parametri di Pietro Maffi</title>

<link rel="stylesheet" type="text/css" href="../style.css" />
<link rel="stylesheet" type="text/css" href="../images/hmenu.css" />
<style>
h2{
  color:#449999;
  text-align:center;
}
</style>
</head>
<body>

<h2>Stampa degli header passati nella richiesta</h2>
<!--  apache_response_headers-->
<?php

foreach (getallheaders() as $name => $value) {
  echo ("Il parametro <span class=evidente>". "$name" . " </span> ha valore <span class=evidente>" . " $value\n");
      echo ("</span><br>");

}

//$headers = apache_request_headers();

//foreach ($headers as $header => $value) {
//    echo "$header: $value <br />\n";
//}

/*
foreach($_SERVER as $key => $val) {
     echo "$key: $value <br />\n";

}
*/
?>

<h2>Stampa dei parametri passati nella richiesta</h2>

 <?php

foreach ($_GET as $k => $v)
{
   
  echo ("Il parametro <span class=evidente>". $k . "</span> ha valore <span class=evidente>" . $v);
  echo ("</span><br>");
}

foreach ($_POST as $k => $v)
{
   
  echo ("Il parametro <span class=evidente>". $k . "</span> ha valore <span class=evidente>" . $v);
  echo ("</span><br>");
}

$elettroArray = ($_POST['elettro']);
echo($elettroArray);
for($iSkill = 0; $iSkill < sizeof($elettroArray); ++$iSkill)
{
echo ('Elettrodomestico posseduto '.$iSkill .' – value: '.$elettroArray[$iSkill].'');

}
?> 
</body>
</html>