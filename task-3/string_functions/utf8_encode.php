<?php

//Converts a string from ISO-8859-1 to UTF-8

// Convert the string 'Zoë' from ISO 8859-1 to UTF-8
$iso8859_1_string = "\x5A\x6F\xEB";
$utf8_string = utf8_encode($iso8859_1_string);
echo bin2hex($utf8_string), "\n";