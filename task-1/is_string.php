<?php

/**
 * Find whether the type of a variable is string
 * 
 */

$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
foreach ($values as $value) {
	echo "is_string(";
	var_export($value);
	echo ") = ";
	echo var_dump(is_string($value));
}
/**
 * is_string(false) = bool(false)
 *is_string(true) = bool(false)
 *is_string(NULL) = bool(false)
 *is_string('abc') = bool(true)
 *is_string('23') = bool(true)
 *is_string(23) = bool(false)
 *is_string('23.5') = bool(true)
 *is_string(23.5) = bool(false)
 *is_string('') = bool(true)
 *is_string(' ') = bool(true)
 *is_string('0') = bool(true)
 *is_string(0) = bool(false)
 */