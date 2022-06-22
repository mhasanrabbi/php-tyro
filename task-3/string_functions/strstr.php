<?php
// Find the first occurrence of a string
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

$user = strstr($email, '@', true);
echo $user; // prints name