<?php 

namespace App\Entity;

class User{

    private $email;
    private $password;


    public function __construct( string $email,string $password)
    {
      
        $this->email = $email;
        $this->password = $password;
    }

 
    public function getEmail()
    {
      return $this->email;
    }
    public function getPassword()
    {
      return $this->password;
    }
}




?>