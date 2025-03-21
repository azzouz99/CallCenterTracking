<?php
namespace App\Controllers;

use Core\Controller;
class AdminController extends Controller {

    public function __construct() {
        // Start the session

        // ✅ Restrict access to admins only
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
            if($_SESSION['role'] === 'user'){
                header("Location: home"); 
                exit();
            }
            header("Location: login"); // Redirect unauthorized users
            exit();
        }
    }

    public function index() {
        $this->view("admin/index");
    }

    public function agents() {
        $this->view("admin/agents");
    }
}