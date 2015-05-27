(function () { 
    "use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var message;
switch (color) {
    case "red":
        message = "apples are red";
        break;
        case "orange":
        message = "oranges are orange";
        break;
    case "yellow":
        message = "bananas are yellow";
        break;
    case "green":
        message = "veggies are green";
        break;
    case "blue":
        message = "Sky is blue";
        break;
    default:
       message = "I know nothing those colors.";
}});


