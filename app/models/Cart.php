<?php
namespace app\models;


class Cart {

	private $conn;

	public function __construct(Database $conn){

		$this->conn = $conn;
	}


	public function insertToCart($amount, $userID, $cbID){
		
		$cart = [
			$amount, 
			$userID, 
			$cbID    
		];

		$query = "INSERT INTO cart(amount, userID, cbID)
		VALUES(?,?,?);";




		$this->conn->executeNonGet($query, $cart);

	}




		public function deleteCartData($cartID) {

		$cart = [$cartID];


		$query = "DELETE FROM cart WHERE cartID = ?";

		$this->conn->executeNonGet($query, $cart);
	}


	public function getCart($userID){

		return $this->conn->executeQueryWithParams("SELECT *, c.paymentID AS payment FROM user u INNER JOIN cart c ON u.userID = c.userID 
		INNER JOIN category_book cb ON c.cbID = cb.cbID
        INNER JOIN book b ON cb.bookID = b.bookID WHERE u.userID = ?", [$userID]);

		

	}


		public function getAllCart($userID){

		return $this->conn->executeQueryWithParams("SELECT * FROM  cart c INNER JOIN category_book cb ON c.cbID = cb.cbID
        INNER JOIN book b ON cb.bookID = b.bookID WHERE userID = ?", [$userID]);

		

	}

	public function getNumberOfBooks($userID){

		return $this->conn->executeQueryWithParams("SELECT COUNT(cartID) as sum  FROM cart WHERE userID = ?", [$userID]);

	}


	public function sumPrice($userID){


		return $this->conn->executeQueryWithParams("SELECT SUM(amount) AS price FROM cart WHERE userID = ?", [$userID]);
	}


	




}




