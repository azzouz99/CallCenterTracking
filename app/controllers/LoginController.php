<?php
namespace App\Controllers;

use Core\Controller;

class LoginController extends Controller {
    private $ldap_host = "ldap://your-ad-server";
    private $ldap_dn = "DC=yourdomain,DC=com"; // AD Domain
    private $ldap_port = 389; // Use 636 for LDAPS (secure)

    public function login() {
        $this->view("login/login");
    }

    public function authenticate() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Attempt LDAP authentication
            if ($this->ldapAuthenticate($username, $password)) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "admin"; // You may fetch the role from AD
                header("Location: /menu");
                exit();
            } else {
                echo "Invalid credentials!";
            }
        }
    }

    private function ldapAuthenticate($username, $password) {
        $ldap_conn = ldap_connect($this->ldap_host, $this->ldap_port);
        if (!$ldap_conn) {
            die("Could not connect to LDAP server.");
        }

        ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);

        // Bind using user credentials
        $ldap_bind = @ldap_bind($ldap_conn, "CN={$username},{$this->ldap_dn}", $password);

        if ($ldap_bind) {
            ldap_unbind($ldap_conn); // Close connection
            return true;
        }
        return false;
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /login");
        exit();
    }
}
