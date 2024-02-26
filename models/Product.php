<?php

class Product
{
    private $name;
    private $brand;
    private $price;
    private $type;

    public function __construct($name, $brand, $price, $type)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($price);
        $this->setType($type);
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
        return $this->price . ' Euro';
    }

    private function setPrice($price)
    {
        $this->price = $price;
    }

    public function getType()
    {
        return $this->type;
    }

    private function setType($type)
    {
        $this->type = $type;
    }
}
