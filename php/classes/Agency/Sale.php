<?php
namespace Agency;

class Sale {
    protected $id;
    protected $date;
    protected $agent;
    protected $customer;
    protected $listing;
    protected $price;
    
    public function __construct( $id, $date, $agent, $customer, $listing, $price ) {
        $this->id = $id;
        $this->date = $date;
        $this->agent = $agent;
        $this->customer = $customer;
        $listing->listing = $listing;
        $this->price = $price;
    }
    
    public function getId(){
        return $this->id;
    }
    public function getDate(){
        return $this->date;
    }
    public function getAgent(){
        return $this->agent;
    }
    public function getCustomer(){
        return $this->customer;
    }
    public function getListing(){
        return $this->listing;
    }
    public function getPrice(){
        return $this->price;
    }
}