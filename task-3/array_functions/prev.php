<?php
//Output the value of the current, next and previous element in the array
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people) . "<br>";
echo prev($people);