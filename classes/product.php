<?php
class Product {
   public $name;
   public $price;
   public $qunatity;
   public $animal_tipe;


   public function __construct( string $_name, float $_price, int $_qunatity, string $_animal_tipe ){

        $this->product = $_name;
        $this->price = $_price;
        $this->stock = $_qunatity;
        $this->animalType = $_animal_tipe ; 

   }

}


?>