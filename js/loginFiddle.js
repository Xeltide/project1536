function dropFunction() {
	document.getElementById("dropdown").classList.toggle("show");
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
