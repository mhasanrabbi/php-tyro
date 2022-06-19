<?php

// Returns the decimal equivalent of the hexadecimal number represented by the hex_string argument. hexdec() converts a hexadecimal string to a decimal number.

var_dump(hexdec("See"));
var_dump(hexdec("ee"));
// both print "int(238)"

var_dump(hexdec("that")); // print "int(10)"
var_dump(hexdec("a0")); // print "int(160)"