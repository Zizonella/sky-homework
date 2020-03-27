<?php

namespace Agency;

include_once "User.php";

class Customer extends User
{

    public function __construct($id, $first_name, $last_name, $password, $email)
    {
        parent::__construct($id, $first_name, $last_name, $password, $email);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

}






