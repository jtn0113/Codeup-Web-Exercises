<?php 
$favoriteThings = ['Long walks on the beach', 'red wine', 'bubble baths', 'flowers', 'shopping'];
?>

<html>
	<head>
		<title>Favorite Things</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
			h1, tr {
				color: purple;
			}
		</style>
	</head>
	<body>
		<table border="10px" class="table-striped table-hover table-condensed">
			<tr>
				<th><h1>My favorite things</h1></th>
			</tr>
			<tr>
				<?php foreach($favoriteThings as $thing) {
					echo "<tr>
							<td>" . $thing . "</td>
						</tr>";
				} ?>
			</tr>
		</table>
	</body>
</html>