// (function () {
"use strict";

	var random = Math.floor((Math.random()*10)+1);
	alert("Let\s play a game");
	var response = prompt('Pick a number from 1-10?');
	while (response != random){
		console.log("Try again!!!!");	
	 if (response < random) {
		alert("Higher"); 
	} else if (response > random){
		alert("Lower");
	}
}
	console.log("great");
	var again = confirm("You WON!!!!! Want to play again?");
	if (again = true) {
	   alert("Great");
	} else {
	    alert("Ok see you soon.");
	}
	response = prompt('Pick a number from 1-10?');
// });

