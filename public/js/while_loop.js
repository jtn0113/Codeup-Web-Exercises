 var allCones = Math.floor(Math.random() * 50) + 50;
 console.log(allCones);

do {
	var cones = Math.floor(Math.random() * 5) + 1;
	if (allCones >= cones){
		console.log(cones + ' cones sold');
		allCones = allCones - cones;
	}
} while (allCones >= cones);

if (allCones == 0){
	console.log('Yay! I sold them all!!');
} else {
	console.log('Sorry, I cannot sell you ' + cones + ', I only have ' + allCones);
}


console.log('=======================================')



var i = 2;

while (i <= 65536) {
	console.log(i);
	i = i * 2;
}

