<?php 

require_once "../Auth.php";

session_start();

$loginError;

if (!empty($_REQUEST)) {
	Auth::attempt($_REQUEST['username'], $_REQUEST['password']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>POST Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
	<style>
		
	</style>
</head>
<body>
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