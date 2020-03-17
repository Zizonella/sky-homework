<?php

abstract class Person
{
    protected $first_name;
    protected $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}

class Agent extends Person
{
    protected $id;
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
        $this->is_administrator = false;  //that is the default value
        $this->is_employed = true;
        $this->salary = $salary;
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

class Listing
{
    private $id;
    private $region;
    private $postcode;
    private $bedrooms;
    private $bathrooms;
    private $type;
    private $has_garden;
    private $has_parking;
    private $sold;
    private $asking_price;

    public function __construct(int $id, Region $region, string $postcode, int $bedrooms, int $bathrooms, Type $type, bool $has_garden, bool $has_parking, bool $sold, int $asking_price)
    {
        $this->id = $id;
        $this->region = $region;
        $this->postcode = $postcode;
        $this->bedrooms = $bedrooms;
        $this->bathrooms = $bathrooms;
        $this->type = $type;
        $this->has_garden = $has_garden;
        $this->has_parking = $has_parking;
        $this->sold = false;
        $this->asking_price = $asking_price;
    }

    public function sell()
    {
        $this->sold = true;
    }
    public function getId(){
        return $this->id;
    }
    public function getRegion(){
        return $this->region;
    }
    public function getPostcode(){
        return $this->postcode;
    }
    public function getBedrooms(){
        return $this->bedrooms;
    }
    public function getBathrooms(){
        return $this->bathrooms;
    }
    public function getType(){
        return $this->type;
    }
    public function getGarden(){
        return $this->has_garden;
    }
    public function getParking(){
        return $this->has_parking;
    }
    public function getSoldStatus(){
        return $this->sold;
    }
    public function getAskingPrice(){
        return $this->asking_price;
    }

}

class Type
{
    private $id;
    private $type;

    public function __construct(int $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->type;
    }
}

class Region
{
    private $id;
    private $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
}

class Sale
{
    private $id;
    private $date;
    private $agent;
    private $customer;
    private $listing;
    private $price;

    public function __construct(int $id, string $date, Agent $agent, Customer $customer, Listing $listing, int $price)
    {
        $this->id = $id;
        $this->date = $date;
        $this->agent = $agent;
        $this->customer = $customer;
        $this->listing = $listing;
        $this->price = $price;
    }
    public function getId(){
        return $this->id;
    }
    public function getDate(){
        return $this->id;
    }
    public function getAgent(){
        return $this->id;
    }
    public function getCustomer(){
        return $this->id;
    }
    public function getListing(){
        return $this->id;
    }
    public function getPrice(){
        return $this->id;
    }
}

//
//$myAgent = new Agent(1, 'hhh@hh.uk', 123, 'Hanna', 'Hannowitz', 30000);
//$myCustomer = new Customer(1, 'Oliver', 'Smith', 1, 'oliver.s@hotmail.com');
//$myRegion = new Region(1, 'East');
//$myType = new Type(1, 'Flat');
//$myProperty = new Property(1, $myRegion, 'NW6 3JY', 2, 1, $myType, false, false, 300000); //$myProperty is the property object
//$mySale = new Sale(1, '2019-02-02', $myAgent, $myCustomer, $myProperty, 230000);
//$myProperty->sell();
