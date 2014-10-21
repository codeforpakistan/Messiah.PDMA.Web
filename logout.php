<?php
	session_start();
	if($_SESSION['pdma_loggedin'] == true){
		unset($_SESSION['pdma_loggedin']);
		unset($_SESSION['pdma_username']);
		unset($_SESSION['pdma_email']);
		header("Location: login.php");
	}
?>