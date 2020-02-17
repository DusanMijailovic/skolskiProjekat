<?php

namespace app\controllers;

use app\models\Category;


class CategoryAdminController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function category()
    {
        $modelCategory = new Category($this->conn);
        $category = $modelCategory->getAllCategories();

        $this->viewAdmin("categoryAdmin", ["category" => $category]);
    }


    public function categoryInsert() {
        $code = null;

        if (isset($_POST["categoryBtn"])) {
            $name = $_POST['categoryName'];
            
            try {
                $categoryModel = new Category($this->conn);
                $categoryModel->addCategory($name);
                $code = 201;

            }  catch(PDOException $e){
                echo $e->getMessage();
                $code = 500;
            }
        
        
        }
        $this->json($code);

    }


    public function categoryDelete(){

        $code = null;
        $data = "";

        if(isset($_POST['deleteCategory'])) {
            $categoryID = $_POST['categoryID'];

      try {
          $categoryModel = new Category($this->conn);
          $categoryModel->deleteCategory($categoryID);
          $code = 204;
        
      } catch(PDOException $e){
        echo $e->getMessage();
        $code = 500;
    }

    }

    $this->json($code);
}


    public function getCategory() {
        $code = null;
    try {	
        
            $categoryModel = new Category($this->conn);
            $data = $categoryModel->getAllCategories();

        } catch(PDOException $e){
            echo $e->getMessage();
            $code = 500;
        }


        $this->json($data, $code);
}


public function getOneCategory() {
    $code = null;

    if(isset($_POST['btn'])) {
        $categoryID = $_POST['categoryID'];
    try {	

            $categoryModel = new Category($this->conn);
            $data = $categoryModel->getOneCategory($categoryID);

        } catch(PDOException $e){
            echo $e->getMessage();
            $code = 500;
        }

    }
    
        $this->json($data, $code);
    
}


public function updateCategory(){

    $code = null;

    if(isset($_POST['updateCategory'])) {
        $categoryID = $_POST['categoryID'];
        $name = $_POST['name'];

    }

  try {
      $categoryModel = new Category($this->conn);
      $categoryModel->updateCategory($name, $categoryID);
      $code = 204;
    
  } catch(PDOException $e){
        echo $e->getMessage();
        $code = 500;
    }   


$this->json($code);


}






}