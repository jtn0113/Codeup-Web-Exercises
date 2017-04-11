<?php

require_once 'db_connect.php';
require_once "../Input.php";

function pageController($dbc) {

	$data = [];

	$data['offset'] = 0;
	
	$data['page'] = 1;

	if(Input::has('page')) {
		Input::get('page');
		$data['page'] = $_REQUEST['page'];
		// Limits page from going too low
		if($data['page'] < 0) {
			$data['page'] = 0;
		}
		// Limits page from going too high
		$sql = 'select count(*) from national_parks';
		$statement = $dbc->query($sql);
		$parksCount = $statement->fetchColumn();
		$numberOfPages = ceil($parksCount/4);
		if($data['page'] >= $numberOfPages) {
			$data['page'] = $numberOfPages - 1;
		}
		$data['offset'] = $data['page'] * 4;
	} else {
		$data['page'] = 0;
	}

	if (Input::has('q')) {
		if ($_REQUEST['q'] == 'next') {
			$data['page'] + 1;
		} else if ($_REQUEST['q'] == 'previous') {
			$data['page'] - 1;
		}
	}
	
	$data['select'] = "select * from national_parks limit 4 offset " . $data['offset'];
	
	$data['statement'] = $dbc->query($data['select']);

	$data['parks'] = $data['statement']->fetchAll(PDO::FETCH_ASSOC);

	return $data;
}

extract(pageController($dbc));
?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.btn {
			float: left;
		}
	</style>
</head>
<body>
	<h1>National Parks</h1>
	<table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>Date Established</th>
			<th>Area in Acres</th>
		</tr>
		<?php foreach($parks as $park): ?>
			<tr>
				<td><a target="_blank" href="https://en.wikipedia.org/wiki/ <?= $park['name']?> _National_Park"><?= $park['name']?></a></td>
				<td><?= $park['location'] ?></td>
				<td><?= $park['date_established'] ?></td>
				<td><?= $park['area_in_acres'] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
 	<form action="national_parks.php" method="get">
	 	<input type="hidden" name="q" value="previous">
	 	<input type="hidden" name="page" value=<?= $page-1 ?>>
	 	<button class="btn btn-danger" type="submit">Previous</button>
	</form>
	<form action="national_parks.php" method="get">
	 	<input type="hidden" name="q" value="next">
	 	<input type="hidden" name="page" value=<?= $page+1 ?>>
	 	<button class="btn btn-danger" type="submit">Next</button>
	</form>
</body>
</html>
