<?php 

require_once "../Input.php";

function pageController() {

$data = [];

if(Input::has('counter')) {
	Input::get('counter');
	$data['counter'] = $_REQUEST['counter'];
} else {
	$data['counter'] = 0;
}

if (Input::has('q')) {
	if ($_REQUEST['q'] == 'hit') {
		$data['counter'] ++;
	} else if ($_REQUEST['q'] == 'miss') {
		$data['counter'] = 0;
	}
}

return $data;

}

extract(pageController());
?>

<html>
<head>
	<title>Pong</title>
</head>
<body>
	<h1><?= $counter ?></h1>
 	<form action="ping.php" method="get">
	 	<input type="hidden" name="q" value="hit">
	 	<input type="hidden" name="counter" value=<?= $counter ?>>
	 	<button type="submit">Hit</button>
	</form>
	<form action="ping.php" method="get">
	 	<input type="hidden" name="q" value="miss">
	 	<input type="hidden" name="counter" value=<?= $counter ?>>
	 	<button type="submit">Miss</button>
	</form>
</body>
</html>