<?php
//  Set the type of a variable
$foo = "5bar"; // string
$bar = true;   // boolean

settype($foo, "integer"); // $foo is now 5   (integer)
settype($bar, "string");  // $bar is now "1" (string)

echo $foo . PHP_EOL;
echo $bar . PHP_EOL;