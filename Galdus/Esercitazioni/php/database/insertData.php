<!doctype html>
<html>
<head>
<style>
.codice{
color:red;
font-size:16px;
}
table, td, tr, th{
border: solid 2px blue;

}
table{
border-collapse:collapse;
}
</style>
<title>Caricamento dati e visualizzazione dati inseriti con controllo di sicurezza</title>
<link href="xampp.css" rel="stylesheet" type="text/css">
</head>

<body>

&nbsp;<p>

<?php

// Recupero la connessione
// Create connection
$con=mysqli_connect("localhost","pmaffi@galdusmaffi.tk","Pmaffi1234","db@galdusmaffi.tk");

echo "Connected<br>";
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//retrieve max index
//Read all of the data from the table and print it in an HTML table
$query = "SELECT id as indice FROM Persons";
// Execute query
$result = mysqli_query($con,$query);
$id = 1;
while($row = mysqli_fetch_array($result)){
  $id = $id+1;
//  echo "Id: ".$id."<br>";
}

//Inserisco i valori nella tabella
$query = "INSERT INTO Persons(FirstName, LastName, Age, id) VALUES ('Paolo','Verdi',32,$id);";

// Execute query
if (mysqli_query($con,$query))
  {
    // stampo la query che eseguiro'
    echo "<h2>Queste sono le query di inserimento dati</h2>";
    echo "$query"."<br>";
  }
else
  {
  echo "Error inserting row in the table: " . mysqli_error($con);
  }


print "<h2>Dati inseriti</h2>";
//Read all of the data from the table and print it in an HTML table
$query = "SELECT * FROM Persons";
// Execute query
$result = mysqli_query($con,$query);
if ($result>0)
  {
	print "<table>";
	print "<tr><th>PID</th><th>Nome</th><th>Cognome</th><th>Et&agrave;</th></tr>";
  
while($row = mysqli_fetch_array($result))
  {	
	  print "<tr><td>".$row['id']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['Age']."</td></tr>";
	}
	print "</table>";  }
else
  {
  echo "No result to show";
  }
mysqli_close($con);
echo "<br> Disconnected<br>";
?>
<a href="insertData.html">sorgente</a>
</body>
</html>