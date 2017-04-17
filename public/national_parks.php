<?php

require_once 'db_connect.php';
require_once "../Input.php";

function pageController($dbc) {

	$data = [];
	$limit = 10;

	$data['offset'] = 0;
	
	$data['page'] = 1;

	if($_POST) {
		if(empty($_POST['name']) || empty($_POST['location']) || empty($_POST['dateEstablished']) || empty($_POST['areaInAcres']) || empty($_POST['description'])) {
			$data['message'] = "****All fields are required****";
		} else {
			$insert = "insert into national_parks (name, location, date_established, area_in_acres, description) values (:name, :location, :date_established, :area_in_acres, :description)";
			$statement = $dbc->prepare($insert);
			$statement->bindValue(':name', Input::getString('name'));
		    $statement->bindValue(':location', Input::getString('location'));
		    $statement->bindValue(':date_established', Input::getString('dateEstablished'));
		    $statement->bindValue(':area_in_acres', Input::getNumber('areaInAcres'));
		    $statement->bindValue(':description', Input::getString('description'));
		    $statement->execute();
		    header("location: national_parks.php");
		}
	}

	if(Input::has('page')) {
		$data['page'] = Input::get('page');
		// Limits page from going too low
		if($data['page'] < 1) {
			$data['page'] = 1;
		}
		// Limits page from going too high
		$sql = 'select count(*) from national_parks';
		$statement = $dbc->query($sql);
		$parksCount = $statement->fetchColumn();
		$numberOfPages = ceil($parksCount/$limit);

		if($data['page'] > $numberOfPages) {
			$data['page'] = $numberOfPages;
		}
		$data['offset'] = ($data['page'] - 1) * $limit;
	} 

	// if (Input::has('q')) {
	// 	if ($_REQUEST['q'] == 'next') {
	// 		$data['page'] + 1;
	// 	} else if ($_REQUEST['q'] == 'previous') {
	// 		$data['page'] - 1;
	// 	}
	// }
	
	$data['select'] = "select * from national_parks order by name limit 10 offset :offset";
	$statement = $dbc->prepare($data['select']);
	$statement->bindValue(':offset', $data['offset'], PDO::PARAM_INT);
	$statement->execute();
	$data['parks'] = $statement->fetchAll(PDO::FETCH_ASSOC);
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
	<table class="table table-striped table-danger">
		<tr class="success">
			<th>Name</th>
			<th>Location</th>
			<th>Date Established</th>
			<th>Area in Acres</th>
			<th>Description</th>
		</tr>
		<?php foreach($parks as $park): ?>
			<tr>
				<td><a target="_blank" href="https://en.wikipedia.org/wiki/<?= $park['name']?>_National_Park"><?= $park['name']?></a></td>
				<td><?= $park['location'] ?></td>
				<td><?= $park['date_established'] ?></td>
				<td><?= $park['area_in_acres'] ?></td>
				<td><?= $park['description'] ?></td>
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
	<br><br>
	<h1>Add a National Park</h1>
	<h4><?php if (isset($message)) {echo $message;} ?></h4>
	<form action="national_parks.php" method="post" class="container">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>
		<div class="form-group">
			<label for="location">Location</label>
			<input type="text" class="form-control" id="location" name="location">
		</div>
		<div class="form-group">
			<label for="dateEstablished">Date Established (YYYY-MM-DD)</label>
			<input type="text" class="form-control" id="dateEstablished" name="dateEstablished">
		</div>
		<div class="form-group">
			<label for="areaInAcres">Area In Acres</label>
			<input type="text" class="form-control" id="areaInAcres" name="areaInAcres">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description">
		</div>
		<button type="submit" class="btn btn-danger">Submit</button>
	</form>

</body>
</html>
