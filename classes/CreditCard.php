<?php
  class CreditCard{
    public $number;
    public $name;
    public $surname;
    private $cvc;
    private $expire_date;
    public $circuit;

    public function __construct(string $_name, string $_surname, $_expire_date, string $_circuit )
    {
      $this->number =rand(1000000000000000,9999999999999999);
      $this->cvc = rand(100,999); 
      $this->name = $_name;
      $this->surname = $_surname;
      $this->expire_date = $_expire_date;
      $this-> _circuit= $_circuit;
    }
  }
?>