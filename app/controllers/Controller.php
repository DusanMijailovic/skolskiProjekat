<?php

    namespace app\controllers;
    
    use app\models\Menu;
    use app\models\Network;
    use app\models\Cart;

    class Controller {
        
      

        protected function view($view, $data = null){

            require_once 'app/views/fixed/head.php';
            require_once 'app/views/fixed/nav.php';
           
            require_once 'app/views/pages/' . $view . ".php";

            require_once 'app/views/fixed/footer.php';

        }

        protected function viewAdmin($view, $data=null){
            require_once 'app/views/pages/admin/head.php';
            require_once 'app/views/pages/admin/nav.php';
            require_once 'app/views/pages/admin/side.php';
            require_once 'app/views/pages/admin/' . $view . '.php';
            require_once 'app/views/pages/admin/footer.php';

        }

       

        protected function redirect($page) {
            header("Location:" . $page);
        }
    


        protected function json($data = null, $statusCode = 200){
            header("Content-Type: application/json");
            http_response_code($statusCode);
            echo json_encode($data); 

        }

        protected function linkMenu($db){
            $menuModel = new Menu($db);
            return  $menuModel->getAllMenu();
        }

        protected function linkNetwork($db)
        {
            $networkModel = new Network($db);
            return $networkModel->getAllNetworks();
        }

        protected function linkCart($db, $userID)
        {
            
            $cartModel = new Cart($db);
		    return $cartModel->getNumberOfBooks($userID);
        }

        protected function saveLog($user){
            $open = fopen(log_file, "a");
            if($open){
                 $date = date('d-m-Y H:i:s');
                fwrite($open, "{$_SERVER['PHP_SELF']}\t{$user}\t{$date}\t{$_SERVER['REMOTE_ADDR']}\t\n");
                fclose($open);
            }
        }
    
        
        protected function saveErrors($errors){
            $open = fopen(error_file, "a");
            if($open){
                    fwrite($open, "{$errors}\n");
                    fclose($open);
               
            }
        }


    
    
    }