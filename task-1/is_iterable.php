<?php 
/**
 * is_iterable — Verify that the contents of a variable is an iterable value
 * boolean value
 */

var_dump(is_iterable([1, 2, 3]));  // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3])));  // bool(true)
var_dump(is_iterable((function () { yield 1; })()));  // bool(true)
var_dump(is_iterable(1));  // bool(false)
var_dump(is_iterable(new stdClass()));  // bool(false)