<?php

namespace app\controllers;
use app\models\Book;
use app\models\Menu;
use app\models\Network;


class BookController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

   

    public function book(){

        $bookModel = new Book($this->conn);

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            $menu = $this->linkMenu($this->conn);

            $networks = $this->linkNetwork($this->conn);

            $book = $bookModel->getOneBookWithCategory($id);
            $books = $bookModel->getAllBooks();

            if(isset($_SESSION["user"])){
                $userID=$_SESSION['user']->userID;
                 $cartNumber = $this->linkCart($this->conn, $userID);

            $this->view("book", ["book" => $book, "menu" => $menu, "networks" => $networks, "books" => $books, "cartNumber" => $cartNumber]);
            } else {
                $this->view("book", ["book" => $book, "menu" => $menu, "networks" => $networks, "books" => $books]);
            }
            
        }

        

       
        
        
        

    }


    














}