<?php

/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * is_bool — Finds out whether a variable is a boolean
 */

$a = false;
$b = 0;

// Since $a is a boolean, it will return true
if (is_bool($a) === true) {
	echo "Yes, this is a boolean" . "\n";
}

// Since $b is not a boolean, it will return false
if (is_bool($b) === false) {
	echo "No, this is not a boolean";
}