<?php
	
	require 'autoload.php';
	/*Message Format
	  PDMA Fullt Name, Father Name, CNIC, Phone No, Damage Type, Address
	*/
	$smile_API_object = new \ClassLibrary\SmileAPI();

	$msgs = $smile_API_object->receive_sms();
	$msgs2 = json_decode($msgs);
	print_r($msgs2->status['0']->text);