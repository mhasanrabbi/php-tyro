<?php
//used to check if the given key or index exists in the array
$subjects = array("sonoo" => "OS", "ajeet" => "compiler", "jin" => "dbms");
if (key_exists("sonoo", $subjects)) {
	echo "Key exists!";
} else {
	echo "Key does not exist!";
}