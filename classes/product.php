<?php

class Product
{

    // Attributi della classe Product
    private $type;
    private $brand;
    public $price;


    function __construct($type, $brand, $price)
    {
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
    }


    // Metodi get per recuperare gli attributi
    public function getType()
    {
        return $this->type;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getFullName()
    {
        return $this->type . " " . $this->brand;
    }
}
