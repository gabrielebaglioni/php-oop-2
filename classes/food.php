<?php
  require_once __DIR__ . '/Product.php';

  class Food extends Product{
   public  $type;
   public  $expire_date;
   public function __construct(string $_name, float $_price, int $_qunatity, string $_animal_tipe , string $_type, $_expire_date )
   {
    parent::__construct($_name,  $_price, $_qunatity, $_animal_tipe);
    $this->type = $_type;
    $this->expire_date = $_expire_date ;
   }
  }
?>