<?php 

session_start();

if (!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user'] != 'guest') {
	header("Location: login.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h4>Authorized</h4>
	<a href="/logout.php"><span class="glyphicon glyphicon-log-out" style="color:red;font-size:50px"></span></a>
</body>
</html>