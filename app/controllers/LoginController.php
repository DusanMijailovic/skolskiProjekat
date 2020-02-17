<?php

namespace app\controllers;

use app\models\User;


class LoginController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function loginView() {
        $menu = $this->linkMenu($this->conn);
        $networks = $this->linkNetwork($this->conn);


        $this->view("login", ["menu" => $menu, "networks" => $networks]);
    }

    public function login(){

        if (isset($_POST['loginBtn'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $secret = md5($password);
            
            
            $errors = [];

            $rePassword = '/^[a-z0-9]{8,}$/';

        if ($email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, 'E-mail nije ispravan!');
            }
        } else {
            array_push($errors, 'Polje za email ne sme biti prazno!');
        }
  
        if ($password) {
            if (!preg_match($rePassword, $password)) {
            array_push($errors, 'Lozinka nije ispravna!');
            }
        } else {
            array_push($errors, 'Polje za lozinku ne sme biti prazno!');
        }
    
            if(count($errors)){
               $_SESSION['errors'] = $errors;
               $this->saveErrors($_SESSION['errors']);
            } else {
                $userModel = new User($this->conn);
                $user = $userModel->findByEmailAndPassword($email, $secret);
                if($user){
                    $_SESSION["user"] = $user;
                    $role = $_SESSION['user']->role;
                    switch($role) {
                        case 'User':
                            $this->redirect("index.php?page=home");
                            $loggedUser = $_SESSION["user"]->email;
                            $this->saveLog($loggedUser);
                        break;
                        case 'Administrator':
                            $this->redirect("index.php?page=admin");
                            $loggedUser = $_SESSION["user"]->email;
                            $this->saveLog($loggedUser);       
                    }
                } else {
                    // $this->redirect("index.php?page=login");
                    $_SESSION['noUser'] = 'Ne postoji korisnik sa tim email-om/lozinkom. Pokušajte ponovo!';
                    $this->saveErrors($_SESSION['noUser']);
                }
            }
        }
        

   public function logout(){
        $_SESSION["user"] = null;
        $this->redirect("index.php?page=login");
   }



















}

