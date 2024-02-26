<?php

class Animal
{
    private $type;

    function __construct($type)
    {
        $this->setType($type);
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
