<?php
require_once __DIR__ . '/user.php';
class RegisteredUser extends User{
   public function setRegistred(bool $_registered ){

      $this->registered = $_registered;
   }
}
?>