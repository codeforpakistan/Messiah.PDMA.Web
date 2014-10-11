<?php
	
	require 'autoload.php';

	$smile_API_object = new SmileAPI();

	$msgs = $smile_API_object->receive_sms();

	print_r($msgs);
	echo "<br><p>-----------</p><br>";
	var_dump($msgs);