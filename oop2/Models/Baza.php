<?php
//greskom sam dodao ovaj domaci za prethodno predavanje
//stavicu link za domaci #21 - OOP III u za predavanje #20 - OOP II
class Baza
{
    const HOST = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "web_shop";

    public $konekcija;
    public function __construct()
    {
        $this->konekcija = mysqli_connect(self::HOST,self::DB_USER,self::DB_USER, self::DB_NAME);
    }
}


?>
