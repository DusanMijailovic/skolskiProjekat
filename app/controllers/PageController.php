<?php

namespace app\controllers;
use app\models\Book;
use app\models\Category;
use app\models\Menu;
use app\models\Network;
use app\models\Cart;



class PageController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

   

    public function home(){

        $bookModel = new Book($this->conn);
        $books = $bookModel->getAllBooks();

        $categoryModel = new Category($this->conn);
        $categories = $categoryModel->getAllCategories();

        $menu = $this->linkMenu($this->conn);

        $networks = $this->linkNetwork($this->conn);
        if(isset($_SESSION['user'])) {
            $userID = $_SESSION['user']->userID;
            $cartNumber = $this->linkCart($this->conn, $userID);

        $this->view("home", ["books" => $books, "categories" => $categories, "menu" => $menu, "networks" => $networks, "cartNumber" => $cartNumber]);
        
        } else {
            $this->view("home", ["books" => $books, "categories" => $categories, "menu" => $menu, "networks" => $networks]);
        }
    }


    public  function about()
    {
        $menu = $this->linkMenu($this->conn);

        $networks = $this->linkNetwork($this->conn);
        if(isset($_SESSION['user'])){
        $userID=$_SESSION['user']->userID;
        $cartNumber = $this->linkCart($this->conn, $userID);

        $this->view("about", ["menu" => $menu, "networks" => $networks, "cartNumber" => $cartNumber]);
        } else {
            $this->view("about", ["menu" => $menu, "networks" => $networks]);
        }
    }


    public function search() {

        if (isset($_POST['value'])) {
            $value = $_POST['value'];
           
            
            $bookModel = new Book($this->conn);
            $books = $bookModel->getBooksBySearch($value);
        }
        
        $this->json($books);
    }
}
