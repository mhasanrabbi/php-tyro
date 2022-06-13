<?php

/**
 * (PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)
 * is_callable — Verify that a value can be called as a function from the current scope.
 */


function someFunction()
{
}

$functionVariable = 'someFunction';

var_dump(is_callable($functionVariable, false, $callable_name));  // bool(true)

echo $callable_name, "\n";