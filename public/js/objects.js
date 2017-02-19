(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    var person = {};
    person.firstName = "John",
    person.lastName = "Nichols",
    person.sayHello = function() {
    	alert("Hello from " + this.firstName + " " + this.lastName)
    },

    console.log(person);

    person.sayHello();


    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();
