<?php

// Convert a quoted-printable string to an 8 bit string

$str = "Hello=0Aworld.";
echo quoted_printable_decode($str);