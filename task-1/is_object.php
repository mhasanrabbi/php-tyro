<?php
// Finds whether a variable is an object

function get_students($obj)
{
	if (!is_object($obj)) {
		return false;
	}

	return $obj->students;
}

// Declare a new class instance and fill up 
// some values
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(get_students(null)); //false
var_dump(get_students($obj));//true