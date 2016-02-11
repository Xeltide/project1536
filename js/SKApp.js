
function sizePanel(){
	var currentHeight = $(window).height();
	var currentWidth = $(window).width();

	$('.panel').css({'height': currentHeight});
};

var currentTab = 1;

function findSection(){
	switch(currentTab){
		case 1:
			return '#home';
		case 2:
			return '#one';
		case 3:
			return '#two';
		case 4:
			return '#three';
		case 5:
			return '#four';
		case 6:
			return '#five';
		case 7:
			return '#six';
		case 8:
			return '#seven';
		case 9:
			return '#eight';
		case 10:
			return '#nine';
		case 11:
			return '#ten';
		case 12:
			return '#nowWhat';
	}
};

function scrollPrev(){
	if (currentTab === 1) {
	}
	else{
		--currentTab;
		var i = findSection();
		$('html, body').stop().animate({scrollTop:$(i).position().top}, 'slow');
	}
};

function scrollNext(){
	if(currentTab === 12) {
	}
	else {
		++currentTab;
		var i = findSection();
		$('html, body').stop().animate({scrollTop:$(i).position().top}, 'slow');
	}
};

function scrollResize(){
	var i = findSection();
	$('html, body').stop().animate({scrollTop:$(i).position().top}, 'slow');
};

$(window).resize(function(){
	sizePanel();
	scrollResize();
});

$(document).keydown(function(event){
	switch(event.which){
		case 38: // up arrow
			scrollPrev();
			break;

		case 40: // down arrow
			scrollNext();
			break;

		case 33: // up arrow
			scrollPrev();
			break;

		case 34: // down arrow
			scrollNext();
			break;		
	}
});

$(document).bind('mousewheel', function(mouseEvent){
	if(mouseEvent.originalEvent.wheelDelta > 0){
		scrollPrev();
	}
	else {
		scrollNext();
	}
});

$(document).ready(function(){
	sizePanel();
});

