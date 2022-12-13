<?php
class Product {

    protected $id;
    public $name;
    public $category;
    public $price;
    public $urlImg;
    public $description;
    public $rate;

    public function __construct(
        Category $_category,
        string $_name,
        float $_price,
        string $_urlImg,
        string $_description,
        float $_rate
        )
    {
        $this->category = $_category;
        $this->name = $_name;
        $this->price = $_price;
        $this->urlImg = $_urlImg;
        $this->description = $_description;
        $this->rate = $_rate;

    }

}


?>