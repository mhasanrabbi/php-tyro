<?php
//Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable characters 

// Convert the string 'Zoë' from UTF-8 to ISO 8859-1
$utf8_string = "\x5A\x6F\xC3\xAB";
$iso8859_1_string = utf8_decode($utf8_string);
echo bin2hex($iso8859_1_string), "\n";

// Invalid UTF-8 sequences are replaced with '?'
$invalid_utf8_string = "\xC3";
$iso8859_1_string = utf8_decode($invalid_utf8_string);
var_dump($iso8859_1_string);

// Characters which don't exist in ISO 8859-1, such as
// '€' (Euro Sign) are also replaced with '?'
$utf8_string = "\xE2\x82\xAC";
$iso8859_1_string = utf8_decode($utf8_string);
var_dump($iso8859_1_string);