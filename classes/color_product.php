<?php

require_once __DIR__ . "/product.php";

class ColorProduct extends Product
{

    // Attributi della classe color

    public $color;

    function __construct($type, $brand, $price, $color)
    {
        parent::__construct($type, $brand, $price);
        $this->color = $color;
    }

    public function getFullName()
    {
        return parent::getFullName() . " " . $this->color;
    }
}
