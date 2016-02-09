
function sizePanel(){
	var currentHeight = $(window).height();
	var currentWidth = $(window).width();

	$('.panel').css({'height': currentHeight});
};

var currentTab = 1;

function findSection(){
	switch(currentTab){
		case 1:
			return '#one';
		case 2:
			return '#two';
		case 3:
			return '#three';
		case 4:
			return '#four';
		case 5:
			return '#five';
		case 6:
			return '#six';
		case 7:
			return '#seven';
		case 8:
			return '#eight';
		case 9:
			return '#nine';
		case 10:
			return '#ten';
		case 11:
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
	if(currentTab === 11) {
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
	}
});

$(document).ready(function(){
	sizePanel();
});

