<?php

namespace app\controllers;

use app\models\User;


class UserAdminController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }


    public function user(){

        $userModel = new User($this->conn);
        $user = $userModel->getAll();

        $this->viewAdmin("homeAdmin", ["user" => $user]);
    }

    public function deleteUser(){

        $code = null;
        $data = "";

        if(isset($_POST['deleteBtn'])) {
            $userID = $_POST['userID'];

      try {
          $userModel = new User($this->conn);
          $userModel->deleteUser($userID);
          $code = 204;
        
      } catch(PDOException $e){
        echo $e->getMessage();
        $code = 500;
    }

    }

    $this->json($code);
}

public function getUsers(){
    $code = null;
    try {	
        
            $userModel = new User($this->conn);
            $data = $userModel->getAll();

        } catch(PDOException $e){
            echo $e->getMessage();
            $code = 500;
        }


        $this->json($data, $code);
}
    



}