<?php


namespace app\models;

class Category {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }

public function getAllCategories(){

    return $this->conn->executeQuery("SELECT * FROM category");

}
public function getCategoryAndBooks($categoryID) {
	return $this->conn->executeQueryWithParams("SELECT b.* FROM book b INNER JOIN category_book cb 
    ON b.bookID = cb.bookID INNER JOIN category c ON cb.categoryID = c.categoryID 
    WHERE c.categoryID = ? ", [$categoryID]);
}


public function addCategory($name){

    $query = "INSERT INTO category(name) 
    VALUES(?);";

    $this->conn->executeNonGet($query, [$name]);

}


public function deleteCategory($categoryID) {
    return $this->conn->executeNonGet("DELETE FROM category WHERE categoryID = ?", [$categoryID]);

}

public function updateCategory($name, $categoryID) {
    return $this->conn->executeNonGet("UPDATE category SET name = ? WHERE categoryID = ?", [$name, $categoryID]);

}


public function getOneCategory($categoryID){

    return $this->conn->executeOneRow("SELECT * FROM category WHERE categoryID = ?", [$categoryID]);
    
}



}