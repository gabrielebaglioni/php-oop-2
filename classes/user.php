<?php
require_once __DIR__ . '/CreditCard.php';

class User{
   public  $name;
   public  $surname;
   public  $email;
   public $registered = false;
   public $discount = null;
   protected $creditCard;


   public function __construct(string $_name, string $_surname, string $_email, )
   {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
   }

   public function setCreditCard(object $_credit_card){
      $this->creditCard = $_credit_card;
   }
   public  function getCeditCard(){
      return $this->creditCard;
   }
}
?>
