(function() {
    "use strict";

    // create a circle object
    var circle = {
        radius: 3,

        getArea: function (radius) {
            // TODO: complete this method
            // hint: area = pi * radius^2
            var pi = Math.PI;
            return pi * Math.pow(this.radius, 2);

        },

        logInfo: function (doRounding) {
            // TODO: complete this method.
                if (doRounding){
                    console.log("Area of a circle with radius: " + Math.round(this.getArea()));
                } else {
                    console.log("Area of a circle with radius: " + this.getArea() + ", is: ");                  
                }
            // If doRounding is true, round the result to the nearest integer.
            // Otherwise, output the complete value

        }
    };

    // log info about the circle
    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

    console.log("=======================================================");
    // TODO: Change the radius of the circle to 5.
    circle.radius = 5;


    // log info about the circle
    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);
})();
