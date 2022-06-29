<?php
  class CreditCard{
    public $number;
    public $surname;
    public $name;
    public $cvc;
    public $expire_date;
    public $circuit;

    public function __construct(string $_expire_date, string $_number, string $_circuit, string $_name, string $_surname, int $_cvc )
    {
      $this->number =rand(1000000000000000,9999999999999999);
      $this -> name = $_name;
      $this -> surname = $_surname;
      $this->cvc = rand(100,999); 
      $this-> _circuit= $_circuit;
      $this->setExpireDate($_expire_date);
    }
   public function setExpireDate( $_expire_date){
    $today = date('Y-m-d');
    if($_expire_date < $today){
      throw new Exception('la carta è scaduta');
    }
    $this->expire_date = $_expire_date;
  }
   }
   
?>