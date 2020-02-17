<?php 

namespace app\controllers;

use app\models\Menu;
use app\models\Network;
use app\models\Contact;


class ContactController extends Controller {

    private $conn;
    

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertContact() {


        $data = "";
        $code = 404;

        if (isset($_POST["sendContact"])) {
           

            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $content = $_POST['content'];
            // var_dump($content);
            // var_dump($email);
            // var_dump($fullName);
            $errors = [];
        
            $reFullName = '/^[A-Z][a-z]{2,15}\s[A-Z][a-z]{2,15}$/';
        
        
            if ($fullName) {
                if (!preg_match($reFullName, $fullName)) {
                    array_push($errors, 'Ime nije ispravno!');  
                }
            } else {
                array_push($errors, 'Polje za ime ne sme biti prazno!');
            }
        
        
            if ($email) {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, 'Email nije ispravan!');
                }
            } else {
                array_push($errors, 'Polje za email ne sme biti prazno!');
            }
        
        
            if (empty($content)) {
                array_push($errors, "Polje za poruku ne sme biti prazno!");
            }

           if(count($errors) > 0) {
                $_SESSION['message'] =  $errors;

               http_response_code(422);

           } else {
            $contactModel = new Contact($this->conn);
            $contactModel->addContact($fullName, $email, $content);
            $this->redirect("index.php?page=contact");
            $_SESSION['message'] =  "Uspesno ste nas kontaktirali";
           
               
                
           }

        // $contactModel = new Contact($this->conn);
        // $contactModel->addContact($fullName, $email, $content);
            //   header("Content-Type: application/json");
            //   echo json_encode($primer);
            //    var_dump($primer);
            //    $this->json($data, $code);
            
            // $this->redirect("index.php?page=contact");
            // $_SESSION['message'] =  "Uspesno ste nas kontaktirali";
        }

        
               
        

        
    }

    public function contact(){

        $menu = $this->linkMenu($this->conn);

        $networks = $this->linkNetwork($this->conn);
        
        if(isset($_SESSION['user'])){

        $userID=$_SESSION['user']->userID;
        $cartNumber = $this->linkCart($this->conn, $userID);
        
        $this->view("contact", ["menu" => $menu, "networks" => $networks, "cartNumber" => $cartNumber]);
        }else{
            $this->view("contact", ["menu" => $menu, "networks" => $networks]);
        }
        

    }
    
    


}



?>