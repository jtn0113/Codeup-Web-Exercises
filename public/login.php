<?php 

function pageController() {

	require "functions.php";

	session_start();

	$sessionId = session_id();

	$data = [];
	$data['notAuthorized'] = '';

	if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] == 'guest') {
		header("Location: authorized.php");
	}

// 	if(inputHas('counter')) {
// 	inputGet('counter');
// 	$data['counter'] = $_REQUEST['counter'];
// } else {
// 	$data['counter'] = 0;
// }

	if(inputHas('username')) {
		$data['username'] = $_REQUEST['username'];
	}

	if(inputHas('password')) {
		$data['password'] = $_REQUEST['password'];
	}


	if (isset($data['username']) == 'guest' && $data['password'] == 'password') {
		$_SESSION['logged_in_user'] = 'guest';
		header("Location: authorized.php");
	} else if (isset($data['username'])) {
		$data['notAuthorized'] = escape("Not authorized");
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
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<!-- 	 <form class"form-inline" action="login.php" method="POST">
	 	<label>Username</label>
	 	<input class="input-xs" type="text" name="username">
	 	<label>Password</label>
	 	<input class="input-xs" type="password" name="password">
	 	<button class="btn btn-xs btn-danger" type="submit">Login</button>
	</form> -->
	<h1> <?= $notAuthorized ?> </h1>



	<div class="container">
        <div class="card card-container">
        <h2 class='login_title text-center'>Login</h2>
        <hr>
            <form class="form-signin" action="login.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title"><span class="glyphicon glyphicon-user"></span></p>
                <input type="text" id="inputEmail" class="login_box" placeholder="Username" name="username" required autofocus>
                <p class="input_title"><span class="glyphicon glyphicon-lock"></span></p>
                <input type="password" id="inputPassword" class="login_box" placeholder="Password" name="password" required>
                <br><br>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>