(function () {
	"use strict";

// todo:
// Create person object with firstName and lastName properties (set to your first and last name).
// var person = todo;

// todo:
// Add a say hello method to the person object that alerts hello using the firstName and lastName properties.

// Say hello from the person object.
// person.sayHello();

		var person = {};
			person.firstName = "Hector";
			person.lastName  = "Hernandez";
			alert("Hello" + " " + person.firstName);
			alert("Hello Mr." + " " + person.lastName);
			var sayHello = person;

		sayHello = function() {
			return person.firstName + " " + person.lastName);		
}
});