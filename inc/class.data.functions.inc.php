<?php
  class DataFunctions {
    private $db;

    //put your code here
    // constructor
    function __construct() {
      require_once 'class.db.connect.inc.php';
      // connecting to database
      $this->db = new DB_Connect();
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
      $result = mysql_query($query, $connection);
      // check for result 
      if ($result) {
        return true;
      } else {
        // user not found
        return false;
      }
    }
  }