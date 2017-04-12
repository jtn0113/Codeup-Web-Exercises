<?php 

	require_once "Log.php";

class Auth {

	public static $passwordHash = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	public static $passwordMatch;

	public static function attempt($username, $password) {
		$log = new Log();
		$passwordMatch = password_verify($password, self::$passwordHash);
		if ($username == 'guest' && ($passwordMatch == true)) {
			$_SESSION['logged_in_user'] = $username;
			$_SESSION['id'] = session_id();
			if (isset($_SESSION['logged_in_user'])) {
				$log->info('User ' . $username . ' logged in successfully');
				header("Location: authorized.php");
				die;
			}
		} else {
			$log->error('User ' . $username . ' failed to login');
		}
	}

	public static function check() {
		if (isset($_SESSION['logged_in_user'])) {
			return true;
		} else {
			return false;
			// header("Location: login.php");
			// die;
		}
	}

	public static function user() {
		return ['username' => $_SESSION['logged_in_user']];
	}

	public static function logout() {
	    session_unset();
    	session_regenerate_id(true);
    	session_destroy();
    	session_start();
	}


}


