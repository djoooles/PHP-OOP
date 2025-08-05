<?php

    require_once "Models/korisnik.php";

    $korisnik = new korisnik();
    $email = "mejlasd@mejl.com";
    $password = "123321";

    $korisnik->update("milan@miki.com", "1@1as.com", "123321");
    
    //if($korisnik->emailExists($email) === false)
    {
    //    $korisnik->register($email, $password);
    }
    //else
    {
        die("Vec postoji korisnik sa ovom email adresom");
    }

    