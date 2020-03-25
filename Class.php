<?php
namespace Employee; 

interface InterfaceDataBaseAcccess{ 
  
    public function FetchById($id); 
    public function Update(); 
    public function Create(); 
    public function Read(); 
    public function Delete(); 
    
} 

trait hasWebAccess{
    public $email;
    public $password;
  
    public function changePassword($newpassword){
        
    } 
}
trait employeeDetails{
    public $is_administrator;
    public $is_employed;
    public $salary;
    
}
trait person{
    protected $first_name;
    protected $last_name;
}
class Marketeer implements InterfaceDataBaseAcccess
{
     protected $id;
    public function Read($id){ 
        echo "Method2 Called". "\n"; 
    } 
    use hasWebAccess;
    use employeeDetails;
    use person;
  
    public function __construct(string $first_name, string $last_name, int $id, string $email, string $password, int $salary)
    {
        $this->first_name = $first_name;
        $this-> last_name=$last_name;
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->is_administrator = false;  //that is the default value
        $this->is_employed = true;
        $this->salary = $salary;
    }
    
}
  
$test = new Marketeer('first name', 'last name', 2,'email', 'password', 200000); 
$test->method1(); 
$test->method2();

$obj = new Marketeer('first name', 'last name', 2,'email', 'password', 200000);
$obj->name('first_name', 'last_name');
