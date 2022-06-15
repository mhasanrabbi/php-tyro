<?php

/**
 * Finds whether a variable is a scalar
 * Scalar variables are those containing an int, float, string or bool. 
 *Types array, object, resource and null are not scalar.
 */

function show_var($var)
{
	if (is_scalar($var)) {
		echo $var;
	} else {
		var_dump($var);
	}
}
$pi = 3.1416;
$proteins = array("hemoglobin", "cytochrome c oxidase", "ferredoxin");

show_var($pi);
show_var($proteins);