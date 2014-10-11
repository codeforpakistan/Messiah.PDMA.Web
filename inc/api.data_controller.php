<?php

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
  if ((isset($_POST['GID'])            && $_POST['GID']             != '') &&
      (isset($_POST['Username'])       && $_POST['Username']        != '') &&
      (isset($_POST['ApplicantName'])  && $_POST['ApplicantName']   != '') &&
      (isset($_POST['FatherName'])     && $_POST['FatherName']      != '') &&
      (isset($_POST['CNIC'])           && $_POST['CNIC']            != '') &&
      (isset($_POST['PhoneNumber'])    && $_POST['PhoneNumber']     != '') &&
      (isset($_POST['Address'])        && $_POST['Address']         != '') &&
      (isset($_POST['Damage'])         && $_POST['Damage']          != '') &&
      (isset($_POST['Date'])           && $_POST['Date']            != '') &&
      (isset($_POST['Location'])       && $_POST['Location']        != '') &&
      (isset($_POST['Detail'])         && $_POST['Detail']          != '') &&
      (isset($_POST['RawData'])        && $_POST['RawData']         != '')) {
      
        // get tag
        $GID = $_POST['GID'];
        $Username = $_POST['Username'];
        $ApplicantName = $_POST['ApplicantName'];
        $FatherName = $_POST['FatherName'];
        $CNIC = $_POST['CNIC'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $Address = $_POST['Address'];
        $Damage = $_POST['Damage'];
        $Date = $_POST['Date'];
        $Location = $_POST['Location'];
        $Detail = $_POST['Detail'];
        $RawData = $_POST['RawData'];
        
        // include db handler
        $db = new \ClassLibrary\DBFunctions();

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