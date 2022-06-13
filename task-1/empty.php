<?php

/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * empty — Determine whether a variable is empty
 */

$expected_array_got_string = 'somestring'; //true
var_dump(empty($expected_array_got_string['some_key'])); //false
var_dump(empty($expected_array_got_string[0])); //false
var_dump(empty($expected_array_got_string['0'])); //false
var_dump(empty($expected_array_got_string[0.5])); //false
var_dump(empty($expected_array_got_string['0.5'])); //true
var_dump(empty($expected_array_got_string['0 Mostel']));//true