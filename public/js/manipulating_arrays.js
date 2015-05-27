(function () {
	"use strict";

// todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
	var planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus"];
		function logPlanets() {
	    	console.log('Here is the list of planets:');
	    	console.log(planets);
}
		console.log('Adding "The Sun" to the beginning of the planets array.');
			planets.unshift("The Sun");
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Adding "Pluto" to the end of the planets array.');
			planets.push("Pluto");
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Removing "The Sun" from the beginning of the planets array.');
			planets.shift("The Sun");
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Removing "Pluto" from the end of the planets array.');
			planets.pop("Pluto");
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Finding and logging the index of "Earth" in the planets array.');
			planets.indexOf("Earth");
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Using splice to remove the planet after Earth.');
			planets.splice(3, 1);
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Using splice to add back the planet after Earth.');
			planets.splice(3, 0, "Mars")
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Reversing the order of the planets array.');
			planets.reverse();
// todo: Do what the log statement above says you will do.
	logPlanets();
		console.log('Sorting the planets array.');
			planets.sort();
// todo: Do what the log statement above says you will do.
	logPlanets();
// });	