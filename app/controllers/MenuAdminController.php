<?php

namespace app\controllers;

use app\models\Menu;


class MenuAdminController extends Controller {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function menu()
    {
        $modelMenu = new Menu($this->conn);
        $menu = $modelMenu->getAllMenu();

        $this->viewAdmin("menuAdmin", ["menu" => $menu]);
    }



}