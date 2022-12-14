<?php
require_once 'Product.php';

class Bed extends Product{
    public $measure;
    public $color;
    public $material;
    public $outside;

    public function __construct(
        Category $_category,
        string $_name,
        float $_price,
        string $_urlImg,
        string $_description,
        float $_rate,
        string $_measure,
        string $_color,
        string $_material,
        bool $_outside

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
        $this->measure = $_measure;
        $this->color = $_color;
        $this->material = $_material;
        $this->outside = $_outside;
        
    }

    public function getClassName(){
        return get_class();
    }
}

?>