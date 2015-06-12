(function () {
	"use strict";
		var names = ['chido', 'felipe', 'pancho', 'sabro'];
		
		for (var i = 0; i < names.length; i++) {
			console.log('the name at index ' + i + ' is: ' + names[i]);
			};		
				console.log('There are ' + names.length + ' names in the array');
				console.log('The first names is: ' + names[0]);
				console.log('The second names is: ' + names[1]);
				console.log('The third names is: ' + names[2]);
				console.log('The fourth names is: ' + names[3]);
				();

		names.forEach(function (element, index, array) {
		    	console.log('The names at index ' + index + ' is: ' + element);
		});
});

