<?php
	//All the Error Messages Here
	
	//All the Information Messages Here
	
	//All related functions
	function display_messages($message_array, $type) {
		//Function to display errors if any!
		echo "<div class=\"{$type}\">";
		foreach($message_array as $message) {
			echo $message . "<br />";
		}
		echo "</div>";
	}
?>