<?php 

function pageController() {
	$data = [];

	if(isset($_GET['counter'])) {
	$data['counter'] = $_GET['counter'];
	} else {
		$data['counter'] = 0;
	}


	if (isset($_GET['q'])) {
		if ($_GET['q'] == 'up') {
			$data['counter'] ++;
		} else if ($_GET['q'] == 'down') {
			$data['counter'] --;
		}
	}
	return $data;
}

extract(pageController());

 ?>

 <html>
 	<head>
 		<title>Counting</title>
 	</head>
 	<body>
 		<h1><?= $counter ?></h1>
	 	<form action="counter.php" method="get">
		 	<input type="hidden" name="q" value="up">
		 	<input type="hidden" name="counter" value=<?= $counter ?>>
		 	<button type="submit">Up</button>
		</form>
	 	<form action="counter.php" method="get">
		 	<input type="hidden" name="q" value="down">
		 	<input type="hidden" name="counter" value=<?= $counter ?>>
		 	<button type="submit">Down</button>
		</form>
 	</body>
 </html>
