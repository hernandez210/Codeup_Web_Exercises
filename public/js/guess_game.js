(function () {
"use strict";

	var again = confirm("You WON!!!!! Want to play again?");
	var random = Math.floor((Math.random()*10)+1);
	var response = prompt('Pick a number from 1-10?');
	alert("Let\s play a game");

	do {
	 	console.log("while loop iteration # " + prompt);
		response++;
	// while (response != random) {
		console.log("Try again!!!!");
		if (response < random) {
		alert("Higher"); 
		} else if (response > random){
		alert("Lower");
		} response = prompt("Try again");
		console.log("great");
		} while (again = true) {
	   	alert("Great");
	// else {
	//     alert("Ok see you soon.");
		}
		response = prompt('Pick a number from 1-10?');
});


