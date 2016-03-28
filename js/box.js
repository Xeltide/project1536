var currentHeight

function sizeBox(){
	currentHeight = $('.drillbox').width();
	$('.drillbox').css({"height": currentHeight});
}

$(window).resize(function(){
	sizeBox();
});

$('.drillbox').mouseenter(function(){
	var moveheight = -currentHeight;
	$(this).children('img').animate({'margin-top': moveheight}, 300).clearQueue();
});

$('.drillbox').mouseleave(function(){
	$(this).children('img').animate({'marginTop': '0px'}, 300).clearQueue();
});

$(document).ready(function(){
	sizeBox();
});

