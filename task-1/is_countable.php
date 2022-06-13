<?php

/**
 * (PHP 7 >= 7.3.0, PHP 8)
 * is_countable — Verify that the contents of a variable is a countable value
 */
var_dump(is_countable([1, 2, 3])); // bool(true)
var_dump(is_countable(new ArrayIterator(['foo', 'bar', 'baz']))); // bool(true)
var_dump(is_countable(new ArrayIterator())); // bool(true)
var_dump(is_countable(new stdClass())); // bool(false)