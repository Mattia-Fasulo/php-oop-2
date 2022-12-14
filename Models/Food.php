<?php
require_once 'Product.php';

class Food extends Product{
    public $flavor;
    public $weight;
    public $ingredients;

    public function __construct(
        Category $_category,
        string $_name,
        float $_price,
        string $_urlImg,
        string $_description,
        float $_rate,
        string $_flavor,
        string $_weight,
        string $_ingredients,

    )
    {
        parent::__construct(
        $_category,
        $_name,
        $_price,
        $_urlImg,
        $_description,
        $_rate
        );
        $this->flavor = $_flavor;
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }

    public function getClassName(){
        return get_class();
    }
}

?>