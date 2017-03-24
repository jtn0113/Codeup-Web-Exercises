<?php 

	
function pageController() {
	$data = [];

	$data['adjectives'] = ['ubiquitous', 'painstaking', 'aggressive', 'coherent', 'painful', 'naive', 'ripe', 'cute', 'broad', 'misty'];
	$data['nouns'] = ['cocktail', 'cod', 'copyright', 'dickey', 'opossum', 'plume', 'quadrant', 'signet', 'stool', 'suppression'];
	$data['randomAdjective'] = $data['adjectives'][rand(0, 9)];
	$data['randomNoun'] = $data['nouns'][rand(0, 9)];

	return $data;
}

extract(pageController());

?>

<html>
	<head>
		<title>Server Name Generator</title>
	</head>
	<body>
		<h1><?= $randomAdjective . " " . $randomNoun ?></h1>
	</body>
</html>