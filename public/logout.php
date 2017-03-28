<?php 

session_start();

function clearSession() {
    session_unset();
    session_regenerate_id(true);
}


clearSession();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h4>You have been logged out</h4>
	<a href="/login.php"><span class="glyphicon glyphicon-log-in" style="color:green;font-size:50px"></span></a>
</body>
</html>