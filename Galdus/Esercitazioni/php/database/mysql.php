        <?php
// Create connection
$con=mysqli_connect("localhost","pmaffi@galdusmaffi.tk","Pmaffi1234","db@galdusmaffi.tk");

echo "connected<br>";
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_close($con);
echo "disconnected";

?>