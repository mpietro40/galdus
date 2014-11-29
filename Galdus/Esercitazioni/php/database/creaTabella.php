<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}
table, th, td, tr{
border: solid 2px blue;
}
table{
border-collapse:collapse;
}
</style>
<title>Gestione di una rubrica</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>
<a href="creaTabella.html">Sorgente</a>
&nbsp;<p>

<?php

try
{
//Connect to the database.
//
$con=mysqli_connect("localhost","pmaffi@galdusmaffi.tk","Pmaffi1234","db@galdusmaffi.tk");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

}
catch(Exception $e)
{
  die($e);
}

//Add a new table to the database called Dogs
try{

// Create table
$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
mysqli_close($con);
echo "<br> disconnected";
}
catch(Exception $e)
{
  die($e);
}
echo "<h2>Tabella indirizzi creata</h2>";

?>
<a href="creaTabella.html">Sorgente</a>
</body>
</html>