<!DOCTYPE html>
<html>
<title>Sito di Pietro Maffi</title>
<meta keyword="Galdus, scuola, informatica, reti e sistemi, Pietro Maffi">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel='stylesheet' href='/css/3colonneColorGaldus.css' type='text/css' />
<link rel='stylesheet' href='/css/site.css' type='text/css' />
<link rel="stylesheet" href="/css/menu_style.css" type="text/css" />
<script language="javascript" src="/js/js.js"></script>

<style>
/*cambio stile menu verticale specifico per la pagina */
div#navigation a{
font-size:12px;
color:#FFCC33;
font-weight: bold; 
text-decoration: none
}
.folders{
  margin:auto;
}

</style>
</head>
<body>
<?php
ini_set('include_path', '/home/galdusmaffi.tk/public/');
include 'template/page1.php';

?>
<!-- Insert here your content in html-->
<h2>Lista automatica dei file</h2>
<!-- Start folder listing -->
<?php
// open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);
Print ("$indexCount files<br>\n");

// sort 'em
sort($dirArray);

// print 'em
print("<div class='folders'>\n");
print("<table>\n");
print("<tr><th>Filename</th><th>Filetype</th><th>Filesize</th></tr>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		print("<tr><td><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
		print("<td>");
		print(filetype($dirArray[$index]));
		print("</td>");
		print("<td>");
		print(filesize($dirArray[$index]));
		print("</td>");
		print("</tr>\n");
	}
}
print("</table>\n");
print("</div>\n");

?>
<!-- end folder listing -->

<h2>
Esercizi CSS
</h2>

<ol>
<li> Usando CSS fate in modo che il testo <b>non</b> in enfasi del seguente paragrafo 
     compaia in enfasi e viceversa.
     <BLOCKQUOTE>
	Gli indirizzi <em>attualmente</em> in uso sono prevalentemente quelli di 
        <em>classe</em> A, B e C. Questi indirizzi non sono <em>mai</em> dati 
        singolarmente, ma per motivi di organizzazione di rete sono dati in <em>blocchi</em>
        di indirizzi adiacenti.
     </BLOCKQUOTE>
<li> Usando CSS fate in modo che il seguente paragrafo allineato a destra, sia di 
     colore verde, ma solo la parola <b>indirizzi</b> sia di colore rosso. Lo sfondo del
     paragrafo deve essere di colore azzurro chiaro.
     <BLOCKQUOTE>
	Gli indirizzi attualmente in uso sono prevalentemente quelli di classe A, B e C. 
        Questi indirizzi non sono mai dati singolarmente, ma per motivi di organizzazione 
        di rete sono dati in blocchi di indirizzi adiacenti.
     </BLOCKQUOTE>
<li> Usando CSS fate in modo che la prima lettera del seguente paragrafo sia colorata 
     di verde e sia grande il triplo delle lettere del paragrafo stesso.
	<BLOCKQUOTE>
	Il termine 'portale' &egrave; ormai divenuto una vera e propria 
	'parola magica' all'interno della sempre pi&ugrave; vasta comunit&agrave; 
        di utenti e operatori della rete Internet.
	</BLOCKQUOTE>
<li> Creare una pagina html contenente il vostro nome e cognome. Utilizzando CSS fate in 
     modo che ogni lettera sia grande 36 punti, venga usato un font <em>senza grazie</em>
     e venga colorata in maniera differente dalle altre.

