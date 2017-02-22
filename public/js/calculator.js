var numBtns = document.getElementsByClassName('numBtn');
var operators = document.getElementsByClassName('operator');
var btns = document.getElementsByClassName('btn');
var printToDisplay = function(e){
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
	}

for(var i = 0; i < numBtns.length; i++){
	numBtns[i].addEventListener('click', printToDisplay);
};

for(var i = 0; i < operators.length; i++){
	operators[i].addEventListener('click', function(e){
		var middle = document.getElementById("middle");
		var btnValue = this.value;

			middle.value = "";
			middle.value = btnValue;
		});
};

	var body = document.getElementsByTagName('body')[0];
	body.addEventListener('keypress', function(e){
		var middle = document.getElementById("middle");
		var btnValue = event.key;
		var left = document.getElementById("left");
		var right = document.getElementById("right");
		var isOperator = (btnValue == '*' || btnValue == '/' || btnValue == '+' || btnValue == '-');

		if(btnValue == "." || !isNaN(btnValue) || isOperator){
			if(isOperator){
				middle.value = btnValue;
			}
			else if(middle.value == ""){
				left.value = left.value + btnValue;
			}
			else {
				right.value = right.value + btnValue;
			}
		};
		if(btnValue == "Enter"){
		buttonequals();
		}
		else if(btnValue == "c"){
		buttonclear();
		};
	});

var buttonequals = function(event) {
	if(middle.value == "+") {
		left.value = (parseFloat(left.value) + parseFloat(right.value)).toFixed(2);
		middle.value = "";
		right.value = "";
	}
	else if(middle.value == "-") {
		left.value = (parseFloat(left.value) - parseFloat(right.value)).toFixed(2);
		middle.value = "";
		right.value = "";
	}
	else if(middle.value == "*") {
		left.value = (parseFloat(left.value) * parseFloat(right.value)).toFixed(2);
		middle.value = "";
		right.value = "";
	}
	else if(middle.value == "/") {
		left.value = (parseFloat(left.value) / parseFloat(right.value)).toFixed(2);
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

