<?php

class Product
{
    private $name;
    private $brand;
    private $price;
    private $animal;

    public function __construct($name, $brand, $price, Animal $animal)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($price);
    }

    public function getName()
    {
        return $this->name;
    }

    private function setName($name)
    {
        $this->name = $name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    private function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getPrice()
    {
        return 'Euro ' . $this->price;
    }

    private function setPrice($price)
    {
        $this->price = $price;
    }
}



$prodotto1 = new Product('Mini Adult', 'Royal Canin', '19.99', '');
