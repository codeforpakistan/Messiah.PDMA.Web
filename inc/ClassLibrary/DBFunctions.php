<?php

namespace ClassLibrary;

use \ClassLibrary\DBConnect;
use \ClassLibrary\Config;

class DBFunctions {
	private $db;

		//put your code here
		// constructor
	function __construct() {
			// connecting to database
		$this->db = new DBConnect();
		$this->db->connect();
	}

		// destructor
	function __destruct() {
		
	}

	// Insert Data in Table
	public function insertDataInTable($GID, $Username, $ApplicantName, $FatherName, $CNIC, $PhoneNumber, $Address, $Damage, $Date, $Location, $Detail) {
		$query = "INSERT INTO gid_not_approved (
						grievance_id, username, full_name, father_name, cnic, contact, address, damage_type, date, location, details
					) VALUES (
						'{$GID}', '{$Username}', '{$ApplicantName}', '{$FatherName}', '{$CNIC}', '{$PhoneNumber}', '{$Address}', '{$Damage}', '{$Date}', '{$Location}', '{$Detail}'
					)";
		$result = @mysql_query($query);
		// check for result 
		if ($result) {
			return true;
		} else {
        	// user not found
			return false;
		}
	}

	/* Get user by username and password */
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

	/* Check user is existed or not */
	public function UserExists($username) {
		$result = @mysql_query("SELECT username FROM users WHERE username = '{$username}'");
		$no_of_rows = @mysql_num_rows($result);
		if ($no_of_rows > 0) {
			// user existed 
			return true;
		} else {
			// user not existed
			return false;
		}
	}

	/* Search by NIC */
	public function searchByNIC($NIC){
		$getByNIC = @mysql_fetch_array(mysql_query("SELECT * FROM gid_not_approved WHERE cnic = '{$NIC}'"));
		var_dump($getByNIC);

	}

	/* Search by GID */
	public function searchByGID($GID){
		$getByGID = @mysql_fetch_array(mysql_query("SELECT * FROM gid_not_approved WHERE grievance_id = '{$GID}'"));
		var_dump($getByGID);
	}
}
