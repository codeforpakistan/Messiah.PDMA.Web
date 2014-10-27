<?php
	
	require_once 'autoload.php';

	/* --------------------------------------
	/* File to handle all API requests
	/* Accepts GET and POST
	/* --------------------------------------
	/* Each request will be identified by TAG
	/* Response will be JSON data
	/* --------------------------------------
	/* check for POST request 
	/*/
	if ((isset($_POST['Username']) && $_POST['Username'] != '') && (isset($_POST['Password']) && $_POST['Password'] != '')) {
		// get tag
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		$hashed_password = sha1($password);

		// include db handler
		$db = new \ClassLibrary\DBFunctions();

		// response Array
		$response = array("Status" => 0);

		// check for user
		$user = $db->getUserByUsernameAndPassword($username, $password);
		if ($user != false) {
			// user found
			// echo json with success = 1
			$response["Status"] = 1;
			echo json_encode($response);
		} else {
			// user not found
			// echo json with error = 1
			$response["Status"] = 0;
			echo json_encode($response);
		}
	} else {
		echo "Access Denied";
	}