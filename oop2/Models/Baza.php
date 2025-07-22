<?php
//greskom sam dodao ovaj domaci za prethodno predavanje

class B0aza
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
const IME = "Zoki";

?>
