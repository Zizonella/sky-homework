<?php
namespace Agency;
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
