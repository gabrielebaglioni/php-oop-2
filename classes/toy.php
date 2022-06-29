<?php
require_once __DIR__ . '/Product.php';


class Toy extends Product{
   public  $type;
   public  $size;
   public function __construct(string $_name, float $_price, int $_qunatity, string $_animal_tipe , string $_type, $_expire_date, string $_size  )
   {
    parent::__construct($_name,  $_price, $_qunatity, $_animal_tipe);
    $this->type = $_type;
    $this->size = $_size ;
   }
}
?>