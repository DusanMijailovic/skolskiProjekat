<?php

namespace app\models;



class Social {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }

    public function getAllSocials(){
        return $this->conn->executeQuery("SELECT * FROM socialnetwork");
    }


}