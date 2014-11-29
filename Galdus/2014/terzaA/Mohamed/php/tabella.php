<! doctype html>
<html>
<head>
<style>
html, body{margin:0; padding: 0}


.contenuto{
position:absolute;
font-family:arial;
float:left; 
top:150px; 
left:100px; 
width:800px; 
height:1000px; 
color:black; 
background:white; 
border:1px solid #000;
padding:10;
opacity:0.6;
filter:alpha(opacity=60);
-moz-opacity:0.8
}
table, tr, td {
  border: 1px dashed  blue;
  border-collapse: separate;
  border-spacing: 5px;
}

</style>
</head>
<body>
<div class=contenuto>
<h1>La tavola Pitagorica</h1>
<table>

<?php function crea_tabella() {
    for ($x=1; $x <= 12; $x++) { ?>
        <tr><?php for ($y=1; $y <= 12; $y++) {
            $r = $x*$y; ?>
            <td><?php echo $r; ?></td>
        <?php } ?></tr>
    <?php }
}
$crea_tabella = crea_tabella(); ?>
</table>
</div>
</body>
</html>