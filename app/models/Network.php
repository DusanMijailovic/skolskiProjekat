<?php

namespace app\models;



class Network {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }

    public function getAllNetworks(){
        return $this->conn->executeQuery("SELECT * FROM socialnetwork");
    }

}

