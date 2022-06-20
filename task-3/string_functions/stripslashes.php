<?php
//Un-quotes a quoted string

$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);