<?php

class Category
{
    private $name_category;
    private $content;
    private $category;

    public function __construct($name_category, $content)
    {
        $this->setNameCategory($name_category);
        $this->setContent($content);
        $this->setCategory();
    }

    public function getNameCategory()
    {
        return $this->name_category;
    }

    private function setNameCategory($name_category)
    {
        $this->name_category = $name_category;
    }

    public function getContent()
    {
        return $this->content;
    }

    private function setContent($content)
    {
        $this->content = $content;
    }

    public function getCategory()
    {
        return $this->category;
    }

    private function setCategory()
    {
        $this->category[$this->name_category] = $this->content;
    }
}
