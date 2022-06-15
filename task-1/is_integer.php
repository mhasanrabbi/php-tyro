<?php

/**
 * The is_integer() function is used to test whether the type of the specified variable is an integer or not.
 * boolean value
 */

$var_name1 = 678;
$var_name2 = "a678";

if (is_integer($var_name1)) {
	echo "$var_name1 is Integer" . "\n";
} else {
	echo "$var_name1 is not an Integer" . "\n";
}
if (is_integer($var_name2)) {
	echo "$var_name2 is Integer" . "\n";
} else {
	echo "$var_name2 is not Integer" . "\n";
}