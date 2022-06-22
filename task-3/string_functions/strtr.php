<?php

//Translate characters or replace substrings

$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);