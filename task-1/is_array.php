<?php 
/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * is_array — Finds whether a variable is an array
 */
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';