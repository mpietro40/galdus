<div id="container">
<div id="header">
<h1>Il sito di Pietro Maffi</h1>
</div>
<div id="navigation">
<div class="bubplastic vertical lime" id="bigT">
<?php
  include('menu.php');
?>
</div>
</div>
<div id="extra">
<?php

include 'news.php';

?>
</div>
<div id="content">

<?php
if($location = substr(dirname($_SERVER['PHP_SELF']), 1))
	$dirlist = explode('/', $location);
else
	$dirlist = array();

$count = array_push($dirlist, basename($_SERVER['PHP_SELF']));

$address = 'http://'.$_SERVER['HTTP_HOST'];

echo '<a href="'.$address.'">Home</a>';

for($i = 0; $i < $count; $i++)
	echo '&nbsp;&raquo;&nbsp;<a href="'.($address .= '/'.$dirlist[$i]).'">'.$dirlist[$i].'</a>';

?>
<br>
<h2>Descrizione</h2>