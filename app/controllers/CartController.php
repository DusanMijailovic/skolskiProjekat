<?php

namespace app\controllers;
use app\models\Cart;
use app\models\Book;
use app\models\Menu;
use app\models\Network;



class CartController extends Controller {

	private $conn;

	public function __construct($conn) {
		$this->conn = $conn;
	}




	

	public function insertCart(){


		$code = null;
		$data = "";
		if(isset($_POST["cartBtn"])){

			$userID = $_POST["userID"];
			$priceSite = $_POST["priceSite"];
			$categoryID = $_POST["categoryID"];

			
			
			try {
				$cartModel = new Cart($this->conn);
				$cartModel->insertToCart($priceSite, $userID, $categoryID);
				$data = "Uspešno ste dodali proizvod u korpu!";
				$code = 201;
			} catch(PDOException $e){
				echo $e->getMessage();
				$code = 500;
			}
		}
		
		$this->json($data, $code);
	}




	public function deleteCart() {
		$code = null;
		if(isset($_POST["deleteBtn"])){

			$cartID = $_POST["cartID"];

			
			
			try {
				$cartModel = new Cart($this->conn);
				$cartModel->deleteCartData($cartID);
				$code = 204;
			} catch(PDOException $e){
				echo $e->getMessage();
				$code = 500;
			}
		}
		
		$this->json($code);
	}







	public function getFromCart(){

		// $code = null;
		$data = "";
		if(isset($_POST["btnCart"])){

			$userID = $_POST["userID"];
			
			
			try {
				$cartModel = new Cart($this->conn);
				$data = $cartModel->getCart($userID);

			} catch(PDOException $e){
				echo $e->getMessage();
				$code = 500;
			}
		}
		
		$this->json($data);


		
	}


	public function getAllFromCart() {
		try {	
			$userID=$_SESSION['user']->userID;
				$cartModel = new Cart($this->conn);
				$data = $cartModel->getAllCart($userID);

			} catch(PDOException $e){
				echo $e->getMessage();
			}


			$this->json($data);
	}

	public function getNewAmount(){

		try{
			$userID=$_SESSION['user']->userID;
			$cartModel = new Cart($this->conn);
			$data = $cartModel->sumPrice($userID);
		} catch(PDOException $e){
			echo $e->getMessage();
		}

		$this->json($data);
	}




	public function numberOfBooks(){

		$code = null;
		$data = "";

			try {
				$userID=$_SESSION['user']->userID;
				$cartModel = new Cart($this->conn);
				$data = $cartModel->getNumberOfBooks($userID);
				
			} catch(PDOException $e){
				echo $e->getMessage();
				$code = 500;
			}
		
		$this->json($data);

	}



	public function cart(){
		$menu = $this->linkMenu($this->conn);

		$networks = $this->linkNetwork($this->conn);
		$userID=$_SESSION['user']->userID;
		$cartModel = new Cart($this->conn);
		$cart = $cartModel->getCart($userID);

		$sum = $cartModel->sumPrice($userID);

		
        
		$cartNumber = $cartModel->getNumberOfBooks($userID);

		$this->view("cart", ["menu" => $menu, "networks" => $networks, "products" => $cart, "sum" => $sum, "cartNumber" => $cartNumber]);

	}
	


}