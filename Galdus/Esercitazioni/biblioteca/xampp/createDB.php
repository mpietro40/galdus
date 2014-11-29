<html>
<head>
<title>Creo il DB</title>
</head>
<body>
<?php
try
{
//create the database.
//this will generate the database file in the directory in which this script exists.
//If this file already exists, the database will be opened on this file.


$database = new SQLite3('mysqlitedb.sqlite3');

echo "DB creato";
}
catch(Exception $e)
{
die($e);
}

?>
</body>
</html>