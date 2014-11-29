"use strict";

function apAutoLoad() {
	if (document.body.addEventListener) document.body.addEventListener('keypress', apShortcut, true);
	else document.body.attachEvent('onkeypress', apShortcut);
	try {
		if (sessionStorage.mini == 'true') apStartEditor();
	} catch (e) {}
}

function apStartEditor() {
	if (typeof Mini == 'undefined') {
		var script = document.createElement('script');
		script.setAttribute('type', 'text/javascript');
		script.setAttribute('src', 'http://it.altervista.org/alterpages/script.php?cb='+(new Date()).valueOf());
		document.getElementsByTagName('head')[0].appendChild(script);
	} else if (Mini.status.ap) {
		Mini.stopEditor();
	} else {
		Mini.restartEditor();
	}
	return false;
}

function apShortcut(ev) {
	ev = ev || window.event;
	var ch = ev.charCode || ev.keyCode;
	if (ev.ctrlKey && (ch == 10 || ch == 13)) apStartEditor();
}

var Cookies = {
  get: function(name) {
    var match = document.cookie.match(name+"=(.*?)(?:;|$)");
    return match ? unescape(match[1]) : null;
  },
  set: function(name, value, days, path) {
    if (days) {
      var date = new Date();
      date.setDate(date.getDate()+days);
      days = date.toGMTString();
    }
    document.cookie = name+"="+escape(value)+(days ? "; expires="+days : "")+"; path="+(path ? path : '/');
  },
  del: function(name, path) {
    Cookies.set(name, '', -1, path);
  }
}

function switchToMobile() {
	Cookies.set('mobile',1,1,'/');
}

function switchToDesktop() {
	Cookies.set('mobile',0,1,'/');
}

function switchToMobileLink() {
	if(Cookies.get('mobile') == 0) {
		var mobLink = document.createElement('a');
		mobLink.setAttribute('class','switch-mobile');
		mobLink.setAttribute('href',window.location.pathname+'?cb='+ Math.floor(Math.random()*10000));
		mobLink.setAttribute('onclick','switchToMobile();');
		mobLink.appendChild(document.createTextNode('Passa a versione mobile'));
		document.getElementById('footer-edit').appendChild(mobLink);
	}
}

