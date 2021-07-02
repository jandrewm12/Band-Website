<?php
// This PHP is referenced using the User Authentication Lecture from class
	if(!session_start()) {
		header("Location: Jam6m4FinalProjectS21Error.php");
		exit;
	}


	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

	if ($loggedIn) {
		header("Location: Jam6m4FinalProjectS21Tour.php");
		exit;
	}


	$action = empty($_POST['action']) ? '' : $_POST['action'];

	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}

	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];

		if ($username == "test" && $password == "pass") {
			// Instead of setting a cookie, we'll set a key/value pair in $_SESSION
			$_SESSION['loggedin'] = $username;
			header("Location: Jam6m4FinalProjectS21Tour.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "Jam6m4FinalProjectS21Login.php";
		}
	}

	function login_form() {
		$username = "";
		$error = "";
		require "Jam6m4FinalProjectS21Login.php";
	}


?>
