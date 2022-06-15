<?php
//Get string value of a variable

class StrValTest
{
	public function __toString()
	{
		return __CLASS__;
	}
}

// Prints 'StrValTest'
echo strval(new StrValTest);