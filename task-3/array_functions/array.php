<?php
//Create an array

$fruits = array(
	"fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
	"numbers" => array(1, 2, 3, 4, 5, 6),
	"holes"   => array("first", 5 => "second", "third")
);

//Automatic index with array()
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);

//1-based index with array()
$firstquarter = array(1 => 'January', 'February', 'March');
print_r($firstquarter);

//Accessing an array inside double quotes
$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!