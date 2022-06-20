<?php
//Case-insensitive strstr()
$email = 'USER@EXAMPLE.com';
echo stristr($email, 'e'); // outputs ER@EXAMPLE.com
echo stristr($email, 'e', true); // outputs US