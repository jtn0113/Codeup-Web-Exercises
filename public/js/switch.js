var luckyNumber = Math.floor(Math.random()* 6);
console.log(luckyNumber);
var total = 60


switch (luckyNumber) {
	case 0:
		console.log("Your total is: $" + total);
		break;
	case 1:
		console.log("Your total is: $" + (total * .9));
		break;
	case 2:
		console.log("Your total is: $" + (total * .75));
		break;
	case 3:
		console.log("Your total is: $" + (total * .65));
		break;
	case 4:
		console.log("Your total is: $" + (total * .5));
		break;
	case 5:
		console.log("IT'S ALL FREE!!!");
		break;
}

// ======================================================
var month = "10";

switch (month) {
	case "1":
		console.log("The month is January");
		break;
	case "2":
		console.log("The month is February");
		break;
	case "3":
		console.log("The month is March");
		break;
	case "4":
		console.log("The month is April");
		break;
	case "5":
		console.log("The month is May");
		break;
	case "6":
		console.log("The month is June");
		break;
	case "7":
		console.log("The month is July");
		break;
	case "8":
		console.log("The month is August");
		break;
	case "9":
		console.log("The month is September");
		break;
	case "10":
		console.log("The month is October");
		break;
	case "11":
		console.log("The month is November");
		break;
	case "12":
		console.log("The month is December");
		break;
}

