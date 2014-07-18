<?php 
	class DB_Connect {
		// constructor
		function __construct() {
			
		}

		// destructor
		function __destruct() {
			// $this->close();
		}

		// Connecting to database
		public function connect() {
			require_once 'config.inc.php';
			// connecting to mysql
			$con = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
			// selecting database
			if($con){
				mysql_select_db(DB_DATABASE);
			}
 
			// return database handler
			return $con;
		}
 
		// Closing database connection
		public function close() {
			mysql_close();
		}
	}