<?php
// Write a formatted string to a stream
$number = 9;
$str = "Beijing";
$file = fopen("test.txt", "w");
echo vfprintf($file, "There are %u million bicycles in %s.", array($number, $str));