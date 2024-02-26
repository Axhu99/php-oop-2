<?php

include_once __DIR__ . '/models/Card.php';
include_once __DIR__ . '/models/Category.php';



$tags = [];


$tag1 = new Category('Animal', 'dog');
$tag2 = new Category('Habitat', 'acquario');

$tags = [$tag1->getCategory(), $tag2->getCategory()];



$product1 = new Product('nome', 'brand', '19.99');


$card1 = new Card($product1, $tags);

var_dump($card1);
