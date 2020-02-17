<?php

namespace app\models;



class Book {

    private $conn;

    public function __construct(Database $conn){

        $this->conn = $conn;
    }


    public function addBook($name, $description, $price, $imgSrc, $imgAlt, $priceSite){

        $books = [
            $name, 
            $description, 
            $price, 
            $imgSrc, 
            $imgAlt, 
            $priceSite
        ];

        $query = "INSERT INTO book(name, description, price, imgSrc, imgAlt, priceSite) 
        VALUES(?, ?, ?, ?, ?, ?);";
    
        $this->conn->executeNonGet($query, $books);
    
    }

    public function getAllBooks(){
        return $this->conn->executeQuery("SELECT * FROM book");
    }

    public function getOneBook($bookID){

        return  $this->conn->executeOneRow("SELECT * FROM book WHERE bookID = ?", [$bookID]);
    }



    public function getOneBookWithCategory($bookID){

        return  $this->conn->executeOneRow("SELECT *, b.name AS title FROM book b INNER JOIN category_book cb ON b.bookID = cb.bookID 
        INNER JOIN category c ON cb.categoryID = c.categoryID 
        WHERE b.bookID = ?", [$bookID]);
    }



    public function getBooksBySearch($value) {
  
        $prom = "%{$value}%";
        return $this->conn->executeQueryWithParams("SELECT b.*, c.name AS categoryName 
        FROM book b INNER JOIN category_book cb ON b.bookID = cb.bookID 
        INNER JOIN category c ON cb.categoryID = c.categoryID WHERE b.name 
        LIKE ?", [$prom]);
    
}

public function deleteBook($bookID)
{
   return $this->conn->executeNonGet("DELETE FROM book WHERE bookID = ?", [$bookID]);
}

public function updateBook($name, $description, $price, $priceSite, $imgSrc, $imgAlt, $bookID) {

    $books = [
        $name, 
        $description, 
        $price, 
        $priceSite, 
        $imgSrc, 
        $imgAlt, 
        $bookID
    ];

    return $this->conn->executeNonGet("UPDATE book SET name = ?, description = ?, price = ?, priceSite = ?, imgSrc = ?, imgAlt = ? WHERE bookID = ?", $books);

}



}