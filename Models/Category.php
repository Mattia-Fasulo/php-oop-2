<?php

class Category {
    protected $id;
    public string $category;

    public function __construct($_category)
    {
        $this->category = $_category;
    }
}

?>