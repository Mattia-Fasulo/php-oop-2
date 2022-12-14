<?php
 include './Traits/Brand.php';
class Product {
    use Brand;
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

    public function getProductDetails(){
        return "Product Name: $this->name, Price: $this->price, Description: $this->description";
    }

    public function getClassName(){
        return get_class();
    }

    public function getCategoryIcon(){
        $icon = $this->category->icon;
        return  "<i class='$icon'></i>";
    }

}
