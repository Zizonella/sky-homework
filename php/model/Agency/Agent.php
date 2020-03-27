<?php
namespace Agency;

require('Notification.php');

class Agent extends Person
{
    use \Notification;
    private $id;
    private $email;
    private $password;
    private $is_administrator;
    private $is_employed;
    private $salary;

    public function __construct(int $id, string $email, string $password, string $first_name, string $last_name, int $salary, bool $is_administrator, bool $is_employed)
    {
        parent::__construct($first_name, $last_name);
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->is_administrator = $is_administrator;  //that is the default value
        $this->is_employed = $is_employed;
        $this->salary = $salary;
        $this->notify();
    }
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
    public function getAdministrator(){
        return $this->is_administrator;
    }
    public function getEmployed(){
        return $this->is_employed;
    }
}