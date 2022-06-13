<?php 
/**
 * (PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP
 * get_resource_type — Returns the resource type
 */

$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";

// As of PHP 8.0.0, the following does not work anymore. The curl_init function returns a CurlHandle object now.
$c = curl_init();
echo get_resource_type($c) . "\n";