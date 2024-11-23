<?php

namespace App\DAO;

require "./vendor/autoload.php";


use Exception;
use PDO;

class UserDAO
{
    protected  $conn;

    public function __construct(PDO $database)
    {
        $this->conn = $database;
    }

    public function getUser(string $email, string $password)
    {

        //  try{
        //        $query = "SELECT * FROM users WHERE email = ? AND password = ?";
        //        $stmt = $this->conn->prepare($query);
        //        $stmt->bindValue(1,$email);
        //        $stmt->bindValue(2,$password);
        //       $stmt->execute();
        //         if($stmt->rowCount() > 0){
        //             return true;
        //         }
        //        else{
        //         return false;
        //        }


        //  } catch(Exception $e){
        //     echo "Erro". $e->getMessage();
        //  }
        
        try {
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->rowCount() > 0 ? true : false;
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }
}
