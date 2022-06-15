<?php 
/**
* (PHP 4, PHP 5, PHP 7, PHP 8)
* is_int — Find whether the type of a variable is integer 
*/

$values = array(23, "23", 23.5, "23.5", null, true, false);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}