<?php

//Computes the difference of arrays with additional index check which is performed by a user supplied callback function

function key_compare_func($a, $b)
{
	if ($a === $b) {
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);