<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- Qui devono essere inserite tutte le informazioni per il browser -->
<title>Elenco documenti per spiegazioni</title>
<meta name="keywords" content="Galdus, scuola, reti e sistemi, Pietro Maffi">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="/css/style.css" type="text/css" />
<link rel='stylesheet' href='/css/3colonneColorGaldus.css' type='text/css' />
<link rel='stylesheet' href='/css/site.css' type='text/css' />
<link rel="stylesheet" href="/css/menu_style.css" type="text/css" />
<style>
body{
margin:0px;
padding:0px;
font-family:verdana;
font-size:14px;
color:#123456;
}
.rosso{
color:#F00;
font-style:italic;
}
.smallgreen{
color:#05FF05;
font-size:90%;
}
.big{
font-size:100%;
}
/*cambio stile menu verticale specifico per la pagina */
div#navigation a{
font-size:13px;
color:#FFCC33;
font-weight: bold; 
text-decoration: none;
}
</style>
</head>
<body>
<div id="container">
<div id="header">
    <h1>Esercizi html, javascript e css</h1>
</div>
<div id="navigation">
<div class="bubplastic vertical lime" id="bigT">
<?php
ini_set('include_path', '/home/galdusmaffi.tk/public/');
include 'template/menu.php';
?>
</div> <!-- fine menu -->
</div>
<div id="extra">
<?php
include 'template/news.php';
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

