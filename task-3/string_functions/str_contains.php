<?php

//Determine if a string contains a given substring

$string = 'The lazy fox jumped over the fence';

if (str_contains($string, 'lazy')) {
	echo "The string 'lazy' was found in the string\n";
}

if (str_contains($string, 'Lazy')) {
	echo 'The string "Lazy" was found in the string';
} else {
	echo '"Lazy" was not found because the case does not match';
}