<?php
//Checks if the given key or index exists in the array

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
	echo "The 'first' element is in the array";
}


$search_array = array('first' => null, 'second' => 4);

// returns false
isset($search_array['first']);

// returns true
array_key_exists('first', $search_array);