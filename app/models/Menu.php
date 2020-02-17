<?php

namespace app\models;



class Menu {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }

    public function getAllMenu(){
        return $this->conn->executeQuery("SELECT * FROM menu");
    }




}