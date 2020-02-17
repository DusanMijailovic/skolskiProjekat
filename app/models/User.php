<?php

namespace app\models;

class User {

    private $conn;

    public function __construct(Database $conn){

    $this->conn = $conn;
    }



    public function getAll() {
        return $this->conn->executeQuery("SELECT * FROM user");
    }



    public function findByEmailAndPassword($email, $password){

        return $this->conn->executeOneRow("SELECT * FROM user u INNER JOIN role r 
        ON u.roleID = r.roleID WHERE  email = ? AND password = ? AND active = 1;", [$email, $password]);
    }

    

    public function deleteUser($userID){

        return $this->conn->executeNonGet("DELETE FROM user WHERE userID = ?", [$userID]);
    }



}