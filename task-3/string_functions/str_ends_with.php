<?php

//Checks if a string ends with a given substring

$string = 'The lazy fox jumped over the fence';

if (str_ends_with($string, 'fence')) {
	echo "The string ends with 'fence'\n";
}

if (str_ends_with($string, 'Fence')) {
	echo 'The string ends with "fence"';
} else {
	echo '"fence" was not found because the case does not match';
}