<?php

// Get numeric formatting information
setlocale(LC_ALL, "US");
$locale_info = localeconv();
print_r($locale_info);