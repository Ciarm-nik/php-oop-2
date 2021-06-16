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
        $this->setPrice($price);
    }


    // Metodi get per recuperare gli attributi
    public function getType(){
        return $this->type;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($int){
        if (!is_int(($int))) {
            throw new Exception("Il prezzo non è valido");
        }
        $this->price =$int;
    }

    public function getFullName(){
        return $this->type . " " . $this->brand;
    }

    public function getDiscountPrice($discount){
        return $this->price - ($this->price * ($discount / 100));
    }
}
