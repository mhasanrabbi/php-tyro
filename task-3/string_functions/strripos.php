<?php
// Find the position of the last occurrence of a case-insensitive substring in a string
$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
	echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
	echo "Congratulations!\n";
	echo "We found the last ($needle) in ($haystack) at position ($pos)";
}
?>