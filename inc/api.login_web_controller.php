<?php
	
	session_start();
	require 'autoload.php';

	/* --------------------------------------
	/* File to handle all API requests
	/* Accepts GET and POST
	/* --------------------------------------
	/* Each request will be identified by TAG
	/* Response will be JSON data
	/* --------------------------------------
	/* check for POST request 
	/*/
	if(!isset($_SESSION['pdma_loggedin'])){
		if ((isset($_POST['Username']) && $_POST['Username'] != '') && (isset($_POST['Password']) && $_POST['Password'] != '')) {
			// get tag
			$username = $_POST['Username'];
			$password = $_POST['Password'];
			$hashed_password = sha1($password);

			// include db handler
			$db = new \ClassLibrary\DBFunctions();

			// check for user
			$user = $db->getUserByUsernameAndPassword($username, $password);

			if ($user != false) {

				$_SESSION['pdma_loggedin'] = true;
				$_SESSION['pdma_username'] = $user['username'];
				$_SESSION['pdma_email'] = $user['email'];

				\ClassLibrary\UsableFunctions::redirect_to("pdma.php");
				// user found
				// echo json with success = 1
				echo json_encode($response);
			} else {
				// user not found
				// echo json with error = 1
				\ClassLibrary\UsableFunctions::redirect_to("login.php?error=Incorrect");
			}
		}
	}