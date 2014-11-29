<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}

table{
border-collapse:collapse;
}
</style>
<title>Creazione Database SQL lite</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>
<?php
try
{
//create the database.
//this will generate the database file in the directory in which this script exists.
//If this file already exists, the database will be opened on this file.
  $database = new SQLiteDatabase('sqlite/dogsDb.sqlite', 0666, $error);
  echo "DB creato";
}
catch(Exception $e)
{
  die($error);
}

?>
<a href="createDB.html">sorgente</a>
</body>
</html>