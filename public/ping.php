<?php 

function pageController() {

$data = [];

if(isset($_GET['counter'])) {
$data['counter'] = $_GET['counter'];
} else {
	$data['counter'] = 0;
}

if (isset($_GET['q'])) {
	if ($_GET['q'] == 'hit') {
		$data['counter'] ++;
	} else if ($_GET['q'] == 'miss') {
		$data['counter'] = 0;
	}
}

return $data;

}

extract(pageController());
?>

<html>
<head>
	<title>Ping</title>
</head>
<body>
	<h1><?= $counter ?></h1>
 	<form action="pong.php" method="get">
	 	<input type="hidden" name="q" value="hit">
	 	<input type="hidden" name="counter" value=<?= $counter ?>>
	 	<button type="submit">Hit</button>
	</form>
	<form action="pong.php" method="get">
	 	<input type="hidden" name="q" value="miss">
	 	<input type="hidden" name="counter" value=<?= $counter ?>>
	 	<button type="submit">Miss</button>
	</form>
</body>
</html>