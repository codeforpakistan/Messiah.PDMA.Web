<?php
	// All the functions applied on forms
	function check_required_fields($required_array) {
		// Function for form validation i.e to validate that required data fields are entered
		$field_errors = array();
		foreach($required_array as $fieldname) {
			if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) { 
				$field_errors[] = $fieldname; 
			}
		}
		return $field_errors;
	}
	
	function check_max_field_lengths($field_length_array) {
		//Function to validate the size of the fields of form
		$field_errors = array();
		foreach($field_length_array as $fieldname => $maxlength ) {
			if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) { $field_errors[] = $fieldname; }
		}
		return $field_errors;
	}