<li> Usando CSS fate in modo che i paragrafi del seguente brano (tratto dal libro online
     <EM> Internet 2000</EM> di M. Calvo, M. Ciotti, G. Roncaglia, M. Zela disponibile 
      presso <A href="http://www.laterza.it/internet/">http://www.laterza.it/internet/</A>)  
     siano giustificati, l'interlinea dei paragrafi sia pari a 1.5; mentre, il margine 
     destro e quello sinistro siano di 1.5 centimetri. Le intestazioni di livello uno 
     siano di colore rosso, centrate e grandi 16 punti; mentre le intestazioni di livello 
     due siano di colore blu, allineate a sinistra e grandi 14 punti. 
     <div style="margin-left:2cm; margin-right:2cm;margin-bottom:0.5cm;">
        <h1>Navigare in Internet: alcune considerazioni generali</h1>
        <p>Cos'è Internet e a che cosa serve? Sono questi probabilmente i primi
        e fondamentali interrogativi ai quali chi si avvicina alla 'rete delle
        reti' vorrebbe trovare risposta. Si tratta tuttavia di interrogativi ai
        quali rispondere in maniera adeguata può essere molto difficile. Le
        risposte formalmente più corrette sono in qualche misura 'tecniche' e,
        nel corso del libro, cercheremo di fornirle in maniera per quanto
        possibile chiara e completa.
	<br> [ ... ]  <BR>
	Si tratta di un dato importante, da tener presente per capire la
        caratteristica forse fondamentale di Internet: quella di essere insieme
        una risorsa informativa e un luogo di interazione culturale, sociale,
        economica.</p>
        <h2>Internet come risorsa informativa</h2>
        <p>Chi collega per la prima volta il proprio computer a Internet e
        inizia a 'navigare' nella rete ha spesso una idea molto vaga di quanta,
        e quanto variegata, sia l'informazione raggiungibile. Nel corso della
        nostra esperienza didattica, ci è capitato spesso di discutere questo
        problema con persone che vedevano in Internet soprattutto uno strumento
        per accedere a banche dati o a pochi siti fortemente strutturati, cioè
        a 'depositi' di informazione ragionevolmente ordinata e organizzata: ad
        esempio il catalogo di una biblioteca, o l'archivio di articoli di un
        giornale, o una raccolta di dati di borsa.
	<br> [ ... ]   <BR>
	Deve però sapere fin d'ora che fino a quando non avrà capito almeno nelle
        linee essenziali cos'è un ipertesto, e perché tanta parte
        dell'informazione distribuita attraverso Internet ha una forma
        ipertestuale (o, per essere più esatti, ipermediale), non potrà dire
        di aver compreso cos'è Internet.
	<h2>Internet come villaggio globale</h2>
        Dietro all'informazione che circola su Internet ci sono, si è detto,
        delle persone. Ogni scambio informativo è una forma di interazione
        sociale, e la rete è dunque luogo di innumerevoli interazioni sociali.	
	<br> [ ... ]  <BR>
	Ma in quel mondo dovranno e vorranno vivere anche molti di
        noi, perché la durata media della vita si allunga, e con essa cresce la
        sovrapposizione fra generazioni diverse potenzialmente attive e
        concorrenti sul mercato del lavoro. <P>
     </div>
<li> Creare una pagina html contenente una serie di link (potreste usare un elenco
     di link a giornali on-line). Usando CSS fare in modo che normalmente il colore 
     dei link 
     sia rosso; mentre, quando il cursore del mouse si posiziona su di essi il colore
     diventi giallo, il testo diventi tutto in maiuscolo e la sua grandezza diventi
     di 14 punti.
<li> Scrivere un documento HTML contenente il proprio nome e cognome (solo le iniziali
     devono essere in maiuscolo). Usando opportunamente CSS fate in modo che tutte le 
     lettere siano in maiuscolo, di colori diversi (tranne il rosso ed il bianco) e su 
     sfondo rosso. Quando si va con il mouse sulla terza lettera del cognome o del nome, 
     questa deve diventare bianca, minuscola ed in grassetto. 

<li> Scegliete un'immagine di vostro gradimento; posizionarla come sfondo del testo 
     dell'esercizio 5.
<li> Scegliete un'immagine di vostro gradimento; relativamente al testo dell'esercizio 5,
     l'immagine deve essere lo sfondo di tutte le intestazioni.
<li> Scegliete un'immagine di vostro gradimento; relativamente al testo dell'esercizio 5,
     l'immagine deve ripetersi solo in alto ed orizzontalmente. Inoltre, non deve scrollare 
     con la pagina. 
<li> Utilizzando CSS fate in modo che i paragrafi del brano dell'esercizio 5 abbiano un
     bordo superiore ed inferiore tratteggiato e di colore verde; mentre, il bordo destro
     e sinistro deve essere incassato e di colore rosso.
<li> Utilizzando CSS, relativamente al brano dell'esercizio 5, fate in modo che la parola 
     Internet nel  abbia un bordo rosso; le intestazioni devono essere centrate e tutte le
     parole devono iniziare in maiuscolo (non editare il file HTML); indentare di un pollice
     la prima riga di tutti i paragrafi, tranne quello che inizia per "Deve per&ograve; 
     sapere..." che deve essere indentato di 4 centimetri.
<li> Creare un documento HTML contenente una serie di link (potreste usare un elenco
     di link a giornali on-line). Usando CSS fare in modo che il testo sia formattato
     come un link; mente ogni link appaia come testo normale.
<li> Creare un documento HTML contenente una serie di link (potreste usare un elenco
     di link a giornali on-line). Usando CSS fare in modo che la dimensione dei link 
     siano il doppio del testo normale.
<li> Creare un documento HTML contenente due elenchi puntati. Usando opportunamente CSS
     incorniciare il primo elenco con un bordo doppio di colore verde e cambiare il 
     simbolo degli elementi pari del secondo elenco in un quadrato.
<li> Usando CSS cambiare i pallini della seguente lista non ordinata con un'immagine di
     vostra scelta.
	<ul type="disc" style="margin-top:0.3cm;margin-bottom:0.3cm;">
	<li> Primo item
	<li> Secondo item
	<li> Terzo item
	<li> Quarto item
	</ul>
<li> Usando CSS e senza modificare i tag HTML trasformare la lista non ordinata 
     dell'esercizio precedente in ordinata.
<li> Usando opportunamente CSS fate in modo che nel seguente elenco ordinato vengano usate
     le lettere maiuscole invece dei numeri.
	<ol style="margin-top:0.3cm;margin-bottom:0.3cm;">
	<li> Primo item
	<li> Secondo item
	<li> Terzo item
	<li> Quarto item
	</ol>
<li> Usando opportunamente CSS fate in modo che lo sfondo dell'intera lista sia verde, largo 
     12 centimetri ed abbia un padding di 1 centimetro; mentre, 
     lo sfondo di ogni item sia rosso e grande a sufficienza per contenere il testo dell'item.
     Il testo deve essere in un carattere qualiasi <em>senza grazie</em>
	<ul style="margin-top:0.3cm;margin-bottom:0.3cm;">
	<li> Primo item
	<li> Secondo item
	<li> Terzo item
	<li> Quarto item molto, molto, molto, molto lungo
	</ul>
     Il risultato dovrebbe essere simile a <a href="BOOK/listae.gif" target="_new">questo</a>.
<li> Cambiare il puntatore del mouse in un punto interrogativo quando si passa sopra al 
     testo enfatizzato del seguente paragrafo
     <BLOCKQUOTE>
	Gli indirizzi <em>attualmente</em> in uso sono prevalentemente quelli di 
        <em>classe</em> A, B e C. Questi indirizzi non sono <em>mai</em> dati 
        singolarmente, ma per motivi di organizzazione di rete sono dati in <em>blocchi</em>
        di indirizzi adiacenti.
     </BLOCKQUOTE>
<li> <a href="./include/esercizi/esPhpCss1.pdf">Esercizio</a> con funzionalit&agrave; di PHP e CSS

</ol>



<P> &nbsp; <P>


<?php

include 'template/page2.php';

?>

</body>
</html>
