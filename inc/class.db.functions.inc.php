<?php
	class DB_Functions {
		private $db;

		//put your code here
		// constructor
		function __construct() {
			require_once 'DB_Connect.php';
			// connecting to database
			$this->db = new DB_Connect();
			$this->db->connect();
		}

		// destructor
		function __destruct() {
		
		}

		/**
		/* Get user by username and password
		/*/
		public function getUserByUsernameAndPassword($username, $password) {
			$result = @mysql_query("SELECT * FROM users WHERE username = '$username'") or die(mysql_error());
			// check for result 
			$no_of_rows = @mysql_num_rows($result);
			if ($no_of_rows > 0) {
				$result = @mysql_fetch_array($result);
				$encrypted_password = $result['password'];
				// check for password equality
				if ($encrypted_password == sha1($password)) {
					// user authentication details are correct
					return $result;
				}
			} else {
				// user not found
				return false;
			}
		}

		/**
		/* Check user is existed or not
		/*/
		public function UserExists($username) {
			$result = @mysql_query("SELECT username from users WHERE username = '$username'");
			$no_of_rows = @mysql_num_rows($result);
			if ($no_of_rows > 0) {
				// user existed 
				return true;
			} else {
				// user not existed
				return false;
			}
		}
	}