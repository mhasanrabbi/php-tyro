<?php
// Finds whether a variable is a resource
// boolean value

$handle = fopen("php://stdout", "w");
if (is_resource($handle)) {
	echo '$handle is a resource';
}