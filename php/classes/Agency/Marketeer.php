<?php
namespace Agency;

//use Employee\employeeDetails;
//use Employee\hasWebAccess;
//use Employee\InterfaceDataBaseAcccess;
//use Employee\person;

include_once "User.php";
class Marketeer extends User

//    implements InterfaceDataBaseAcccess
{
    protected $is_administrator;
    protected $is_employed;
    protected $salary;

//    public function Read($id){
//        echo "Method2 Called". "\n";
//    }
//    use hasWebAccess;
//    use employeeDetails;
//    use person;

    public function __construct($id, $first_name, $last_name,  $password, $email, $salary)
    {
        parent::__construct($id,$first_name,$last_name,$password,$email);
        $this->is_administrator = false;  //that is the default value
        $this->is_employed = true;
        $this->salary = $salary;
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