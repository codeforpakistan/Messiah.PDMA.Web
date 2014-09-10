<?php
  /* --------------------------------------
  /* File to handle all API requests
  /* Accepts GET and POST
  /* --------------------------------------
  /* Each request will be identified by TAG
  /* Response will be JSON data
  /* --------------------------------------
  /* check for POST request 
  /*/
  if ((isset($_GET['GID'])            && $_GET['GID']             != '') &&
      (isset($_GET['Username'])       && $_GET['Username']        != '') &&
      (isset($_GET['ApplicantName'])  && $_GET['ApplicantName']   != '') &&
      (isset($_GET['FatherName'])     && $_GET['FatherName']      != '') &&
      (isset($_GET['CNIC'])           && $_GET['CNIC']            != '') &&
      (isset($_GET['PhoneNumber'])    && $_GET['PhoneNumber']     != '') &&
      (isset($_GET['Address'])        && $_GET['Address']         != '') &&
      (isset($_GET['Damage'])         && $_GET['Damage']          != '') &&
      (isset($_GET['Date'])           && $_GET['Date']            != '') &&
      (isset($_GET['Location'])       && $_GET['Location']        != '') &&
      (isset($_GET['Detail'])         && $_GET['Detail']          != '') &&
      (isset($_GET['RawData'])        && $_GET['RawData']         != '')) {
      
        // get tag
        $GID = $_GET['GID'];
        $Username = $_GET['Username'];
        $ApplicantName = $_GET['ApplicantName'];
        $FatherName = $_GET['FatherName'];
        $CNIC = $_GET['CNIC'];
        $PhoneNumber = $_GET['PhoneNumber'];
        $Address = $_GET['Address'];
        $Damage = $_GET['Damage'];
        $Date = $_GET['Date'];
        $Location = $_GET['Location'];
        $Detail = $_GET['Detail'];
        $RawData = $_GET['Detail'];
        
        // include db handler
        require_once 'class.data.functions.inc.php';
        $db = new DataFunctions();

        // response Array
        $response = array("Status" => 0);

        // check for user
        $data = $db->insertDataInTable($GID, $Username, $ApplicantName, $FatherName, $CNIC, $PhoneNumber, $Address, $Damage, $Date, $Location, $Detail);
        if ($data != false) {
          // Data inserted found
          // Now Convert Rawdata to Images
          $ImagesArray = explode("|", $RawData);
          $binary = base64_decode($base);
          header('Content-Type: bitmap; charset=utf-8');
          $file = fopen('{$GID}.jpg', 'wb');
          fwrite($file, $binary);
          fclose($file);
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
    echo "Data not sent correctly";
  }