<h1>Elenco documenti</h1>
<h2>Le reti</h2>
<a href="Informatica Base.pdf">Informatica Base.pdf</a> [Prima]<br> 
<a href="2_Reti.pdf">2_Reti.pdf</a><br>
<a href="Informatica di base.pdf">Informatica di base.pdf</a> [Prima]<br>
<a href="Internet.pdf">Internet.pdf</a> [Prima]<br>
<a href="la_rete_aziendale.pdf">la_rete_aziendale.pdf</a> [Seconda]<br>
<a href="1-retieprotocolli.pdf">Reti e protocolli</a> [Seconda]<br>
<a href="reti-informatiche-bn-imp-p1.1-5.pdf">Le reti informatiche 1(perche')</a> 
<a href="reti-informatiche-bn-imp-p1.6-10.pdf">&nbsp;2&nbsp;</a> 
<a href="reti-informatiche-bn-imp-p1.11-15.pdf">&nbsp;3&nbsp;</a> 
<a href="reti-informatiche-bn-imp-p1.16-20.pdf">&nbsp;4&nbsp;</a> [Seconda]<br>
<a href="3-Protocolli-di-Internet.pdf">I protocolli di Internet</a> [Seconda]<br>
<a href="Pro xy HTTP.docx">Proxy HTTP</a> [Seconda]<br>
<a href="TelefoniaMobile.pdf">Storia della telefonia mobile</a> [Seconda]<br>
<a href="150 Anni di storia della telefonia.pdf">150 di storia della telefonia mobile</a> [Seconda]<br>
<a href="http://home.dei.polimi.it/gpalermo/doc/4-reti.ppt">Le reti POLIMI</a> [Seconda]<br>
<a href="Le_Reti_Informatiche.pdf">Le_Reti_Informatiche.pdf</a> [Seconda]<br>
<a href="Reti di Calcolatori infoDes_04_reti_2011.pdf">Le Reti di calcolatori.pdf</a> [Terza]<br>
<a href="Reti avanzate.pdf">Reti avanzate.pdf</a> [Terza]<br>
<a href="Riti informatiche presentazione.pdf">Reti informatiche presentazione.pdf</a> [Terza]<br>
<a href="http://www.di.unisa.it/~ads/corso-security/www/CORSO-9900/http/index.htm">Il protocollo http</a> [Terza]<br>
<hr>
<h2>Obiettivi Prime</h2>
<a href="HTML e CSS Inizio.pdf">HTML base</a><br>
<a href="Storia_Internet.pdf">Storia di internet</a><br>
<a href="2_Reti.pdf">Le Reti</a><br>
<a href="tipologiareti.html">tipologiareti</a><br>
<a href="la_rete_aziendale.pdf">la_rete_aziendale.pdf</a><br>
<hr>
<h2>I sistemi operativi</h2>
<a href="Sistemi operativi.pdf">Sistemi operativi.pdf</a><br>
<h2>La programmazione</h2>
<a href="La programmazione e i Diagrammi di Flusso.pdf">Introduzione alla programmazione</a><br>
<a href="01.algoritmi.pdf">Introduzione alla programmazione 2</a><br>
<h2>Il web design</h2>
<a href="HTML e CSS Inizio.pdf">HTML e CSS Inizio.pdf</a><br>
<a href="Scrivere una applicazione Andorid.pdf">Scrivere una applicazione Andorid.pdf</a><br>
<a href="Struttura ad albero di un documento.pdf">Struttura ad albero di un documento.pdf</a><br>
<a href="http://home.dei.polimi.it/gpalermo/doc/3-htmlLinguaggi.ppt">Le basi di HTML e Javascript POLIMI</a><br>
<a href="progettositi.pdf">La progettazione dei siti</a><br>
<hr>
<a href="I FORM in html 5.pdf">I FORM in html 5.pdf</a>
<hr>
<h2>Il php e xampp</h2>
<a href="xampp.pdf">Introduzione a XAMPP</a><br>
<a href="dispensa-php.pdf">Introduzione linguaggio PHP</a><br>
<a href="PHP Base.pdf">Introduzione alla programmazione PHP</a><br>
<a href="php_e_mysql.pdf">Usare MySQL in PHP</a><br>
<a href="Manuale essenziale PHP.pdf">Manuale essenziale PHP</a><br>
<hr>
<h1>La programmazione OOP</h1>
<a href="http://www.html.it/articoli/codice-procedurale-vs-oop-1/">Le differenze tra procedure e oggetti...</a><br>
<a href="http://www.html.it/pag/18339/introduzione-alla-oop/">Introduzione alla programmazione ad oggetti...</a>

<hr>
<h1>Diagrammi di flusso</h1>
<a href="CalcolaMax di n.pdf">Diagramma di flusso calcolo max di n numeri</a>
<hr>
<h1>Libri on line</h1>
<a href="http://upload.wikimedia.org/wikibooks/it/d/dd/HTML.pdf">Referenza HTML</a><br>
<a href="http://upload.wikimedia.org/wikibooks/it/d/d0/JavaScript.pdf">Referenza Javascript</a><br>
<a href="http://upload.wikimedia.org/wikibooks/it/0/02/CSS.pdf">Referenza CSS</a><br>


<br>
</div>
<div id="footer">&copy; 2013 - Grafica, layout e guide sono di esclusiva propriet&agrave; di Pietro Maffi<br>
Note e informazioni legali &nbsp;
<!-- Start counter code -->

<a href="http://galdusmaffi.tk"><img alt="Website counter" hspace="0" vspace="0" border="0" src="http://slickcounterdownloads.net/6902149-419653800B623A8BB444AEE8903E03F2/counter.img?theme=43&digits=5&siteId=8"/></a>
<noscript><br/><a href="http://poker-rulesinfo.info">poker-rulesinfo.info</a><br>The following text will not be seen after you upload your website, please keep it in order to retain your counter functionality <br> <a href="http://single-deckblackjack.com/the-factor-of-the-amount-of-players-at-a-blackjack-table/" target="_blank">single-deckblackjack.com</a></noscript>

<!-- End counter code -->
<a href="http://www.mrwebmaster.it" target="_blank"><img border="0" src="http://www.mrwebmaster.it/images/ns_ban/88x31-amico.gif" width="88" height="31" alt="Mr.Webmaster"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- Begin Shinystat code -->
<script type="text/javascript" src="http://codice.shinystat.com/cgi-bin/getcod.cgi?USER=galdusmaffi"></script>
<noscript>
<a href="http://www.shinystat.com" target="_top">
<img src="http://www.shinystat.com/cgi-bin/shinystat.cgi?USER=galdusmaffi" alt="Free hit counter" border="0" /></a>
</noscript>
<!-- End Shinystat code -->

</div>

</body>
</html>