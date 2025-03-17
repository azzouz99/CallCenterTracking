<?php
namespace App\Controllers;

use Core\Controller;

class MenuController extends Controller {
    public function index() {
        $this->view("menu/index");
    }
}