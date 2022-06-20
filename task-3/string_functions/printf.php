<?php

// Output a formatted string 
$n =  43951789;
$u = -43951789;
$c = 65; // ASCII 65 is 'A'

// notice the double %%, this prints a literal '%' character
printf("%%b = '%b'\n", $n); // binary representation
printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function
printf("%%d = '%d'\n", $n); // standard integer representation
printf("%%e = '%e'\n", $n); // scientific notation
printf("%%u = '%u'\n", $n); // unsigned integer representation of a positive integer
printf("%%u = '%u'\n", $u); // unsigned integer representation of a negative integer
printf("%%f = '%f'\n", $n); // floating point representation
printf("%%o = '%o'\n", $n); // octal representation
printf("%%s = '%s'\n", $n); // string representation
printf("%%x = '%x'\n", $n); // hexadecimal representation (lower-case)
printf("%%X = '%X'\n", $n); // hexadecimal representation (upper-case)

printf("%%+d = '%+d'\n", $n); // sign specifier on a positive integer
printf("%%+d = '%+d'\n", $u); // sign specifier on a negative integer



$s = 'monkey';
$t = 'many monkeys';

printf("[%s]\n",      $s); // standard string output
printf("[%10s]\n",    $s); // right-justification with spaces
printf("[%-10s]\n",   $s); // left-justification with spaces
printf("[%010s]\n",   $s); // zero-padding works on strings too
printf("[%'#10s]\n",  $s); // use the custom padding character '#'
printf("[%10.9s]\n", $t); // right-justification but with a cutoff of 8 characters
printf("[%-10.9s]\n", $t); // left-justification but with a cutoff of 8 characters

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.", $number, $str);