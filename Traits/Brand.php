<?php 

trait Brand {
    protected $brand;


    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }
}


?>