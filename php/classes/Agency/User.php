<?php
namespace Agency;
abstract class User 
{
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $password;
    protected $email;
    
    public function __construct( $id, $first_name, $last_name, $password, $email) 
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
        $this->email = $email;
    }
}