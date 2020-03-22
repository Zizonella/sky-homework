<?php
namespace Agency;
class Customer extends Person
{
    private $id;
    private $password;
    private $email;

    public function __construct(int $id, string $first_name, string $last_name, string $password, string $email)
    {
        parent::__construct($first_name, $last_name);
        $this->id = $id;
        $this->password = $password;
        $this->email = $email;
    }

//    public function getFullName()
//    {
//        return strtoupper($this->first_name . ' ' . $this->last_name);
//
//    }
    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getEmail(){
        return $this->email;
    }
}

