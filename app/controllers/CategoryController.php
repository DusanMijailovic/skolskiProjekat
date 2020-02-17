<?php

namespace app\controllers;
use app\models\Category;


class CategoryController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

   public function categoryBook(){

    $catModel = new Category($this->conn);

    if(isset($_POST["id"])){
        $id = $_POST["id"];

    $books = $catModel->getCategoryAndBooks($id);

    }
    $this->json($books);

   }










}