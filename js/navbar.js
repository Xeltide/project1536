/*HEADER OPACITY*/
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
/*END HEADER OPACITY*/

/*SELECTED NAV LINK*/
$(document).ready(function() {
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
/*END SELECTED NAV LINK*/

/*DROPDOWN MENU*/
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
/*END DROPDOWN MENU*/

/*FORM VALIDATION*/
function $(id) {
	var element = document.getElementById(id);
	return element;
}

function testUsername(id) {
	var regex = new RegExp (/^[a-zA-Z0-9_\-]{4,12}$/);
	return regex.test($(id).value);
}

function testPassword(id) {
	var regex = new RegExp (/^\S{6,40}$/);
	return regex.test($(id).value);
}

function testEmail(id) {
	var regex = new RegExp (/^[a-zA-Z0-9_\-\!\.]+@[a-zA-Z0-9_\-]+\.[a-zA-Z]{2,4}$/);
	return regex.test($(id).value);
}

function loginValidate() {
	if (testUsername('username_login') && testPassword('password_login')) {
		return true;
	} else {
		if (!testUsername('username_login')) {
			$('username_login').classList.add('error');
		} else {
			$('username_login').classList.remove('error');
		}
		if (!testPassword('password_login')) {
			$('password_login').classList.add('error');
		} else {
			$('password_login').classList.remove('error');
		}
		return false;
	}
}

function testMatchPassword(id1, id2) {
	return $(id1).value == $(id2).value;
}

function signUpValidate() {
	if (testUsername('username_register') && testEmail('email') && testPassword('password_register') && testPassword('password_confirm') && testMatchPassword('password_register','password_confirm')) {
		return true;
	} else {
		if (!testUsername('username_register')) {
			$('username_register').classList.add('error');
		} else {
			$('username_register').classList.remove('error');
		}

		if (!testEmail('email')) {
			$('email').classList.add('error');
		} else {
			$('email').classList.remove('error');
		}

		if (!testPassword('password_confirm')) {
			if (!testPassword('password_register')) {
				$('password_register').classList.add('error');
				$('password_confirm').classList.add('error');
			} else {
				$('password_confirm').classList.add('error');
				$('password_register').classList.remove('error');
			}
		} else if (testPassword('password_register')) {
			if (!testMatchPassword('password_register','password_confirm')) {
				$('password_confirm').classList.add('error');
				$('password_register').classList.remove('error');
			} else {
				$('password_register').classList.remove('error');
				$('password_confirm').classList.remove('error');
			}
		}
		return false;
	}
}
/*END FORM VALIDATION*/
/*QUESTION FORM VALIDATION*/
function testName(id) {
	var regex = new RegExp (/^[a-zA-Z]{2,12}$/);
	return regex.test($(id).value);
}

function formValidate() {
	if (testName('formName') && testEmail('formEmail')) {
		return true;
	} else {
		if (!testName('formName')) {
			$('formName').classList.add('error');
		} else {
			$('formName').classList.remove('error');
		}
		if (!testEmail('formEmail')) {
			$('formEmail').classList.add('error');
		} else {
			$('formEmail').classList.remove('error');
		}
		return false;
	}
}

/*END QUESTION FORM VALIDATION*/