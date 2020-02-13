<?php 

class User {
    private $fName;
    private $lName;
    private $email;
    private $phone;
    private $city;
    private $postalcode;
    private $country;
    private $street;

    function __construct($fName, $lName, $email, $phone, $city, $postalcode, $country, $street)
    {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->email = $email;
        $this->phone = $phone;
        $this->city = $city;
        $this->postalcode = $postalcode;
        $this->country = $country;
        $this->street = $street;
    }
}

?>