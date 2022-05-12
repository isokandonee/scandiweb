<?php

    class Product /*extends AnotherClass implements Interface*/ 
    {
        public $sku;
        public $name;
        public $price;

        public function __construct($sku, $name, $price)
        {
            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
        }
    }

    class Disk extends Product 
    {
        public $size;

        public function __construct($sku, $name, $price, $size)
        {
            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
        }
    }

    class Book extends Product 
    {
        public $weight;

        public function __construct($sku, $name, $price, $weight)
        {
            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
            $this->weight = $weight;
        }
    }

    class Furniture extends Product 
    {
        public $height;
        public $weight;
        public $lenght;
        public $dimension;

        public function __construct($sku, $name, $price, $height, $weight, $l)
        {
            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
            $this->name = $height;
            $this->price = $weight;
            $this->name = $lenght;
        }
    }
    

?>