<?php
// Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask

// subject does not start with any characters from mask
var_dump(strspn("foo", "o"));

// examine two characters from subject starting at offset 1
var_dump(strspn("foo", "o", 1, 2));

// examine one character from subject starting at offset 1
var_dump(strspn("foo", "o", 1, 1));