<?php
//Prepend one or more elements to the beginning of an array
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);
?>