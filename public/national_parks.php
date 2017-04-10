<?php

require 'db_connect.php';

$select = 'select * from national_parks';

$statement = $dbc->query($select);

$parks = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
				<td><?= $park['name'] ?></td>
				<td><?= $park['location'] ?></td>
				<td><?= $park['date_established'] ?></td>
				<td><?= $park['area_in_acres'] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
