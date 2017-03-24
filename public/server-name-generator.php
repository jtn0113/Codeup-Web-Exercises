<?php 

$adjectives = ['ubiquitous', 'painstaking', 'aggressive', 'coherent', 'painful', 'naive', 'ripe', 'cute', 'broad', 'misty'];
$nouns = ['cocktail', 'cod', 'copyright', 'dickey', 'opossum', 'plume', 'quadrant', 'signet', 'stool', 'suppression'];

function randomFromArray($array) {
	echo $array[rand(0, 9)] . " ";
}

function serverName($adjectives, $nouns) {
	echo randomFromArray($adjectives) . randomFromArray($nouns) . PHP_EOL;
}

?>

<html>
	<head>
		<title>Server Name Generator</title>
	</head>
	<body>
		<h1><?php serverName($adjectives, $nouns) ?></h1>
	</body>
</html>