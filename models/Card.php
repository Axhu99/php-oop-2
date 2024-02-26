<?php

include_once __DIR__ . '/Animal.php';
include_once __DIR__ . '/Product.php';

class Card
{
    private $name_brand;
    private $name_product;
    private $price_product;
    private $category;

    public function __construct(Product $card, array $category = [])
    {
        $this->setNameBrand($card);
        $this->setNameProduct($card);
        $this->setPriceProduct($card);
        $this->category = $category;
    }

    public function getNameBrand()
    {
        return $this->name_brand;
    }

    private function setNameBrand(Product $card)
    {
        $this->name_brand = $card->getName();
    }

    public function getNameProduct()
    {
        return $this->name_product;
    }

    private function setNameProduct(Product $card)
    {
        $this->name_product = $card->getBrand();
    }

    public function getPriceProduct()
    {
        return $this->price_product;
    }

    private function setPriceProduct(Product $card)
    {
        $this->price_product = $card->getPrice();
    }
}
