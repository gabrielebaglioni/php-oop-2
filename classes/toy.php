<?php
require_once __DIR__ . '/Product.php';


class Toy extends Product{
   public  $type;
   public  $size;
   public function __construct(string $_type, string $_size)
   {
      $this->type = $_type;
      $this->size = $_size;
   }
}
?>