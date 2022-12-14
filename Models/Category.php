<?php

class Category {
    
    public string $species;
    public string $icon;

    public function __construct($_species, $_icon)
    {
        $this->species = $_species;
        $this->icon = $_icon;
    }
}

?>