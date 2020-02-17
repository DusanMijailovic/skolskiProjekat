<?php

require_once "app/config/autoload.php";
require_once "app/config/database.php";

use app\models\Database;
use app\controllers\PageController as Home;
use app\controllers\BookController as Book;
use app\controllers\ContactController as Cont;
use app\controllers\LoginController;
use app\controllers\RegController;
use app\controllers\CategoryController as Cat;
use app\controllers\CartController;
use app\controllers\UserAdminController as User;
use app\controllers\ContactAdminController as Contact;
use app\controllers\CategoryAdminController as Category;
use app\controllers\BookAdminController as BookAdmin;
use app\controllers\MenuAdminController as Menu;
use app\controllers\SocialAdminController as Social;




$conn = new Database(SERVER, DATABASE, USERNAME, PASSWORD);


if(isset($_GET["page"])){
	switch($_GET["page"]){

		case "home" :
			$pageController = new Home($conn);
			$pageController->home();
		break;
		case "category":
			$categoryController = new Cat($conn);
			$categoryController->categoryBook();
		break;
		case "search" :
			$pageController = new Home($conn);
			$pageController->search();
			
		break;
		case "book":
			$bookController = new Book($conn);
			$bookController->book();
		break;
		case "contact":
			$contactController = new Cont($conn);
			$contactController->contact();
			
		break;
		case "contact-Upis":
			$contactController = new Cont($conn);
			$contactController->insertContact();
		break;
		case "about":
			$pageController = new Home($conn);
			$pageController->about();
		break;
		case "login":
			$loginController = new LoginController($conn);
			$loginController->loginView();
		break;
		case "checkLogin":
			$loginController = new LoginController($conn);
			$loginController->login();
		break;
		case "logout":
			$loginController = new LoginController($conn);
			$loginController->logout();
		break;
		case "register":
			$regController = new RegController($conn);
			$regController->register();
			
		break;
		case "reg":
			$regController = new RegController($conn);
			$regController->registration();
		break;
		case "cart":
			$cartController = new CartController($conn);
			$cartController->cart();
		
		break;
		case "insertCart":
			$cartController = new CartController($conn);
			$cartController->insertCart();
		break;
		case "getCart":
			$cartController = new CartController($conn);
			$cartController->getFromCart();
		break;

		case "getAllCart":
			$cartController = new CartController($conn);
			$cartController->getAllFromCart();
		break;
		case "getAmount":
			$cartController = new CartController($conn);
			$cartController->getNewAmount();
		break;
		case "getCartNumber":
			$cartController = new CartController($conn);
			$cartController->numberOfBooks();
		break;
		case "deleteCart":
			$cartController = new CartController($conn);
			$cartController->deleteCart();
		break;
		case "admin" :
			$adminPageController = new User($conn);
			$adminPageController->user();
		break;
		case "deleteUser" :
			$adminPageController = new User($conn);
			$adminPageController->deleteUser();
		break;
		case "getUsers" :
			$adminPageController = new User($conn);
			$adminPageController->getUsers();
		break;
		case "contactAdmin" :
			$contactAdminController = new Contact($conn);
			$contactAdminController->contact();
		break;
		case "categoryAdmin" :
			$categoryAdminController = new Category($conn);
			$categoryAdminController->category();
		break;
		case "insertCategory" :
			$categoryAdminController = new Category($conn);
			$categoryAdminController->categoryInsert();
		break;
		case "getCategory" :
			$categoryAdminController = new Category($conn);
			$categoryAdminController->getCategory();
		break;
		case "getOneCategory" :
			$categoryAdminController = new Category($conn);
			$categoryAdminController->getOneCategory();
		break;
		case "deleteCategory" :
			$categoryAdminController = new Category($conn);
			$categoryAdminController->categoryDelete();
		break;
		case "updateCategory" :
			$categoryAdminController = new Category($conn);
			$categoryAdminController->updateCategory();
		break;
		case "bookAdmin" :
			$bookAdminController = new BookAdmin($conn);
			$bookAdminController->book();
		break;
		case "insertBook" :
			$bookAdminController = new BookAdmin($conn);
			$bookAdminController->bookInsert();
		break;
		case "deleteBook" :
			$bookAdminController = new BookAdmin($conn);
			$bookAdminController->deleteBook();
		break;
		case "getBooks" :
			$bookAdminController = new BookAdmin($conn);
			$bookAdminController->getAllBooks();
		break;
		case "getOneBook" :
			$bookAdminController = new BookAdmin($conn);
			$bookAdminController->getOneBook();
		break;
		case "updateBook" :
			$bookAdminController = new BookAdmin($conn);
			$bookAdminController->updateBook();
		break;
		
		case "deleteContact" :
			$contactAdminController = new Contact($conn);
			$contactAdminController->deleteContact();
		break;
		case "getContact" :
			$contactAdminController = new Contact($conn);
			$contactAdminController->getContact();
		break;
		
		default:
			$pageController = new Home($conn);
			$pageController->home();
		break;
	}




}else{
	$pageController = new Home($conn);
			$pageController->home();
}





/* if (isset($_GET['page'])) {
	$page = $_GET['page'];
}

switch ($page) {
	case 'home':
	require_once "app/views/pages/home.php";
	break;
	case 'product':
	require_once "app/views/pages/product.php";
	break;
	case 'contact':
	require_once "app/views/pages/contact.php";
	break;
	case 'about':
	require_once "app/views/pages/about.php";
	break;
	case 'login':
	require_once "app/views/pages/login.php";
	break;
	case 'register':
	require_once "app/views/pages/register.php";
	break;
	default:
	require_once "app/views/pages/home.php";
	break;
}

require_once "app/views/footer.php"; */












