<?php

require_once "Models/User.php";

$korisnikDjole = new Usser("zokiStojkovic@gmail.com", "123321");
$korisnikDjole->save();
$korisnikAngie = new Usser("angie@gmail.com" , "Test 123");
$korisnikAngie->save();

echo $korisnikDjole->email;
echo $korisnikAngie->email;





?>