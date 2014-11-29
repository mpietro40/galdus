
function pliggit() {
	var check = window.parent.submit_url;
	if(!check) { 
		var url1 = document.URL; 
	} else { 
		var url1 = window.parent.submit_url; 
	}
		var url2 = 'http://www.diggita.it/evb/url.php?url='+url1;
	document.write('<iframe name="pliggit" width="54" height="71" scrolling="no" frameborder="0" src="'+url2+'"></iframe>');	
}

pliggit();