$(document).ready(function() {

	var headerclass = document.querySelector("#header");

	$(window).scroll(function() {
		if ($(window).scrollTop() > 0) {
			headerclass.classList.add("header-transparent");
			headerclass.classList.remove("header-opaque");
		} else {
			headerclass.classList.remove("header-transparent");
			headerclass.classList.add("header-opaque");
		}
	});

	$("#header").mouseover(function() {
		headerclass.classList.add("header-opaque");
		headerclass.classList.remove("header-transparent");
	});

	$("#header").mouseleave(function() {
		if ($(window).scrollTop() > 0) {
			headerclass.classList.add("header-transparent");
			headerclass.classList.remove("header-opaque");
		} else {
			headerclass.classList.add("header-opaque");
			headerclass.classList.remove("header-transparent");
		}
	});

});