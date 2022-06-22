<?php

// Compare the values of two arrays (use a user-defined function to compare the values) and return the differences

function myfunction($a, $b)
{
	if ($a === $b) {
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "blue", "b" => "black", "e" => "blue");

$result = array_udiff($a1, $a2, "myfunction");
print_r($result);