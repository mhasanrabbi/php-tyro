<?php

// Calculate the sha1 hash of a file

$filename = "test.txt";
$sha1file = sha1_file($filename);
echo $sha1file;