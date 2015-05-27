(function () {
    "use strict";

	var firstEntered = [];
	var funtions = document.getElementById("functions");
	var secondEntered = [];
	var button = document.getElementsByClassName("button");
	var listener = function() { console.log("checking")};

	for (var i = 0; i < button.length; i++) {
	    button[i].addEventListener("click", listener);
	}
});