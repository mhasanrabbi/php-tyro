<?php

//Calculate Levenshtein distance between two strings
echo levenshtein("Hello World", "ello World");
echo "<br>";
echo levenshtein("Hello World", "ello World", 10, 20, 30);