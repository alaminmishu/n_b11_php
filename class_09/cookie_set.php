<?php 

// set the expiration 20 sec
setcookie("TestCookie", "ABC", time() + 60);

echo 'cookie set for 60 sec';
