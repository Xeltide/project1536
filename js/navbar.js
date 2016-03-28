/*HEADER OPACITY*/
$(document).ready(function() {
    
    document.getElementById('loginbutton').removeAttribute("href");
    
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
$('#loginbutton').click(function(){
	document.getElementById("dropdown").classList.toggle("show");
	document.getElementById("loginbutton").classList.toggle("highlightbuttonclass");
});

$(window).scroll(function(){
	document.getElementById("dropdown").classList.remove("show");
	document.getElementById("loginbutton").classList.remove("highlightbuttonclass");
});

$(document).click(function(e){
	var target = $(e.target);
	if ($('#dropdown').is(':visible') && !target.is('#loginbutton') && !target.closest('#dropdown').length) {
		document.getElementById("dropdown").classList.remove("show");
		document.getElementById("loginbutton").classList.remove("highlightbuttonclass");
	}
});
/*END DROPDOWN MENU*/

/*FORM VALIDATION*/
function $_(id) {
	var element = document.getElementById(id);
	return element;
}

function testUsername(id) {
	var regex = new RegExp (/^[a-zA-Z0-9_\-]{4,12}$/);
	return regex.test($_(id).value);
}

function testPassword(id) {
	var regex = new RegExp (/^[a-z0-9_-\S]{6,18}$/);
	return regex.test($_(id).value);
}

function testEmail(id) {
	var regex = new RegExp (/^[a-zA-Z0-9_\-\!\.]+@[a-zA-Z0-9_\-]+\.[a-zA-Z]{2,4}$/);
	return regex.test($_(id).value);
}

function loginValidate() {
	if (testUsername('username_login') && testPassword('password_login')) {
		return true;
	} else {
		if (!testUsername('username_login')) {
			$_('username_login').classList.add('error');
			$_('userErr').classList.remove('hide');
		} else {
			$_('username_login').classList.remove('error');
			$_('userErr').classList.add('hide');
		}
		if (!testPassword('password_login')) {
			$_('password_login').classList.add('error');
			$_('passErr').classList.remove('hide');
		} else {
			$_('password_login').classList.remove('error');
			$_('passErr').classList.add('hide');
		}
		return false;
	}
}

function testMatchPassword(id1, id2) {
	return $_(id1).value == $_(id2).value;
}

function signUpValidate() {
	if (testUsername('username_register') && testName('fname') && testName('lname') && testPassword('password_register') && testPassword('password_confirm') && testMatchPassword('password_register','password_confirm')) {
		return true;
	} else {
		if (!testUsername('username_register')) {
			$_('username_register').classList.add('error');
			$_('userRegErr').classList.remove('hide');
		} else {
			$_('username_register').classList.remove('error');
			$_('userRegErr').classList.add('hide');
		}

		if (!testName('fname')) {
			$_('fname').classList.add('error');
			$_('fnameErr').classList.remove('hide');
		} else {
			$_('fname').classList.remove('error');
			$_('fnameErr').classList.add('hide');
		}

		if (!testName('lname')) {
			$_('lname').classList.add('error');
			$_('lnameErr').classList.remove('hide');
		} else {
			$_('lname').classList.remove('error');
			$_('lnameErr').classList.add('hide');
		}

		if (!testPassword('password_register')) {
			$_('password_register').classList.add('error');
			$_('password_confirm').classList.add('error');
			$_('passRegErr').classList.remove('hide');
			$_('passMatchErr').classList.add('hide');
		} else if (testPassword('password_register') && !testMatchPassword('password_register','password_confirm')) {
			$_('password_register').classList.add('error');
			$_('password_confirm').classList.add('error');
			$_('passRegErr').classList.add('hide');
			$_('passMatchErr').classList.remove('hide');
		} else {
			$_('password_register').classList.remove('error');
			$_('password_confirm').classList.remove('error');
			$_('passRegErr').classList.add('hide');
			$_('passMatchErr').classList.add('hide');
		}
		return false;
	}
}
/*END FORM VALIDATION*/
/*QUESTION FORM VALIDATION*/
function testName(id) {
	var regex = new RegExp (/^[a-zA-Z]{2,12}$/);
	return regex.test($_(id).value);
}

function formValidate() {
	if (testName('formName') && testEmail('formEmail')) {
		return true;
	} else {
		if (!testName('formName')) {
			$_('formName').classList.add('error');
		} else {
			$_('formName').classList.remove('error');
		}
		if (!testEmail('formEmail')) {
			$_('formEmail').classList.add('error');
		} else {
			$_('formEmail').classList.remove('error');
		}
		return false;
	}
}

/*END QUESTION FORM VALIDATION*/