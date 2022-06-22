<?php
//Output the value of the current and next element in an array, then reset the array's internal pointer to the first element in the array
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo next($people) . "<br>";

echo reset($people);