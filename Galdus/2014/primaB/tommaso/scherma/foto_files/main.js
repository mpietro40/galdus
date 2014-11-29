// JavaScript Document
var elemento_attivo;
function rollover(id)
{
	//alert('/immagini/pulsanti/' + id + '_hilite.png');
	document.getElementById(id).src='./immagini/pulsanti/' + id + '_hilite.png';
	return;
}

function rollout(id)
{
	
		document.getElementById(id).src='./immagini/pulsanti/' + id + '.png';
}

