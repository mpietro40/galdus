<!doctype html>
<html>
<head>
<title>Stampa dati</title>
<meta charset="UTF-8">
<script src="modernizr.js"></script>
<link rel="stylesheet" href="foglio.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery.h5validate.js"></script>
 
<script>
$(document).ready(function () {
    $('form').h5Validate();
});
</script>

</head>
<body>
<h1>Stampa elementi del form html5</h1>
<h2>Creato da Pietro Maffi</h2>
<form method=get action=stampa.php>
if {
<input type=text value=testo name=testo> testo  <br>
<input type="email" name=email> email<br>
<input type="url" name=url> url<br>
<input type="date" name=data>  data <br>
<input type="datetime" name=databig>  databig<br>
<input name="query" type="search"> search  <br>
<input type="color" name=color>  color  <br>
<input type="number"
       min="0"
       max="10"
       step="2"
       value="6" name=number> number  <br>
<input type="range"
       min="0"
       max="10"
       step="2"
       value="6" name=range> range<br>
<input type=submit>
</form>
</body>
</html>