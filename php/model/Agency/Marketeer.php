<?php


namespace Agency;
require('Persontrait.php.php');


class Marketeer implements InterfaceDataBaseAcccess
{
    protected $id;
    public function Read($id){
        echo "Method2 Called". "\n";
    }
    use hasWebAccess;
    use employeeDetails;
    use \Persontrait;

    public function __construct(string $first_name, string $last_name, int $id, string $email, string $password, int $salary)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->is_administrator = false;  //that is the default value
        $this->is_employed = true;
        $this->salary = $salary;
        $this->person();
    }

    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->email;
    }
    public function getAdministrator(){
        return $this->is_administrator;
    }
    public function getEmployed(){
        return $this->is_employed;
    }
    public function getSalary(){
        return $this->salary;
}

}