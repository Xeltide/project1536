
function sizePanel(){
	var currentHeight = $(window).height();
	var currentWidth = $(window).width();

	$('.panel').css({'height': currentHeight});
};


$(window).resize(function(){
	sizePanel();
});

$(document).ready(function(){
	sizePanel();
});