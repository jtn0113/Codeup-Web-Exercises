"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
var response = "";

while (response == "" || response == null) {
	response = prompt('What is your name?');
}

// TODO: Show an alert message that welcomes the user based on their input.
var alert1 = alert('Welcome ' + response + '!');
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
var pizza = confirm('Do you like pizza, ' + response + '?');

if (pizza) {
	alert('Me too');
} else {
	alert('That\'s weird');
}

