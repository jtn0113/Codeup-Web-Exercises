<?php 

function pageController() {

	$data = [];
	$data['notAuthorized'] = '';

	if (isset($_POST['username'])) {
		$data['username'] = $_POST['username'];
	}

	if (isset($_POST['password'])) {
		$data['password'] = $_POST['password'];
	}

	if (isset($data['username']) == 'guest' && $data['password'] == 'password') {
		header("Location: authorized.php");
	} else if (isset($data['username'])) {
		$data['notAuthorized'] = "Not authorized";
	}

	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	 <form class"form-inline" action="login.php" method="POST">
	 	<label>Username</label>
	 	<input class="input-xs" type="text" name="username">
	 	<label>Password</label>
	 	<input class="input-xs" type="password" name="password">
	 	<button class="btn btn-xs btn-danger" type="submit">Login</button>
	</form>
	<h1> <?= $notAuthorized ?> </h1>
</body>
</html>