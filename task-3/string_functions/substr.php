<?php
// Return part of a string

echo substr('abcdef', 1);     // bcdef
echo substr("abcdef", 1, null); // bcdef; prior to PHP 8.0.0, empty string was returned
echo substr('abcdef', 1, 3);  // bcd
echo substr('abcdef', 0, 4);  // abcd
echo substr('abcdef', 0, 8);  // abcdef
echo substr('abcdef', -1, 1); // f

// Accessing single characters in a string
// can also be achieved using "square brackets"
$string = 'abcdef';
echo $string[0];                 // a
echo $string[3];                 // d
echo $string[strlen($string) - 1]; // f