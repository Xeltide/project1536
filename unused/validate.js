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