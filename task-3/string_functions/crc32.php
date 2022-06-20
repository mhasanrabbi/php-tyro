<?php

// Calculates the crc32 polynomial of a string

$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u\n", $checksum);