<?php

namespace Agency;
include_once "User.php";
require('Notification.php');

class Agent extends User

{
    use \Notification;
    protected $is_administrator;
    protected $is_employed;
    protected $salary;

    public function __construct($id, $first_name, $last_name, $password, $email, $is_employed, $is_administrator, $salary)
    {
        parent::__construct($id, $first_name, $last_name, $password, $email);
        $this->is_administrator = $is_administrator;
        $this->is_employed = $is_employed;
        $this->salary = $salary;
        $this->notify();
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

    public function getAdministrator()
    {
        return $this->is_administrator;
    }

    public function getEmployed()
    {
        return $this->is_employed;
    }
}

$ee = new Agent(1, 'hrr', 'hrr', 'hrr', 'hrr', 'hrr', true, 25000);
echo $ee->getId();