<?php

/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * gettype — Get the type of a variable
 */

$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
	echo gettype($value), "\n"; //(integer, double, NULL, object, string)
}