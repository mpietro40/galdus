<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Leggi parametri del browser</title>

<link rel="stylesheet" href="/css/style.css" type="text/css" />
<link rel='stylesheet' href='/css/3colonneColorGaldus.css' type='text/css' />
<link rel='stylesheet' href='/css/site.css' type='text/css' />
<link rel="stylesheet" href="/css/menu_style.css" type="text/css" />
</head>
<?php

$ip=$_SERVER["REMOTE_ADDR"];
//$ip=$_SERVER["HTTP_CLIENT_IP"];
echo $ip;

$url=file_get_contents("http://whatismyipaddress.com/ip/$ip");

//echo $url;
preg_match_all('/<th>(.*?)<\/th><td>(.*?)<\/td>/s',$url,$output,PREG_SET_ORDER);

$isp=$output[1][2];

$city=$output[9][2];

$state=$output[8][2];

$zipcode=$output[12][2];

$country=$output[7][2];

?>
<body>
<table>
<tr><td>ISP :</td><td><?php echo $isp;?></td></tr>
<tr><td>City :</td><td><?php echo $city;?></td></tr>
<tr><td>State :</td><td><?php echo $state;?></td></tr>
<tr><td>Zipcode :</td><td><?php echo $zipcode;?></td></tr>
<tr><td>Country :</td><td><?php echo $country;?></td></tr>
</table>
</body>
</html>