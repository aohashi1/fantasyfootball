(function() {
	"use strict";

	window.onload = function() {
		readannouncements();
	};

	function readannouncements() {
		var ajax = new XMLHttpRequest();
		ajax.open('get', 'announcement.txt', true); 
    	ajax.onreadystatechange = processannouncements;
    	ajax.send(null);
	}

	function processannouncements() {
		document.getElementById("announcements").innerHTML = this.responseText();
	}

})();