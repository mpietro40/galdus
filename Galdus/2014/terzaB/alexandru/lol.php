<?php
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";
$var=explode('?',$_SERVER['REQUEST_URI']);
$page=preg_replace('/.*\/([^\/])/','$1',$var[0]);
unset($var);

echo $page;
$browser = get_browser(null, true);
?>