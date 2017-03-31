<?php 

require_once "../Auth.php";

session_start();

function pageController() {
	
	if (Auth::check() == false) {
		header("Location: login.php");
		die;
	}

	return Auth::user();
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h4>Welcome, <?= $username ?>!</h4>
	<a href="/logout.php"><span class="glyphicon glyphicon-log-out" style="color:red;font-size:50px"></span></a>
</body>
</html>