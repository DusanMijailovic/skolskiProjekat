<?php

namespace app\controllers;

use app\models\Contact;


class ContactAdminController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }



    public function contact(){
        $contactModel = new Contact($this->conn);
        $contact = $contactModel->getContact();
        $this->viewAdmin("contactAdmin", ["contact" => $contact]);
    }

  
    


    public function deleteContact(){

        $code = null;
        $data = "";

        if(isset($_POST['deleteContact'])) {
            $contactID = $_POST['contactID'];

      try {
          $contactModel = new Contact($this->conn);
          $contactModel->deleteContact($contactID);
          $code = 204;
        
      } catch(PDOException $e){
        echo $e->getMessage();
        $code = 500;
    }

    }

    $this->json($code);
}


public function getContact(){

    $code = null;
    try {	
        
            $contactModel = new Contact($this->conn);
            $data = $contactModel->getContact();

        } catch(PDOException $e){
            echo $e->getMessage();
            $code = 500;
        }


        $this->json($data, $code);
}

}