var $ = jQuery.noConflict();
/** slider **/
$('#slider .cycle-slideshow').cycle({
		slides: 'div',
		speed:1000,
		timeout:3000,
		pauseOnHover: true,
		next: '#next',
		prev: '#prev',
		pager: '.cycle-pager',
		loader: true,
		swipe: true
});
/** carousel **/
function buildCarousel(visibleSlides) {
    $('.carousel').cycle({
        fx: 'carousel',
		slides: 'div',
		speed:1000,
		timeout:3000,
		pauseOnHover: true,
		next: '.next',
		prev: '.prev',
		swipe: true,
		carouselVisible: visibleSlides,
		carouselFluid: true
    });
}
function initCycle() {
    var width = $(document).width();
    var visibleSlides = 4;

    if ( width < 390 ) {visibleSlides = 1}
    else if(width < 600 ) {visibleSlides = 2}
	else if(width < 960 ) {visibleSlides = 3}
    else {visibleSlides = 4};

    buildCarousel(visibleSlides);
}

function reinit_cycle() {
    var width = $(window).width();
    var destroyCarousel = $('.carousel').cycle('destroy');

    if ( width < 400 ) {destroyCarousel;reinitCycle(1);} 
    else if ( width > 400 && width < 700 ) {destroyCarousel; reinitCycle(3);} 
    else {destroyCarousel;reinitCycle(4);}
}

function reinitCycle(visibleSlides) {
    buildCarousel(visibleSlides);
}
var reinitTimer;
$(window).resize(function() {
    clearTimeout(reinitTimer);
    reinitTimer = setTimeout(reinit_cycle, 100);
});

$(document).ready(function(){
    initCycle();    
});
/** fancybox **/
$('.zoom').fancybox({
	padding : 2,
	openEffect  : 'elastic',
	closeEffect : 'elastic',
	prevEffect : 'fade',
	nextEffect : 'fade',
	titlePosition : 'over',
	helpers : {
		title : {
			type : 'over'
		},
		buttons	: {}
	},

});
/** Mixitup **/
$(function(){
  $('.mixitup').mixItUp();
});
/** tabs **/
$(document).ready(function() {
	$(".tab_content").hide(); 
	$("ul.tabs li:first").addClass("active").show(); 
	$(".tab_content:first").show(); 
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); 
		$(this).addClass("active"); 
		$(".tab_content").hide(); 
		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).fadeIn(); 
		return false;
	});
});
/** go top **/
$(window).scroll(function() {
	if($(this).scrollTop() > 300) {
        $('#gotoTop').css('display','block');
		$('#gotoTop').stop().animate({opacity: 1});
	} else {
		$('#gotoTop').stop().animate({opacity: 0}, function(){
			$(this).css('display','none');
        });
	}
});
$('#gotoTop').click(function() {
	$('body,html').animate({scrollTop:0},400);
    return false;
});

