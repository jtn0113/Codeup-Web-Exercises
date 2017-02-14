var grades = [70, 80, 95];

var total = 0;
for(var i = 0; i < grades.length; i++) {
    total += grades[i];
}

var average = total/3

console.log(average);

if (average>80){
	console.log("You're Awesome!");
} else {
	console.log("You need to practice more");
}

// ----------------------------------------------


var flipACoin = Math.floor(Math.random()* 2);
console.log(flipACoin);

if (flipACoin<=0){
	console.log("Buy a car");
} else {
	console.log("Buy a house");
}

var buyWhat = (flipACoin<=0) ? "Buy a car" : "Buy a house";
console.log(buyWhat);

// -----------------------------------------------


var Ryan = 250;
var Cameron = 180;
var George = 320;
var discount = .35
var RyanAfterDiscount = Ryan - (Ryan * discount)
var CameronAfterDiscount = Cameron - (Cameron * discount)
var GeorgeAfterDiscount = George - (George * discount)

if (Ryan>200){
	console.log("Ryan bought $" + Ryan + " worth of groceries. Discount was applied. ")
	console.log("Final payment: $" + RyanAfterDiscount)
} 

if (Cameron>200){
	console.log("Cameron bought $" + Cameron + " worth of groceries. Discount was applied. ")
	console.log("Final payment: $" + CameronAfterDiscount)
} else {
	console.log("Cameron bought $" + Cameron + " worth of groceries. Discount was not applied.")
}

if (George>200){
	console.log("George bought $" + George + " worth of groceries. Discount was applied. ")
	console.log("Final payment: $" + GeorgeAfterDiscount)
} 





// Please note,  the discount calculator exercise from 
// section 3.3.1. is incomplete. 
// A 35% discount should be applied to any amount over $200. 
// Output should look like:

// "Pam bought $300.00 of groceries. Discount was applied. 
// Final payment: $275.00"