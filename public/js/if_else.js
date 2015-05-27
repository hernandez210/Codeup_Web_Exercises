 (funtion () {
 	"use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
		var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
		var color = colors[Math.floor(Math.random()*colors.length)];

		var favorite = 'red'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

		var message;
			if (color == "red") {
				console.log("apples are red");
			} else if (color == "orange") {
				console.log("oranges are orange");
			} else if (color == "yellow") { 
				console.log("bananas are yellow");
			} else if (color == "green") {
				console.log("veggies are green");
			} else if (color == "blue") {
				console.log("the sky is blue");
			} else {
				console.log("I do not know anything that color");   
			}

		var favoriteMessage = (favorite == color) ? "my fav color": "not my fav";
			console.log(favoriteMessage);
});

