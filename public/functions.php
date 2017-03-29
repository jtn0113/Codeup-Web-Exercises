<?php

function inputHas($key) {
	if (isset($_REQUEST[$key])) {
		return true;
	} else {
		return false;
	}
}

function inputGet($key) {
	if (!isset($key)) {
		return null;
	} else {
		return $key;
	}
}

function escape($input) {
	return htmlspecialchars(strip_tags($input));
}







// Create a file called functions.php and add the following functions:

// inputHas($key): returns true or false based on whether the key is available.
// inputGet($key): returns the value specified by the key, or null if the key is not set.
// escape($input): returns the input as a safely escaped string.
// Now, go back to the ping/pong and user login lessons from PHP with HTML and require the functions file you created. Use the input wrapper functions you created in place of accessing $_GET or $_POST directly. Also, use the escape function anywhere you need to echo user input.

