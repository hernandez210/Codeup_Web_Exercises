(function () {
    "use strict";
// create a circle object
        var circle = {
            radius: 3,
            getArea: function () {
                // todo: finish this method
                // hint: area = pi * radius^2
                area = Math.PI * Math.pow(circle.radius, 2);
                return area;
        }}; 
        
        logInfo: function (round) {
                // todo: complete this method. if round is true, round the result to the nearest integer.
            var area = circle.getArea();
                if (round) {
                area = Math.round(area);
                }
                console.log('Area of a circle with radius: ' + this.radius + ', is: ' + area);
                };

// log info about the circle
                circle.logInfo(false);
                circle.logInfo(true);
// todo:
// Change the radius of the circle to 5.
            	circle.radius = 5; 
// log info about the circle
                circle.logInfo(false);
                circle.logInfo(true);
});








