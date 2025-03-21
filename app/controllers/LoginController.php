<?php
namespace App\Controllers; // ✅ Ensure namespace is correct

use Core\Controller;
use Config\Database;

class LoginController extends Controller {
    
    public function login() {

       // ✅ Generate CSRF token if not set
       if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate secure token
    }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("❌ CSRF Token validation failed.");
            }
            $db = Database::getConnection();
            $stmt = $db->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($user && hash("sha256", $password) === $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === "admin") {
                    header("Location: admin");
                } else {
                    header("Location: home");
                }
                exit();
            } else {
                $_SESSION['error'] = "Invalid credentials!";
                header("Location: login");
                exit();
            }
        }
        require_once __DIR__ . "/../views/login/login.php";
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: login");
        exit();
    }
}
