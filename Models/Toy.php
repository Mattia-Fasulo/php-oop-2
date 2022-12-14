<?php
require_once 'Product.php';

class Toy extends Product{
    
    public $measure;
    public $color;
    public $material;
    public $elettronic;
    public $sound;

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
        bool $_elettronic,
        bool $_sound

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
        $this->elettronic = $_elettronic;
        $this->sound = $_sound;
    }

    public function getClassName(){
        return get_class();
    }
}

?>