function switchToDesktopLink() {
	var url = window.location.pathname;
	if(url.match(/\/mobile\//)) {
		url = url.replace(/\/mobile/,'');
		document.getElementById('switch-desktop').setAttribute('href',url+'?cb='+ Math.floor(Math.random()*10000));
	} else {
		document.getElementById('switch-desktop').setAttribute('href',url+'?cb='+ Math.floor(Math.random()*10000));
	}
}

function apMailerCheck(form) {
	if (form.subject.value == '') {
		alert("Non hai specificato l'oggetto");
		return false;
	}
	if (form.from.value == '') {
		alert("Non hai specificato l'indirizzo per le risposte");
		return false;
	}
	if (form.message.value == 'Non hai scritto nulla nel messaggio') {
		alert("");
		return false;
	}

	if (document.getElementById('apmailer-div')) {
		document.getElementById('apmailer-div').style.display = 'block';
	} else {
		var div = document.createElement('div');
		div.id = 'apmailer-div';
		div.className = 'apmailer-popup';
		div.style.position = 'fixed';
		div.style.top = '100px';
		div.style.left = '100px';
		div.style.zIndex = '1';

		var div2 = document.createElement('div');
		div2.className = 'apmailer-head';
		var img = document.createElement('img');
		img.src = 'http://im.altervista.org/alterpages/cross-button.png';
		var cb = function(){document.getElementById("apmailer-div").style.display="none"};
		if (img.attachEvent) img.attachEvent('onclick', cb); else img.addEventListener('click', cb, false);
		div2.appendChild(img);
		
		div.appendChild(div2);

		var iframe = document.createElement('iframe');
		iframe.style.width = '100%';
		iframe.style.height = '380px';
		iframe.name = 'apmailer';
		iframe.id = 'apmailer-iframe';
		div.appendChild(iframe);
		(document.getElementsByTagName('body')[0]).appendChild(div);
	}

	return true;
}

var SlidePage = {
	galleries: {},

	$: function(id) { return document.getElementById(id) },
	
	connect: function(el, event, callback) {
		try {
			if (el.addEventListener) el.addEventListener(event, callback, false); else el.attachEvent('on'+event, callback);
		} catch (e) {}
	},

	init: function(id, images, titles) {
		if (!this.$('ap-anim')) {
			var script = document.createElement('script');
			script.setAttribute('type', 'text/javascript');
			script.setAttribute('src', 'http://it.altervista.org/js/easing.js');
			document.getElementsByTagName('head')[0].appendChild(script);
		}

		if (!id) return;
		var g = {
			curr: 0,
			currPreview: 0,
			prev: null,
			thum: 0,
			timer: null,
			images: images,
			titles: titles,
			prevs: [],
			thumbs: [],
			cache: [],
			el: {}
		};

		var m, c = this.$(id).getElementsByTagName('div');
		for (var i = 0; i < c.length; i++) if (m = c[i].className.match(/^slideshow-(.*)$/)) g.el[m[1]] = c[i];

		this.connect(g.el['link'], 'click', SlidePage.link);
		this.connect(g.el['move-left'], 'click', SlidePage.move);
		this.connect(g.el['move-right'], 'click', SlidePage.move);

		var thumbs = [];
		for (var i = 0; i < g.images.length; i++) {
			var prev = g.images[i].replace(/\/alterpages\//, '/alterpages/slideshow/').replace(/\.[a-z]+$/, '.jpg');
			g.prevs.push(prev);
			thumbs.push(g.images[i].replace(/\/alterpages\//, '/alterpages/slideshow-thumb/').replace(/\.[a-z]+$/, '.jpg'));

			var im = new Image();
			im.src = g.images[i];
			g.cache.push(im);

			var img = document.createElement('div');
			img.style.backgroundImage = 'url('+prev+')';
			img.style.display = i ? 'none' : 'block';
			img.setAttribute('data-g', id);
			this.connect(img, 'click', SlidePage.move);
			g.el.show.appendChild(img);
			g.images[i] = {'f': g.images[i], 'h': img, 'l': im};
		}

		if (thumbs.length > 5) {
			this.connect(g.el['move-prev'], 'click', SlidePage.movePreview);
			this.connect(g.el['move-next'], 'click', SlidePage.movePreview);
		} else {
			g.el['move-prev'].style.display = 'none';
			g.el['move-next'].style.display = 'none';
		}

		var j = 0;
		while (thumbs.length) {
			var chunk = thumbs.splice(0, 5);
			var group = document.createElement('div');
			if (j) group.style.display = 'none';
			for (i = 0; i < chunk.length; i++, j++) {
				var th = document.createElement('div');
				th.setAttribute('data-thumb', j);
				this.connect(th, 'click', SlidePage.jump);
				th.style.backgroundImage = 'url('+chunk[i]+')';
				g.thumbs.push(th);
				group.appendChild(th);
			}
			g.el.previews.appendChild(group);
		}

		g.thum = Math.floor(g.curr / 5);
		this.preview(g);

		this.galleries[id] = g;
	},

	link: function(ev) {
		ev = ev || window.event;
		var tg = ev.target || ev.srcElement;
		var g = SlidePage.galleries[tg.parentNode.parentNode.id];
		window.open(g.images[g.curr].f, '_blank');
	},

	move: function(ev) {
		ev = ev || window.event;
		var tg = ev.target || ev.srcElement;

		var pg = tg.parentNode;
		while (pg && pg.id.search(/^ap-slideshow-\d+$/) == -1) pg = pg.parentNode;
		if (!pg) return;

		var g = SlidePage.galleries[pg.id];

		var next = g.curr + (tg.className == 'slideshow-move-left' ? -1 : 1);
		if (next < 0) next += g.images.length;
		next %= g.images.length;

		SlidePage.slide(g, next);
	},

	jump: function(ev) {
		ev = ev || window.event;
		var tg = ev.target || ev.srcElement;

		var g = SlidePage.galleries[tg.parentNode.parentNode.parentNode.id];
		var next = parseInt(tg.getAttribute('data-thumb'));

		SlidePage.slide(g, next);
	},

	movePreview: function(ev) {
		ev = ev || window.event;
		var tg = ev.target || ev.srcElement;

		var g = SlidePage.galleries[tg.parentNode.id];

		var next = g.currPreview + (tg.className == 'slideshow-move-prev' ? -1 : 1);
		if (next < 0) next += g.el.previews.childNodes.length;
		next %= g.el.previews.childNodes.length;

		SlidePage.slidePreview(g, next);
	},

	slide: function(g, next) {
		if (g.prev != null) return;
		if (g.curr == next) return;

		var mul = (g.curr < next) ? 1 : -1;

		g.prev = g.curr;
		g.curr = next;

		g.images[g.prev].h.style.left = '0px';
		g.images[g.curr].h.style.left = (550*mul)+'px';
		g.images[g.curr].h.style.zIndex = 1;
		g.images[g.curr].h.style.display = 'block';

		Anim.anim(g.images[g.curr].h, 'left', 0, 400, Anim.E_OUTCUBIC, {suffix: 'px', callback: function(i) { i.style.zIndex = 0 }});
		Anim.anim(g.images[g.prev].h, 'left', (-150*mul), 400, Anim.E_OUTCUBIC, {suffix: 'px', callback: function(i) {i.style.display = 'none';SlidePage.galleries[i.getAttribute('data-g')].prev = null;}});

		SlidePage.slidePreview(g, Math.floor(g.curr / 5));
		SlidePage.preview(g);
	},

	preview: function(g) {
		for (var i = 0; i < g.thumbs.length; i++) {
			if (i == g.curr) {
				g.thumbs[i].className = 'slideshow-preview-active';
				g.el.title.firstChild.nodeValue = g.titles[i];
			} else {
				g.thumbs[i].className = '';
			}
		}
	},

	slidePreview: function(g, nextPreview) {
		if (g.currPreview != nextPreview) {
			var gcurrh = g.el.previews.childNodes[nextPreview];
			var gprevh = g.el.previews.childNodes[g.currPreview];

			var mul = g.currPreview < nextPreview ? 1 : -1;
			g.currPreview = nextPreview;

			gcurrh.style.display = 'block';
			gcurrh.style.left = (550*mul)+'px';
			Anim.anim(gcurrh, 'left', 0, 400, Anim.E_OUTCUBIC, {suffix: 'px'});
			gprevh.style.left = '0px';
			Anim.anim(gprevh, 'left', (-550*mul), 400, Anim.E_OUTCUBIC, {suffix: 'px', callback: function(i) { i.style.display = 'none' }});
		}
	}
}

if (window.attachEvent) window.attachEvent('onload', apAutoLoad);
else if (document.attachEvent) document.attachEvent('onload', apAutoLoad);
else if (window.addEventListener) window.addEventListener('load', apAutoLoad, false);
else if (document.addEventListener) document.addEventListener('load', apAutoLoad, false);
else if (window.onLoad) window.onLoad = apAutoLoad;