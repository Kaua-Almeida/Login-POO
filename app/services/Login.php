<?php

namespace App\services;

require "./vendor/autoload.php";

use App\DAO\UserDAO;
use App\Database\Database;
use App\Entity\User;

class Login
{

  public string $email;
  public string $password;
  public string $error = "";

  public function __construct(User $user)
  {

    if (!$this->verifyEmail($user->getEmail()) or !$this->verifyPassword($user->getPassword())) {
      $this->error = "Email inválido ou senha inválidos";
      return;
    } 
      $this->email = $user->getEmail();
      $this->password = $user->getPassword();


    
  }

  public function getError()
  {
    return $this->error;
  }

  public function verifyEmail(string $email)
  {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return $email;
    }
    return false;
  }

  public function verifyPassword(string $password)
  {
    htmlspecialchars($password);
    return $password;
  }

  public function login()
  {

    if (isset($this->email, $this->password)) {
      $userDAO = new UserDAO(Database::conexao());

      if ($userDAO->getUser($this->email, $this->password)) {
       return true;

      } else {
        return false;
      }
    }
  }
}
