<?php

namespace Agency;

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

    public function __construct($id, $region, $postcode, $bedrooms, $bathrooms, $type, $has_garden, $has_parking, $asking_price)
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

    public function getId()
    {
        return $this->id;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getHasGarden()
    {
        return $this->has_garden;
    }

    public function getHasParking()
    {
        return $this->has_parking;
    }

    public function getSoldStatus()
    {
        return $this->sold;
    }

    public function getAskingPrice()
    {
        return $this->asking_price;
    }
} 



