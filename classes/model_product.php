<?php

require_once __DIR__ . "/product.php";

class ModelProduct extends Product
{

    // Attributi della classe model

    public $model;

    function __construct($type, $brand, $price, $model)
    {
        parent::__construct($type, $brand, $price);
        $this->model = $model;
    }

    public function getFullName()
    {
        return parent::getFullName() . " " . $this->model;
    }
}
