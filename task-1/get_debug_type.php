<?php

/**
 * (PHP 8)
 * get_debug_type — Gets the type name of a variable in a way that is suitable for debugging 
 */

echo get_debug_type(null) . PHP_EOL; //null
echo get_debug_type(true) . PHP_EOL; // bool 
echo get_debug_type(1) . PHP_EOL; // int 
echo get_debug_type(0.1) . PHP_EOL; // float 
echo get_debug_type("foo") . PHP_EOL; // string
echo get_debug_type([]) . PHP_EOL; //array
$fp = fopen(__FILE__, 'rb');
echo get_debug_type($fp) . PHP_EOL; // resource (stream)

fclose($fp);
echo get_debug_type($fp) . PHP_EOL; // resource(closed)

echo get_debug_type(new stdClass) . PHP_EOL; //stdClass
echo get_debug_type(new class // class@anonymous
{
}) . PHP_EOL;