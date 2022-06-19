<?php

// Returns a string containing num represented in base to_base. The base in which num is given is specified in from_base. Both from_base and to_base have to be between 2 and 36, inclusive. Digits in numbers with a base higher than 10 will be represented with the letters a-z, with a meaning 10, b meaning 11 and z meaning 35. The case of the letters doesn't matter, i.e. num is interpreted case-insensitively. 

$hexadecimal = 'a37334';
echo base_convert($hexadecimal, 16, 2);