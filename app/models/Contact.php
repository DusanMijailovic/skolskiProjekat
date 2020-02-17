<?php

namespace app\models;

class Contact {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }


    public function getContact(){ 
        return $this->conn->executeQuery("SELECT * FROM contact");
    }

public function AddContact($fullName, $email, $content){

    $contact = [
         $fullName,
         $email,
         $content       
    ];

    $query = "INSERT INTO contact(fullName, email, content)
                VALUES(?,?,?);";

    

    
    $this->conn->executeNonGet($query, $contact);

}


public function deleteContact($contactID) {
    return $this->conn->executeNonGet("DELETE FROM contact WHERE contactID = ?", [$contactID]);

}

}

?>