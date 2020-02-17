<?php

namespace app\models;


class Register {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }


    public function addUser($fullName, $email, $password, $token){


        
        $registration = [
             $fullName,
             $email,
             $password,
             $token       
        ];
    
        $query = "INSERT INTO user(fullName, email, password, roleID, active, token) 
        VALUES(?,?,?,2,1,?);";
    
        
    
        
        $this->conn->executeNonGet($query, $registration);
    
    }

    public function getGender(){

        return $this->conn->executeQuery("SELECT * FROM gender");
    }

}


?>