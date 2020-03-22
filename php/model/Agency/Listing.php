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
        $this->sold = $sold;
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