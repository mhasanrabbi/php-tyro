<?php

/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * is_float — Finds whether the type of a variable is float
 */

var_dump(is_float(27.25)); //true
var_dump(is_float('abc')); //false
var_dump(is_float(23)); //false
var_dump(is_float(23.5)); //true
var_dump(is_float(1e7));  //true
var_dump(is_float(true)); //false