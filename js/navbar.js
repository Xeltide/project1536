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

$( document ).ready(function() {
    var headerClass = document.querySelector("#header");
    var headerElement = $(document.getElementById("header"));
    var loginElement = $(document.getElementById("loginbutton"));
    var button0 = document.querySelector("#button0");
    var button1 = document.querySelector("#button1");
    var button2 = document.querySelector("#button2");
    var button3 = document.querySelector("#button3");
    var button4 = document.querySelector("#button4");
    // headerClass.classList.add("header-transparent");
    var currentPage = document.location.pathname.match(/[^\/]+$/)[0];
    if (currentPage == "swimkids.html") {
        button0.classList.add("highlightbuttonclass");
    }
    if (currentPage == "preschool.html") {
        button1.classList.add("highlightbuttonclass");
    }
    if (currentPage == "drills.html") {
        button2.classList.add("highlightbuttonclass");
    }
    if (currentPage == "safety.html") {
        button3.classList.add("highlightbuttonclass");
    }
    if (currentPage == "form.html") {
        button4.classList.add("highlightbuttonclass");
    }
});

function dropFunction() {
	document.getElementById("dropdown").classList.toggle("show");
    document.getElementById("loginbutton").classList.toggle("highlightbuttonclass");
}

window.onclick = function(e) {
	if (!event.target.matches('droplink')) {
		var dropdowns = document.getElementByClassName("dropContent");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.remove('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}
