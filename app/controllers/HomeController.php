<?php
namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller {
    public function __construct() {
        // Start the session

        // ✅ Restrict access to admins only
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
            if($_SESSION['role'] === 'admin'){
                header("Location: menu"); 
                exit();
            }
            header("Location: login"); // Redirect unauthorized users
            exit();
        }
    }
    public function index() {
        $this->view("home/index");
    }
}
