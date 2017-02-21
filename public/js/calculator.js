// var left = document.getElementById("left");
// var middle = document.getElementById("middle");
// var right = document.getElementById("right");

// var button1 = function (event) {		
// 		left.value = left.value + "1";
// 	}
// 	document.getElementById("one").addEventListener('click', button1);

// var button2 = function (event) {
// 		left.value = left.value + "2";
// 	}
// 	document.getElementById("two").addEventListener('click', button2);

// var button3 = function (event) {
// 		left.value = left.value + "3";
// 	}
// 	document.getElementById("three").addEventListener('click', button3);

// var button4 = function (event) {
// 		left.value = left.value + "4";
// 	}
// 	document.getElementById("four").addEventListener('click', button4);

// var button5 = function (event) {
// 		left.value = left.value + "5";
// 	}
// 	document.getElementById("five").addEventListener('click', button5);

// var button6 = function (event) {
// 		left.value = left.value + "6";
// 	}
// 	document.getElementById("six").addEventListener('click', button6);

// var button7 = function (event) {
// 		left.value = left.value + "7";
// 	}
// 	document.getElementById("seven").addEventListener('click', button7);

// var button8 = function (event) {
// 		left.value = left.value + "8";
// 	}
// 	document.getElementById("eight").addEventListener('click', button8);

// var button9 = function (event) {
// 		left.value = left.value + "9";
// 	}
// 	document.getElementById("nine").addEventListener('click', button9);

// var button0 = function (event) {
// 		left.value = left.value + "0";
// 	}
// 	document.getElementById("zero").addEventListener('click', button0);

// var buttonplus = function (event) {
// 		middle.value = "+";
// 	}
// 	document.getElementById("plus").addEventListener('click', buttonplus);

// var buttonminus = function (event) {
// 		middle.value = "-";
// 	}
// 	document.getElementById("minus").addEventListener('click', buttonminus);

// var buttonmultiply = function (event) {
// 		middle.value = "*";
// 	}
// 	document.getElementById("multiply").addEventListener('click', buttonmultiply);

// var buttondivide = function (event) {
// 		middle.value = "/";
// 	}
// 	document.getElementById("divide").addEventListener('click', buttondivide);


var numBtns = document.getElementsByClassName('numBtn');
var operators = document.getElementsByClassName('operator');

for(var i = 0; i < numBtns.length; i++){
	numBtns[i].addEventListener('click', function(e){
		var middle = document.getElementById("middle");
		var btnValue = this.value;
		var left = document.getElementById("left");
		var right = document.getElementById("right");

		if(middle.value == ""){
			left.value = left.value + btnValue;
		}
		else {
			right.value = right.value + btnValue;
		}
	});
};

for(var i = 0; i < operators.length; i++){
	operators[i].addEventListener('click', function(e){
		var middle = document.getElementById("middle");
		var btnValue = this.value;

			middle.value = "";
			middle.value = btnValue;


	});
};

var buttonequals = function(event) {
	if(middle.value == "+") {
		left.value = parseInt(left.value) + parseInt(right.value);
		middle.value = "";
		right.value = "";
	}
	else if(middle.value == "-") {
		left.value = parseInt(left.value) - parseInt(right.value);
		middle.value = "";
		right.value = "";
	}
	else if(middle.value == "*") {
		left.value = parseInt(left.value) * parseInt(right.value);
		middle.value = "";
		right.value = "";
	}
	else if(middle.value == "/") {
		left.value = parseInt(left.value) / parseInt(right.value);
		middle.value = "";
		right.value = "";
	}
}
	document.getElementById("equals").addEventListener('click', buttonequals);

var buttonclear = function (event) {
		left.value = "";
		middle.value = "";
		right.value = "";

	}
	document.getElementById("C").addEventListener('click', buttonclear);
